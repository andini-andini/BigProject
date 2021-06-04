<?php


// namespace App\Http\Controllers\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil');

Route::get('/basic-table', [App\Http\Controllers\HomeController::class, 'table'])->name('table');

Route::get('/table-fasilitas', [App\Http\Controllers\HomeController::class, 'fasilitas'])->name('fasilitas');
