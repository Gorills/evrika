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


Route::get('/stock/{slug}', 'ShopController@stock')->name('stock');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('/stock', 'StockController', ['as'=>'admin']);
    Route::resource('/event', 'EventController', ['as'=>'admin']);
    Route::resource('/work', 'WorkController', ['as'=>'admin']);

    Route::get('/store', 'StoreController@store')->name('admin.store');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
});


Route::get('/', 'IndexController@index');
Route::get('/works', 'WorksController@index')->name('works');




Route::get('/yuridicheskie-uslugi', function () {
    return view('yuridicheskie-uslugi');
});
Route::get('/ipoteka', function () {
    return view('ipoteka');
});
Route::get('/kupit', function () {
    return view('kupit');
});
Route::get('/prodat', function () {
    return view('prodat');
});
Route::get('/kommercheskaya-nedvizhimost', function () {
    return view('kommercheskaya-nedvizhimost');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/map', function () {
    return view('map');
});
Route::get('/soglashenie', function () {
    return view('soglashenie');
});

Route::get('/vacancy', function () {
    return view('vacancy');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
