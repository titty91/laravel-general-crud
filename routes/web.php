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

Route::get('/home', 'TestController@home') -> name('home'); /*entro nella pagina principale */

Route::get('/match/{id}', 'TestController@show') -> name('show'); /*entro nella pagina dedicata alla singola partita */

Route::get('/create', 'TestController@create') -> name('create'); /*entro nella pagina dedicata alla creazione di un nuovo Match partita */

Route::post('/store', 'TestController@store') -> name('store'); /*creiamo la rotta per il trasferimento del form */