<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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

// Route::get('/uts', function () {
//     return view('ujiantengahsemester');
// });
// Route::get('/uts', [DosenController::class, 'getUts']);
Route::get('/ujian-tengah-semester', 'App\Http\Controllers\DosenController@getUts');

Route::get('/uts/validation', function () {
    return view('validation');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showblog');

Route::get('/pegawai/{nama}', [DosenController::class, 'showNama']);

Route::get('/formulir', [DosenController::class, 'formulir']);
Route::post('/formulir/proses', [DosenController::class, 'proses']);

Route::get('/master', function() {
    return view('master');
});

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');
