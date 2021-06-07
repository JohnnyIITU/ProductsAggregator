<?php

namespace App\Http\Controllers;

use App\Companies;
use App\MapMarker;
use App\ProductPrices;
use App\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin/welcome');
    }
    public function list($type){
        if($type=='company'){
            $model = Companies::all();
            $result = [];
            foreach ($model as $item){
                array_push($result, [
                    'title' => 'Список компании',
                    'id' => $item->id,
                    'name' => $item->name,
                ]);
            }
            return view('admin/list', [
                'link' => '/admin/company',
                'title' => ' компанию',
                'list' =>$result,
            ]);
        }
        elseif($type=='products')
        {
            $model = Products::all();
            $result = [];
            foreach ($model as $item){
                array_push($result,[
                    'title' => 'Список продуктов',
                    'id' => $item->id,
                    'name' => $item->name
                ]);
            }

            return view('admin/list', [
                'link' => '/admin/product',
                'title' => ' продукт',
                'list' =>$result,
            ]);
        }
        elseif($type=='price')
        {
            $model = ProductPrices::all();
            $result = [];
            foreach ($model as $item){
                array_push($result, [
                    'id' => $item->id,
                    'company' => Companies::where('id', '=', $item->company_id)->get()[0]->name,
                    'product' => Products::where('id', '=', $item->product_id)->get()[0]->name,
                    'price' => $item->price,
                    'date' => DashboardController::getDateString($item->month_count),
                ]);
            }
            return view('admin/list', [
                'type' => 'price',
                'list' =>$result,
            ]);
        }
        elseif($type=='marker') {
            $model = MapMarker::all();
            $result = [];
            foreach ($model as $item){
                array_push($result, [
                    'id' => $item->id,
                    'location' => $item->location,
                    'info' => $item->info,
                    'company' => Companies::where('id', '=', $item->company_id)->get()[0]->name,
                ]);
            }
            return view('admin/list', [
                'type' => 'location',
                'list' => $result,
            ]);
        }
        else
        {
            abort(404);
        }
    }
    public function addindex($id){
        $price = $id == 0 ? 0 : ProductPrices::where('id', '=', $id)->get()[0]->price;
        $product_id = $id == 0 ? 0 : ProductPrices::where('id', '=', $id)->get()[0]->product_id;
        $company_id = $id == 0 ? 0 : ProductPrices::where('id', '=', $id)->get()[0]->company_id;
        $date = $id == 0 ? $this->get_date(0) : $this->get_date(ProductPrices::where('id', '=', $id)->get()[0]->month_count);
        $companies = DashboardController::getCompanyList();
        $products = DashboardController::getProductList();

        return view('admin/add', [
            'companiesList' => $companies,
            'productsList' => $products,
            'id' => $id,
            'price' => $price,
            'product_id' => $product_id,
            'company_id' => $company_id,
            'date' => $date
        ]);
    }
    protected function get_date($count){
        if($count != 0){
            $month = $count%12;
            $year = floor($count/12);
            $time = strtotime($month.'/01'.'/'.$year);
            return date('Y-m-d',$time);
        }else{
            return date('Y-m-d', time());
        }
    }
    public function add($id){

        if($id == 0){
            $model = new ProductPrices();
        }else{
            $model = ProductPrices::where('id', '=', $id);
        }
        foreach ($_POST as $key=>$value){
            if($key != '_token'){
                if($key=='date'){
                    $date_begin = $value;
                    $begMonth = date('m', strtotime($date_begin));
                    $begYear = date('Y', strtotime($date_begin));
                    $begin = (int)$begYear * 12 + (int)$begMonth;
                    $model->month_count = $begin;
                }else {
                    $model->$key = $value;
                }
            }
        }
        if($id == 0){
            $model->save();
        }else {
            $model->update([
                'price' => $_POST['price'],
                'month_count' => $model->month_count,
            ]);
        }
        return redirect('/admin/');
    }
    public function delete($id){
        ProductPrices::where('id', '=', $id)->delete();
    }
    public function addMarker(Request $request){
        if(isset($_POST['id'])){
            $model = MapMarker::where('id', '=', $_POST['id'])->get()[0];
            return view('admin/markeradd',[
                'id' => $model->id,
                'location' => $model->location,
                'companiesList' => DashboardController::getCompanyList(),
                'info' => $model->info,
                'company_id' => Companies::where('id','=',$model->company_id)->get()[0]->name,
            ]);
        }else{
            return view('admin/markeradd', [
                'id' => 0,
                'companiesList' => DashboardController::getCompanyList(),
                'company_id' => 0,
            ]);
        }
    }
    public function updatemarker($id, Request $request){
        if($id=='0'){$model = new MapMarker();
            $model->location = $request->input('location');
            $model->info = $request->input('info');
            $model->company_id = $request->input('company_id');
            $model->save();
        }else{
            $model = MapMarker::where('id', '=', $id);
            $model->update([
                'location' => $request->input('location'),
                'info' => $request->input('info'),
            ]);
        }
        return redirect('/admin/');
    }
    public function deleteMarker($id){
        MapMarker::where('id','=',$id)->delete();
    }

    public function addCompany(){
        $name = $_POST['name'];
        $model = new Companies();
        $model->name= $name;
        $model->save();
        return redirect('/admin/');
    }

    public function addProduct(){
        $name = $_POST['name'];
        $model = new Products();
        $model->name = $name;
        $model->save();
        return redirect('/admin/');
    }

    public function addCompanyView(){
        return view('admin.addname', [
            'title' => 'Название компании',
            'link' => '/admin/company'
        ]);
    }

    public function addProductView(){
        return view('admin.addname', [
            'title' => 'Название продукта',
            'link' => '/admin/product',
        ]);
    }
}
