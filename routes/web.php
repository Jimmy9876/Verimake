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

//index page
Route::get('/', 'ShowController@index');
Route::get('index', 'ShowController@index');
//about page
Route::get('about', 'ShowController@about');
//contact us page
Route::get('contact', 'ShowController@contact');
//blog page
Route::get('blog', 'BlogController@index');
//blog detail page
Route::get('blog/{blog}', 'BlogController@show');
// //create blog page
// Route::get('blog/create', 'BlogController@create');
// Route::post('blog', 'BlogController@store');
// //edit blog page
// Route::get('blog/{blog}/edit', 'BlogController@edit');
// Route::put('blog/{blog}', 'BlogController@update');
// //delete blog page
// Route::get('blog/delete', 'BlogController@delete');
