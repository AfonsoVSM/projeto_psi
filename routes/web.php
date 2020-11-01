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

Route::get('/', function () {
    return view('welcome');
});

Route::get('noticias','App\Http\Controllers\FormController@noticiasForm')->name('noticias.form');

Route::get('contactos','App\Http\Controllers\FormController@contactosForm')->name('contactos.form');

Route::get('empresa','App\Http\Controllers\FormController@empresaForm')->name('empresa.form');

Route::get('ondeestamos','App\Http\Controllers\FormController@ondeestamosForm')->name('ondeestamos.form');

Route::post('processar','App\Http\Controllers\FormController@processarForm')->name('processar.form');

Route::get('welcome', function () {
    return view('welcome');
});