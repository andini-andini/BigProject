<?php


// namespace App\Http\Controllers\Auth;

use App\Http\Controllers\fasilitasController;
use App\Http\Controllers\kamarController;
use App\Http\Controllers\reservasiController;
use App\Http\Controllers\UserController;
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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil');

Route::resource('user', UserController::class);
Route::resource('fasilitas', fasilitasController::class);
Route::resource('kamar', kamarController::class);
Route::resource('reservasi', reservasiController::class);
