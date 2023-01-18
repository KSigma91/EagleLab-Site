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
    return view('eaglelab.layouts.app');
});

Route::get('upload', 'ImageController@create')->name('image.create');
Route::post('uploaded', 'ImageController@index')->name('image.index');

Route::get("{any?}", function () {
    return view('guest.layouts.app');
})->where("any", ".*")->name('home');
