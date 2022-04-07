<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Petugas\UserController;
use App\Http\Controllers\Petugas\DokterController;

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
})->name('landing');

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/petugas', function () {
    return view('petugas.index');
})->middleware('checkRole:petugas')->name('petugas.index');

Route::group([
    'prefix' => 'petugas',
    'middleware' => 'checkRole:petugas'
], function () {
    Route::resource('users', UserController::class);
    Route::resource('dokter', DokterController::class);
});

// Route::get('/petugas/user', function () {
//     return view('petugas.users.index');
// })->middleware('checkRole:petugas')->name('user.index');

// Route::get('/petugas/user/create', function () {
//     return view('petugas.users.create');
// })->middleware('checkRole:petugas')->name('user.create');
// Route::get('/petugas/user/edit', function () {
//     return view('petugas.users.edit');
// })->middleware('checkRole:petugas')->name('user.edit');

Route::get('/pasien', function () {
    return view('pasien.index');
})->middleware('checkRole:pasien,petugas')->name('pasien.index');
