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
    return view('landing');
});

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('noAccess', function () {
    return view('noAccess');
});

Route::get('/petugas', function () {
    return view('petugas.index');
})->middleware('checkRole:petugas')->name('petugas.index');

Route::get('/pasien', function () {
    return view('pasien.index');
})->middleware('checkRole:pasien,petugas')->name('pasien.index');
