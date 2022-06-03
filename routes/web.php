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

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('landing');
})->name('home');
Route::get('/poli', function () {
    return view('poli');
})->name('poli');
Route::get('/dokter', function () {
    return view('dokter');
})->name('dokter');
Route::get('/ambil-nomor', function () {
    return view('ambilantrian');
})->name('ambilantrian');
Route::get('/lihat-antrian', function () {
    return view('lihatantrian');
})->name('lihatantrian');
Route::get('/cek-nomor-antrian', function () {
    return view('cekantrian');
})->name('cekantrian');

// Route::get('/reset', function () {
//     return view('auth.password.reset');
// })->name('resetpass');

// Route::get('/admin-home', function () {
//     return view('admin.index');
// })->name('admin.index');
// Route::get('/user-index', function () {
//     return view('admin.users.index');
// })->name('users.index');
// Route::get('/dokter-index', function () {
//     return view('admin.dokter.index');
// })->name('dokter.index');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('checkRole:admin')->name('admin.index');

Route::get('/admin-home', function () {
    return view('admin.index');
})->middleware('checkRole:admin')->name('admin');

Route::group([
    'prefix' => 'admin',
    'middleware' => 'checkRole:admin'
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

// Route::get('/pasien', function () {
//     return view('pasien.index');
// })->middleware('checkRole:pasien,petugas')->name('pasien.index');
