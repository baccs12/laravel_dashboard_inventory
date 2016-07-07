<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', function () {
    return view('home.welcome');
});

// Route::get('item', 'ItemController@index');
// Route::get('item/create', 'ItemController@create');
// Route::post('item/store', 'ItemController@store');
// Route::get('item/{id}', 'ItemController@destroy');

// Route::get('item/edit/{id}', 'ItemController@edit');

// Route::post('item/update', 'ItemController@update');


Route::resource('item', 'ItemController');
Route::resource('supplier', 'SupplierController');
