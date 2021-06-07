<?php

namespace App\Http\Controllers;

use App\AdsSites;
use App\Brands;
use App\Companies;
use App\Products;
use App\ProductPrices;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    public function index(){
        $positions = [];
        return view('sidebar.positions.index', compact('positions'));
    }

    public function products(){
        $products = Products::all();
        return view('sidebar.products.index', compact('products'));
    }

    public function companies(){

        $companies = Companies::all();
        return view('sidebar.companies.index', compact('companies'));
    }

    public function example1(){
        $example1 = [];
        return view('sidebar.example.1', compact('example1'));
    }

    public function prices(){
        $model = ProductPrices::all();
        $prices = [];
        foreach ($model as $item){
            array_push($prices, [
                'id' => $item->id,
                'company' => Companies::where('id', '=', $item->company_id)->get()[0]->name,
                'product' => Products::where('id', '=', $item->product_id)->get()[0]->name,
                'price' => $item->price,
                'date' => DashboardController::getDateString($item->month_count),
            ]);
        }
        return view('sidebar.prices.index', compact('prices'));
    }

    public function import(){
        return view('sidebar.shared.import');
    }

    public function magazines(){
        $result = AdsSites::all();
        $title = 'магазинов';
        return view('sidebar.shared.index', compact('result'), compact('title'));
    }

    public function brands(){
        $result = Brands::all();
        $title = 'брэндов';
        return view('sidebar.shared.brands', compact('result'), compact('title'));
    }
}
