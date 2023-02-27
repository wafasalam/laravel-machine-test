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

//User:
Route::get('user', 'App\Http\Controllers\UserController@index');
Route::get('user/create', 'App\Http\Controllers\UserController@create');
Route::post('user/store', 'App\Http\Controllers\UserController@store');

//department:
Route::get('department', 'App\Http\Controllers\DepartmentController@index');
Route::get('department/create', 'App\Http\Controllers\DepartmentController@create');
Route::post('department/store', 'App\Http\Controllers\DepartmentController@store');

//designation:
Route::get('designation', 'App\Http\Controllers\DesignationController@index');
Route::get('designation/create', 'App\Http\Controllers\DesignationController@create');
Route::post('designation/store', 'App\Http\Controllers\DesignationController@store');

Route::get('search', 'App\Http\Controllers\SearchController@index');
Route::get('search-get', 'App\Http\Controllers\SearchController@search');