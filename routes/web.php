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

Route::resource('recipes','RecipeController');

Route::resource('recipes','RecipeController')
->except('index');
Route::get('/', 'IndexController@index')->name('home');

Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/addrecipe', function () {
    return view('pages.addrecipe');
Route::get('/recipe', function () {
    return view('pages.recipe');
});

Auth::routes();
