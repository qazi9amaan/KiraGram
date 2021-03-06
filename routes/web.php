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
Route::get('/profile/{user}/following', 'FollowsController@following')->name('follows.following');
Route::get('/profile/{user}/followers', 'FollowsController@followers')->name('follows.followers');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/home', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post', 'PostController@store')->name('post.store');
Route::get('/post/{post}', 'PostController@show')->name('post.show');


Route::post('/follow/{user}', 'FollowsController@store')->name('user.store');




