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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/item1', function() {
    return view('item1');
   });

Route::get('/item2', function() {
    return view('item2');
   });

Route::get('/item3', function() {
    return view('item3');
   });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

