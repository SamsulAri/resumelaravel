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

Route::get('datadiri/create',        [ 'as'=>'datadiri.create',       'uses' => 'DatadiriController@create']);
Route::post('datadiri/store',        [ 'as'=>'datadiri.store',        'uses' => 'DatadiriController@store']);
Route::get('datadiri/show/{id}',     [ 'as'=>'datadiri.show',         'uses' => 'DatadiriController@show']);
Route::get('datadiri/edit/{id}',     [ 'as'=>'datadiri.edit',         'uses' => 'DatadiriController@edit']);
Route::post('datadiri/update/{id}',  [ 'as'=>'datadiri.update',       'uses' => 'DatadiriController@update']);
Route::get('datadiri/delete/{id}',   [ 'as'=>'datadiri.delete',       'uses' => 'DatadiriController@delete']);

Route::get('admin/show/{id}',     [ 'as'=>'admin.show',         'uses' => 'AdminController@show']);

