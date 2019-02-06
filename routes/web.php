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


Route::resource('recipes', 'RecipeController')->except('index');
Route::get('/', 'IndexController@index')->name('home');
Route::get('/search', 'IndexController@search')->name('search'); // search test working
Route::get('/filter', 'IndexController@filter')->name('filter');
Route::get('/test', 'Testcontroller@index');
Route::get('/delete/{id}', 'Testcontroller@destroy')->name('delete.destroy');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', 'SendEmailController@index');
Route::post('/contact/send', 'SendEmailController@send');

Route::get('/addrecipe', function () {
    return view('backend.addrecipe');
});

Route::get('/recipe', function () {
    return view('pages.recipe');
});
Route::post('recipe/{id}/favorite', 'Usercontroller@favorite')->name('recipe.favorite');
Route::post('/recipe/{id}/comment', 'CommentController@store')->name('recipe.comment');

Route::get('/user', 'UserController@userProfile')->middleware();
Route::post('/user', 'UserController@updateProfilepic')->middleware();


Auth::routes();
