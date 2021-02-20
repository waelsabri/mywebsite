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

// User Interface Urls (Front Of Website)
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('show', function(){
    return view('showdata') -> with('name', 'waelsabriwaelsabri');
});





Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
