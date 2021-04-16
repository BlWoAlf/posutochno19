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

Route::group(
    [
        'namespace' => 'Catalog\Admin',
        'prefix' => 'admin',
    ],
    function(){
        Route::get('/',['as' => 'dashboard','uses' => 'ApartmentsController@index']);
        Route::get('edit-apartment/{id}',['as' => 'edit','uses' => 'ApartmentsController@show']);
        Route::put('save-edit/{id}', ['as' => 'save-edit', 'uses' => 'ApartmentsController@update']);
        Route::get('create-apartment',['as' => 'create', 'uses' => 'ApartmentsController@create']);
        Route::post('save-create',['as' => 'save-create','uses' => 'ApartmentsController@store']);
        Route::delete('delete-apartment/{id}',['as' => 'delete', 'uses' => 'ApartmentsController@destroy']);
    }
);

Route::resource('/', 'Catalog\MainPageController');

Route::get('apartment/{id}', 'Catalog\ApartmentPageController@show');

Route::resource('pravila_prozhivaniya', 'Catalog\RulesController');

Route::resource('otchetnye-dokumenty', 'Catalog\DocumentsController');

Route::resource('sposoby_oplaty', 'Catalog\PaymentController');