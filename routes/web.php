
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
//base
Route::get('/', 'UsersController@index')->name('index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//users
Route::get('users/{id}/edit', 'UsersController@edit');
Route::put('users/{id}', 'UsersController@update');

//argomenti
Route::get('argument/{id}', 'ArgumentsController@index');
Route::post('argument', 'ArgumentsController@store')->name('storeArgument');

//articoli
Route::get('article/{id}', 'ArticlesController@view');
Route::post('article', 'ArticlesController@store')->name('storeArticle');
Route::get('myarticles', 'ArticlesController@getUserArticles')->name('myArticles');
