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

Route::get('/', 'HomeController@index')->name('home.index');

//--------------------------------Collections Routes--------------------------------
//Index
Route::get('collections', 'CollectionController@index')->name('collections.index');
//Crear vista
Route::get('collections/create', 'CollectionController@create')->name('collections.create');
//Editar vista
Route::get('collections/{collection}/edit', 'CollectionController@edit')->name('collections.edit');
//Vista detalle
Route::get('collections/{collection}', 'CollectionController@show')->name('collections.show');
//Crear
Route::post('collections', 'CollectionController@store')->name('collections.store');
//Editar
Route::put('collections/{collection}', 'CollectionController@update')->name('collections.update');
//Eliminar
Route::delete('collections/{collection}', 'CollectionController@delete')->name('collections.delete');

//--------------------------------Genres Routes--------------------------------
//Index
Route::get('genres', 'GenresController@index')->name('genres.index');
//Crear vista
Route::get('genres/create', 'GenresController@create')->name('genres.create');
//Editar vista
Route::get('genres/{genre}/edit', 'GenresController@edit')->name('genres.edit');
//Vista detalle
Route::get('genres/{genre}', 'GenresController@show')->name('genres.show');
//Crear
Route::post('genres', 'GenresController@store')->name('genres.store');
//Editar
Route::put('genres/{genre}', 'GenresController@update')->name('genres.update');
//Eliminar
Route::delete('genres/{genre}', 'GenresController@delete')->name('genres.delete');

//--------------------------------Films Routes--------------------------------
//Index
Route::get('films', 'FilmsController@index')->name('films.index');
//Crear vista
Route::get('films/create', 'FilmsController@create')->name('films.create');
//Editar vista
Route::get('films/{film}/edit', 'FilmsController@edit')->name('films.edit');
//Vista detalle
Route::get('films/{film}', 'FilmsController@show')->name('films.show');
//Crear
Route::post('films', 'FilmsController@store')->name('films.store');
//Editar
Route::put('films/{film}', 'FilmsController@update')->name('films.update');
//Eliminar
Route::delete('films/{film}', 'FilmsController@delete')->name('films.delete');

//--------------------------------Collection-Film Routes--------------------------------
Route::get('collection/{collection}/film/edit', 'CollectionFilmController@edit')->name('collection.film.edit');
Route::put('collection/{collection}/film/update', 'CollectionFilmController@update')->name('collection.film.update');

//--------------------------------Users Routes--------------------------------
Route::get('register', 'UsersController@register')->name('users.register');
Route::post('register', 'UsersController@store')->name('register.store');
Route::get('perfil', 'UsersController@profile')->middleware('auth')->name('users.profile');
Route::get('logout', 'UsersController@logout')->name('users.logout');
Route::get('login', 'UsersController@login')->name('login');
Route::post('login', 'UsersController@authenticate')->name('users.authenticate');
