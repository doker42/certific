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

Route::get('/', 'MainController@index')->name('start');
Route::get('/form', 'MainController@form')->name('form');
Route::post('/create', 'MainController@create')->name('create');
Route::get('/load-page/{certificate}', 'MainController@loadPage')->name('load_page');
Route::get('/load/{certificate}', 'MainController@loadPdf')->name('load_pdf');
Route::get('/list', 'MainController@list')->name('list');

