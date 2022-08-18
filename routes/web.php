<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('create','App\Http\Controllers\CrudController@create');
Route::get('view','App\Http\Controllers\CrudController@index');
Route::post('store','App\Http\Controllers\CrudController@store');
Route::get('edit/{id}','App\Http\Controllers\CrudController@edit');
Route::delete('destroy/{id}','App\Http\Controllers\CrudController@destroy');
Route::put('update/{id}','App\Http\Controllers\CrudController@update');
