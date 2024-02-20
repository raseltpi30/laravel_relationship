<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wlc', function () {
    return "greetingbbbbbbbbbbb welcome 2";
});
Route::get('/test', 'App\Http\Controllers\Test@test');
Route::get('/user_create','App\Http\Controllers\UserController@create');
Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/{id}', 'App\Http\Controllers\UserController@show');
Route::get('/users/{id}/delete','App\Http\Controllers\UserController@delete');
Route::get('/users/{id}/edit', 'App\Http\Controllers\UserController@edit');
Route::get('/users/{id}/edit', 'App\Http\Controllers\UserController@edit');
Route::get('/users/{id}/edit', 'App\Http\Controllers\UserController@edit');
// Route::get('/wlc','Test@test');