<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Petugas\UserController;
use App\Http\Controllers\Petugas\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\Petugas\HomeAdminController;

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

Route::get('/beranda', [HomeController::class, 'index'])->name('home');

Route::group(
    [
        'prefix' => '/'
    ],
    function () {
        Route::get('/', function () {
            return view('landing');
        })->name('landing');
        Route::get('/poli/search', [HomeController::class, 'caripoli'])->name('home.poli.search');
    }
);
Route::group(
    [
        'prefix' => 'poli'
    ],
    function () {
        Route::get('/', function () {
            return view('poli');
        })->name('poli');
        Route::get('/dokter', function () {
            return view('dokter');
        })->name('dokter');
    }
);

Route::group(
    [
        'prefix' => '/antrian',
        'middleware' => 'verified'
    ],
    function () {
        Route::get('/', [AntrianController::class, 'index'])->name('ambilantrian');
        Route::POST('/ambilnomor', [AntrianController::class, 'create'])->name('antrian.create');

        Route::get('/list', [AntrianController::class, 'listantrian'])->name('listantrian');
        Route::get('/cek-nomor-antrian', function () {
            return view('cekantrian');
        })->name('cekantrian');
    }
);

Route::group([
    'prefix' => 'admin',
    'middleware' => 'checkRole:admin'
], function () {
    Route::resource('users', UserController::class);
    Route::resource('dokter', DokterController::class);
    Route::get('/', [HomeAdminController::class, 'index'])->name('admin.index');
    Route::get('/antrian', [AntrianController::class, 'indexantrian'])->name('antrian.index');
    Route::get('/antrian/ambil/{id}', [AntrianController::class, 'ambilantrian'])->name('antrian.ambil');
});

Route::group(
    [
        'prefix' => 'pasien',
        'middleware' => 'verified'
    ],
    function () {
        Route::get('/profil/view', [PasienController::class, 'view'])->name('pasien.viewprofil');
        Route::get('/profil/edit', [PasienController::class, 'editprofil'])->name('pasien.editprofil');
        Route::post('/profil/update', [PasienController::class, 'updateprofil'])->name('pasien.updateprofil');
        Route::get('/data/edit', [PasienController::class, 'edit'])->name('pasien.editdata');
        Route::post('/data/update', [PasienController::class, 'update'])->name('pasien.updatedata');
        Route::post('/data/bpjs', [PasienController::class, 'addbpjs'])->name('pasien.addbpjs');
    }
);
