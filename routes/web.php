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

// Route::get('/', 'ReportController@index');
Route::get('/', 'CowController@index');
Route::get('/cow/index', 'CowController@index');
Route::get('/cow/create', 'CowController@create');
Route::get('/cow/{id}/edit', 'CowController@edit');
Route::get('/milk', 'MilkController@index');

Route::post('/cow/{id}/update', 'CowController@update');
Route::post('/cow/store', 'CowController@store');
// Route::get('/invoice/{id}/invoice', 'InvoiceController@invoice');

// Route::get('/', function () {
//     return view('welcome');
// });
