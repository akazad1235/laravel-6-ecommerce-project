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

Route::get('/', 'SiteController@home')->name('home');
Route::get('/product', 'SiteController@product')->name('product');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('dashboard');
Route::get('/brand/add-brand', 'brandController@addBrand')->name('addBrand');
Route::post('/brand/create-brand', 'brandController@create')->name('create');

Route::get('/brand/manage-brand', 'brandController@manageBrand')->name('manageBrand');
