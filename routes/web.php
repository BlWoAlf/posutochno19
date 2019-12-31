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

Route::resource('/', 'Catalog\MainPageController');

Route::get('apartment/{id}', 'Catalog\ApartmentPageController@show');

Route::resource('pravila_prozhivaniya', 'Catalog\RulesController');

Route::resource('otchetnye-dokumenty', 'Catalog\DocumentsController');

Route::resource('sposoby_oplaty', 'Catalog\PaymentController');