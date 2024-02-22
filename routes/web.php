<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', 'App\Http\Controllers\Test@test');
// Route::get('/user_create','App\Http\Controllers\UserController@create');
// Route::get('/create_user','App\Http\Controllers\UserController@creat_user');
Route::post('/users','App\Http\Controllers\UserController@store');
Route::put('/users','App\Http\Controllers\UserController@update');
Route::patch('/users','App\Http\Controllers\UserController@updateName');
Route::delete('/users','App\Http\Controllers\UserController@delete');
Route::any('/test-any',function(){
    return "I am from any!";
});
Route::get('/store/profile/{id}/{name?}','App\Http\Controllers\UserController@show');
Route::get('/users/{id}','App\Http\Controllers\UserController@display')->where('id','[0-9]+');
Route::get('/users/create','App\Http\Controllers\UserController@creat_user');


Route::prefix('admin')->group(function(){
    Route::get('/hello',function(){
        return "hello";
    });
    Route::get('/world',function(){
        return "world";
    });
});
