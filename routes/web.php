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

// Nama : Hanustavira Guru Acarya
// NIM : 2440046031

Route::get('/', 'App\Http\Controllers\LoginController@registration')->name('daftar');
Route::post('save_reg', 'App\Http\Controllers\LoginController@save_reg')->name('save_reg');
