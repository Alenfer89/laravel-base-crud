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
Route::prefix('comics')
->name('comics.')
->group(function(){
    Route::get('', "ComicController@index")->name('index');
    Route::get('/comic{id}', "ComicController@show")->name('show');
    Route::get('/add', "ComicController@create")->name('create');
    Route::post('/request', "ComicController@store")->name('store');
});


Route::get('/', "HomeController@index")->name('home');

