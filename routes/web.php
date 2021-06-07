<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/getCurrency', 'DashboardController@getCurrency');
Route::post('/dashboard/getData', 'DashboardController@getData');


Route::get('/test', 'DashboardController@getCurrency');

Route::get('/admin/list/{type}', 'AdminController@list');
Route::get('/admin/', 'AdminController@index');
Route::post('/admin/company', 'AdminController@addCompany');
Route::post('/admin/product', 'AdminController@addProduct');
Route::get('/admin/company', 'AdminController@addCompanyview');
Route::get('/admin/product', 'AdminController@addProductview');
Route::post('/admin/add/{id}', 'AdminController@add');
Route::get('/admin/add/{id}', 'AdminController@addindex');
Route::get('/admin/delete/{id}', 'AdminController@delete');
Route::get('/admin/addmarker', 'AdminController@addmarker');
Route::post('/admin/updatemarker/{id}', 'AdminController@updatemarker');
Route::get('/admin/deletemarker/{id}', 'AdminController@deletemarker');

Route::get('/info/homepage', function (){
    return view('sidebar.positions.index');
});
Route::get('/info/secondary', function (){
    return view('sidebar.positions.secondary');
});
//Route::get('/positions/create', function (){
//    $positions = [];
//    return view('sidebar.positions.create', compact('positions'));
//});


Route::get('info/products', 'InfoController@products');
Route::get('info/companies', 'InfoController@companies');
Route::get('info/prices', 'InfoController@prices');
Route::get('info/import', 'InfoController@import');
Route::get('info/magazines', 'InfoController@magazines');
Route::get('info/brands', 'InfoController@brands');
Route::get('info/test', 'InfoController@test');

Route::get('test', 'DashboardController@test4');

Route::post('directions', 'DashboardController@directions');

Route::post('savePosition', 'DashboardController@addPositionToSession');
