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

/**
 * Homepage - pt.pubblica
 */
Route::get('/', 'HomeController@index')->name('home');

/**
 * Rotte Public
 */
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{slug}', 'PostController@show')->name('posts.show');

/**
 * Rotte per login/ Registrazione - pt.protetta
 */

Auth::routes();

/**
 * Rotte pagine per utenti loggati
 */

//Route::get('/home', 'HomeController@index')->name('home');
 
Route::prefix('admin') // prefisso rotta
    ->namespace('Admin') // cartella che ho creato
    ->name('admin.') 
    ->middleware('auth') // autenticazione
    ->group(function(){ 
        // Home admin
        Route::get('/', 'HomeController@index')->name('home');

        // Rotte Post CRUD
        Route::resource('posts', 'PostController');
    });