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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/development', 'ProjectController@index')->name('project.index');
Route::get('/development/open', 'ProjectController@open')->name('project.show');
Route::get('/development/complete', 'ProjectController@complete')->name('project.complete');