<?php

namespace App\Http\Controllers;

use App\Companies;
use App\MapMarker;
use App\ProductPrices;
use App\Products;
use App\User;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Self_;

class DashboardController extends Controller
{
    public const GMAPS_WIDTH = 'map_width';         //px,%,em
    public const GMAPS_HEIGHT = 'map_height';       //px,%,em
    public const GMAPS_CENTER = 'center';           //navigation
    public const GMAPS_ZOOM = 'zoom';               //1-20
    public const GMAPS_SCROOLWHEEL = 'scroolwheel'; //true/false
    public $gmap;


    public function __construct(GMaps $gmap)
    {
        $this->gmap = $gmap;
    }

    /**
     * @param string[] $companies CompaniesModel
     * @param string[] $products ProductsModel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $companies = self::getCompanyList();
        $products = self::getProductList();
        $map = $this->drawMap();
        return view('dashboard/index',[
            'companiesList' => $companies,
            'productsList' => $products,
            'map' => $map
        ]);
    }

    //Курс валют с НБРК

    /**
     * @param $url string
     * @param $data json
     * @param $decoded string
     * @param $currency array
     * @return string[]
     */
    public function getCurrency(){
        $url = 'http://www.nationalbank.kz/rss/rates.xml';
        $data = file_get_contents($url);
        $decoded = simplexml_load_string($data);
        $currency = [];
        foreach($decoded->channel->item as $item){
            $currency[(string)$item->title] = (string)$item->description;
        }
        echo json_encode($currency);
    }

    /**
     *
     */
    public function getData(){
        $date_begin = $_POST['begin'];
        $begMonth = date('m', strtotime($date_begin));
        $begYear = date('Y', strtotime($date_begin));
        $begin = (int)$begYear * 12 + (int)$begMonth;

        $date_end = $_POST['end'];
        $endMonth = date('m', strtotime($date_end));
        $endYear = date('Y', strtotime($date_end));
        $end = (int)$endYear * 12 + (int)$endMonth;
        $company = $_POST['companyId'];
        $products = $_POST['productId'];

        $result = [
            'table' => $this->getTableData($begin, $end, $company, $products),
            'chart' => $this->getChartData($company, $products),
        ];
        echo json_encode($result);
    }

    protected function getTableData($begin, $end, $company, $products){
        $condition = [
            ['month_count', '>=', $begin],
            ['month_count', '<=', $end],
        ];
        if($company != 0){
            array_push($condition, ['company_id' , '=', $company]);
        }
        if($products != 0){
            array_push($condition, ['product_id', '=', $products]);
        }

        $founded = ProductPrices::where($condition)->get();
        $result = [];
        foreach ($founded as $item){
            $result[] = [
                'magazine' => Companies::where(['id' => $item->company_id])->get()[0]->name,
                'product' => Products::where(['id' => $item->product_id])->get()[0]->name,
                'price' => $item->price,
            ];
        }
        return $result;
    }

    protected function getChartData($company = 0, $products = 0){
        $condition = [];
        array_push($condition, ['company_id' , '=', $company==0 ? '1' : $company]);
        array_push($condition, ['product_id', '=', $products==0 ? '1' : $products]);
        $founded = ProductPrices::where($condition)->get();
        $result = [];
        foreach ($founded as $item){
            array_push($result, [
                'date' => self::getDateString($item->month_count),
                'price' => $item->price,
            ]);
        }
        array_push($result, [
            'date' => 'Фев 2019',
            'price' => 12000,
        ]);
        array_push($result, [
            'date' => 'Мар 2019',
            'price' => 17000,
        ]);


        return $result;
    }

    public static function getDateString($monthCount){
        $year = floor($monthCount/12);
        $month = $monthCount%12;
        return self::getNameMonth($month).' '.$year;
    }

    protected static function getNameMonth($month){
        $monthLabel = [
            'Дек',
            'Янв',
            'Фев',
            'Мар',
            'Апр',
            'Май',
            'Июн',
            'Июл',
            'Авг',
            'Сен',
            'Окт',
            'Ноя',
        ];
        return $monthLabel[$month];
    }

    public static function getCompanyList(){
        $model = Companies::all();
        $result = [0 => 'Не выбрано'];
        foreach ($model as $company){
            $result = array_merge($result, [$company->id => $company->name]);
        }
        return $result;
    }

    public static function getProductList(){
        $model = Products::all();
        $result = [0 => 'Не выбрано'];
        foreach ($model as $company){
            $result = array_merge($result, [$company->id => $company->name]);
        }
        return $result;
    }

    protected function drawMap(){
        $this->mapsConfig();
        foreach ( MapMarker::all() as $model){
            $this->addMarker($model->location, $model->info);
        }
        $marker = array();
        $this->gmap->add_marker($marker);
        $map = $this->gmap->create_map();
        return $map;
    }

    protected function mapsConfig($height = '100%', $width = '100%', $zoom = 13, $scrollWheel = true, $center = '43.221599, 76.849911'){
        $config = array();
        $config[self::GMAPS_WIDTH] = $width;
        $config[self::GMAPS_HEIGHT] = $height;
        $config[self::GMAPS_SCROOLWHEEL] = $scrollWheel;
        $config[self::GMAPS_ZOOM] = $zoom;
        $config[self::GMAPS_CENTER] = $center;
        if(Session::get('position', 0) !== 0) {
            $l1 = '43.235845, 76.881560';
            $l2 = '43.233418, 76.878655';
            $config['directions'] = true;
            $config['directionsStart'] = $l1;
            $config['directionsEnd'] = $l2;
        }
        $this->gmap->initialize($config);
    }

    protected function addMarker($position, $info = ''){
        $marker = array();
        $marker['draggable'] = false;
        $marker['position'] = $position;
        $marker['infowindow_content'] = $info;
        $this->gmap->add_marker($marker);
    }

    public function test4(){
        $this->mapsConfig();
        $map = $this->gmap->create_map();
        return view('direction', compact('map'));
    }

    public function addPositionToSession(){
        $position = $_POST['pos'];
        Session::put('position', $position);
    }

}
