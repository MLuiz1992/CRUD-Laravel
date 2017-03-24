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

Route::get('/', 'SiteController@inicio');
Route::get('/form', 'SiteController@form');
Route::post('/form', 'SiteController@insert');

Route::get('/generos', 'GeneroController@index');
Route::get('/generos/create', 'GeneroController@create');
Route::post('/generos/store', 'GeneroController@store');

Route::get('/atores', 'AtoresController@index');
Route::get('/atores/create', 'AtoresController@create');
Route::post('/atores/store', 'AtoresController@store');
Route::post('/atores/edit', 'AtoresController@edit');
