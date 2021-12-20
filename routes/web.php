<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LokasiController;

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

Route::get('/peralatan', [App\Http\Controllers\PeralatanController::class, 'index'])->name('peralatan');
Route::get('/peralatan/create', [App\Http\Controllers\PeralatanController::class, 'create'])->name('peralatan-create');
Route::post('/peralatan/store', [App\Http\Controllers\PeralatanController::class, 'store'])->name('peralatan-store');
Route::get('/peralatan/{id}', [App\Http\Controllers\PeralatanController::class, 'show'])->name('peralatan-detail');
Route::resource('lokasi', LokasiController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
