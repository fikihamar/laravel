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
 
//verifikasi email user
Auth::routes(['verify' => true]);
 
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('crud')->group(function(){

    Route::prefix('category')->group(function(){
        Route::get('/','CategoryController@data')->name('category-data');
        Route::get('/add','CategoryController@add')->name('add-category');
        Route::post('/store','CategoryController@store')->name('store-category');
        Route::get('/edit/{category_id}','CategoryController@edit')->name('edit-category');
        Route::put('/save/{category_id}','CategoryController@save')->name('save-category');
        Route::delete('/delete/{category_id}}','CategoryController@delete')->name('delete-category');
    });

    Route::prefix('product')->group(function(){
        Route::get('/','ProductController@data')->name('product-data');
        Route::get('/add','ProductController@add')->name('add-product');
        Route::post('/store','ProductController@store')->name('store-product');
        Route::get('/edit/{product_id}','ProductController@edit')->name('edit-product');
        Route::put('/save/{product_id}','ProductCotroller@save')->name('save-product');
        Route::delete('/delete/{product_id}','ProductController@delete')->name('delete-product');
    });
});