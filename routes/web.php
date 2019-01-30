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

Route::resource('recipes', 'RecipeController')->middleware('verified');

Route::resource('recipes', 'RecipeController')
    ->except('index');
Route::get('/', 'IndexController@index')->name('home')->middleware();
Route::get('/test', 'Testcontroller@index'); // search test


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', 'SendEmailController@index');
Route::post('/contact/send', 'SendEmailController@send');


Route::get('/addrecipe', function () {
    return view('backend.addrecipe')->middleware('verified');
});

Route::get('/recipe', function () {
    return view('pages.recipe');
});

Route::get('/user', 'UserController@userProfile')->middleware('verified');

Auth::routes(['verify' => true]);
