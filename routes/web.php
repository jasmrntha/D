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

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/latihan1', function () {
    return view('latihan1');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/tes', function () {
    return view('tes');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/uts', function () {
    return view('index');
});

Route::get('/uts-validation', function () {
    return view('validation');
});
