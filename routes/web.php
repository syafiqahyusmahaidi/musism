<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/adminHome', 'AdminController@index')->name('adminHome');
Route::get('/product','ProductController@index');
Route::get('/resultSearch', 'ProductController@search')->name('resultSearch');
Route::post('/resultSearch', 'ProductController@search')->name('resultSearch');
//Route::get('/resultSearch', 'HomeController@index')->name('resultSearch');
//Route::get('/home', 'HomeController@redirect');
//Route::post('/home', 'HomeController@redirect');

//Route::get('/home', 'FilterController@index')->name('home');
//Route::get('/resultSearch', 'FilterController@show')->name('resultSearch');
//Route::get('/home', 'FilterController@brand')->name('home');
//Route::get('/home', 'FilterController@category')->name('home');


Route::resource('/contact', 'ContactController');
Route::resource('/discover', 'DiscoverController');
Route::resource('/filter', 'FilterController');
Route::resource('/profile', 'profileController');
Route::resource('/product', 'ProductController');
Route::resource('admin/adminmanageproduct', 'AdminmanageproductController');
Route::resource('admin/adminmanageuser', 'AdminmanageuserController');
Route::resource('/brand', 'BrandController');

Route::get('product/brand/{id}', 'HomeController@brand')->name('brand');

//route for admin
Route::group(['middleware' => ['auth', 'admin']], function(){
    //Route::resource('/adminPage', 'AdminController');
    //Route::get('/adminPage', 'AdminController@manageProduct')->name('adminPage.tableProduct')->middleware('admin');
    //Route::get('/adminPage', 'HomeController@adminHome')->name('adminHome');
    //Route::resource('/adminPage', 'AdminmanageuserController');
    //Route::resource('/adminPage', 'AdminmanageproductController');
    
});

//Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('admin');

//Route::resource('admin/adminmanageuser', 'UserController');





