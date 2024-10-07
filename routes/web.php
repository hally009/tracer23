<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AktorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RespondenController;
use App\Http\Controllers\PollingController;
use App\Exports\AlumniExport;
use Maatwebsite\Excel\Facades\Excel;



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
    return view('indeks');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kuis', [App\Http\Controllers\KuisController::class, 'index'])->name('kuis')->middleware('auth');
Route::get('/blanko-kuis', [App\Http\Controllers\KuisController::class, 'blanko'])->name('blanko-kuis')->middleware('auth');
Route::post('/kuis', [App\Http\Controllers\KuisController::class, 'store'])->name('kuis.store')->middleware('auth');
Route::get('/form', [KuisController::class, 'showForm'])
    ->middleware('auth') // Ensure the user is logged in
    ->name('form.show');

Route::get('/aktor', [App\Http\Controllers\AktorController::class, 'index'])->name('aktor')->middleware('auth');
Route::post('/daftar', [AktorController::class, 'daftar'])->name('daftar')->middleware('auth');;
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/responden', [RespondenController::class, 'index'])->name('responden.index');
Route::get('/navigate', [AktorController::class, 'navigate'])->name('navigate');
Route::post('/logout', [HomeController::class, 'destroy'])->name('logout');


// Menampilkan halaman daftar alumni
Route::get('/alumni', [App\Http\Controllers\AlumniController::class, 'index'])->name('alumni')->middleware('auth');

// Menyimpan data alumni baru
Route::post('/alumni', [App\Http\Controllers\AlumniController::class, 'store'])->name('alumni.store')->middleware('auth');

// Menampilkan halaman edit alumni
//Route::get('/alumni/{id}/edit', [App\Http\Controllers\AlumniController::class, 'edit'])->name('alumni.edit')->middleware('auth');

// Mengupdate data alumni
//Route::put('/alumni/{id}', [App\Http\Controllers\AlumniController::class, 'update'])->name('alumni.update')->middleware('auth');

// Menghapus data alumni
//Route::delete('/alumni/{id}', [App\Http\Controllers\AlumniController::class, 'destroy'])->name('alumni.destroy')->middleware('auth');

Route::get('/export-kuis', [KuisController::class, 'export'])->name('export.kuis');

Route::get('/poll', [PollingController::class, 'showPollResults'])->name('polling')->middleware('auth');
