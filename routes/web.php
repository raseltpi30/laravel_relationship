<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\Address;
use App\Models\Tag;
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

Route::get('one-to-one',function(){
    $user = User::find(1);
    $address = $user->address->first();
    // return $address;
    // print_r($address);
    echo $user->name."<br>";
    echo $user->email."<br>";
    echo $address->state."<br>";
    echo $address->city."<br>";
    echo $address->country."<br>";
    // return $user->;
});
Route::get('one-to-one-inverse',function(){
    $address = Address::find(2);
    return $address->user->name;
});
Route::get('one-to-many',function(){
    $user = User::find(1);

    // return $user;
    foreach($user->posts as $re){
        echo $re->title."<br>";
        echo $re->description."<br>";
    }
});
Route::get('one-to-many-inverse',function(){
    $post = Post::find(5);
    echo $post->user->name;

    $post->user->name = "New Name";
    $post->user->save();
});
Route::get('many-to-many',function(){
    $post = Post::find(2);
    // return $post->title;

    $post->tags;

    foreach($post->tags as $result){
        echo $result->title."<br>";
    }
});
Route::get('many-to-many-inverse',function(){
    $tag = Tag::find(2);
    return $tag->posts;
    foreach($tag->posts as $result){
        echo $result->title."<br>";
    }
});
Route::get('attach',function(){
    $post = Post::find(1);
    $post->tags()->attach([1, 2]);
    // return $post->tags;
});
Route::get('detach',function(){
    $post = Post::find(1);
    $post->tags()->detach();
    // return $post->tags;
});
Route::get('sync',function(){
    $post = Post::find(2);
    $post->tags()->sync([1,2,3,4]);
    // return $post->tags;
});