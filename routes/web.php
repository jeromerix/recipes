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

Route::get('/', 'IndexController@index')->name('home');
<<<<<<< HEAD
Route::get('/recipe', function () {
    return view('pages.recipe');
});
=======

>>>>>>> fbffaf0201f80d661bf63e807cf39de290434fb9
Auth::routes();
