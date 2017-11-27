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

Route::auth();


Route::get('/', function () {
    return view('auth/login');
});

Route::get('/catalog', 'CatalogController@index');
Route::get('/catalog/dataTable', 'CatalogController@indexDataTable');

//Diego

Route::resource('/provider', 'ProviderController')->middleware('auth');
Route::get('/provider/dataTable', 'ProviderController@indexDataTable');
Route::get('/provider/create', 'ProviderController@create');

Route::resource('/article', 'ArticleController')->middleware('auth');

Route::resource('/customer', 'CustomerController')->middleware('auth');


Route::resource('/sale', 'SaleController')->middleware('auth');
//Route::get('/sale/create', 'SaleController@create');
Route::get('/sale/customer/create', 'CustomerController@create')->middleware('auth');
//Route::get('sale/{id}', 'SaleController@show');
Route::resource('/dashboard', 'DashboardController')->middleware('auth');

//Oliver
Route::get('/product', 'ProductController@index');
Route::get('/product/dataTable', 'ProductController@indexDataTable');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//oscar
Route::resource('/warehouse', 'WarehouseController');


