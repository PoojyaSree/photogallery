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

Route::get('/','GalleryController@index');
Route::get('/albums/index','GalleryController@index');


Route::get('/albums/create','GalleryController@create');
Route::get('/albums/{id}','GalleryController@show');
Route::post('/albums/store','GalleryController@store');
Route::get('/photos/create/{id}','PhotoController@create');
Route::post('/photos/store','PhotoController@store');
Route::get('/photos/{id}','PhotoController@show');
Route::delete('/photos/{id}','PhotoController@destroy');

