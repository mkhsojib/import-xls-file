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

Route::get('/', 'StudentController@index')->name('index');
Route::get('/', 'StudentController@showStudents');
Route::post('import', 'StudentController@import')->name('import');

Route::get('/demo', 'DemoController@index');
Route::get('/demo', 'DemoController@showDemos');
Route::post('importdata', 'DemoController@import')->name('importdata');
