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
Route::view('/','welcome');

Route::get('contact','ContactFormController@create');
Route::post('contact','ContactFormController@store');

Route::view('about','about');

//Route::get('customers', 'CustomerController@index');
//Route::get('customers/create', 'CustomerController@create');
//Route::post('customers', 'CustomerController@store');
//Route::get('customers/{customer}', 'CustomerController@show');
//Route::get('customers/{customer}/edit', 'CustomerController@edit');
//Route::patch('customers/{customer}','CustomersController@update');
//Route::delete('customers/{customer}','CustomersController@destroy');

Route::resource('customers','CustomerController');