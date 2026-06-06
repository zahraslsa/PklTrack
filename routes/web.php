<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\TempatPklController;
use App\Http\Controllers\PenempatanController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\LaporanController;

use App\Http\Controllers\SiswaDashboardController;
use App\Http\Controllers\SiswaMonitoringController;
use App\Http\Controllers\SiswaLaporanController;
use App\Http\Controllers\SiswaNilaiController;

use App\Http\Controllers\GuruDashboardController;
use App\Http\Controllers\GuruNilaiController;
use App\Http\Controllers\GuruSiswaController;
use App\Http\Controllers\GuruMonitoringController;
use App\Http\Controllers\GuruLaporanController;

/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing');
});

/*
|--------------------------------------------------------------------------
| SISWA
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:siswa'])->group(function () {

    Route::get('/siswa/dashboard', [SiswaDashboardController::class, 'index']);

    Route::get('/siswa/monitoring', [SiswaMonitoringController::class, 'index']);
    Route::get('/siswa/monitoring/create', [SiswaMonitoringController::class, 'create']);
    Route::post('/siswa/monitoring', [SiswaMonitoringController::class, 'store']);

    Route::get('/siswa/laporan', [SiswaLaporanController::class, 'index']);
    Route::get('/siswa/laporan/create', [SiswaLaporanController::class, 'create']);
    Route::post('/siswa/laporan', [SiswaLaporanController::class, 'store']);

    Route::get('/siswa/nilai', [SiswaNilaiController::class, 'index'])
        ->name('siswa.nilai');
});

/*
|--------------------------------------------------------------------------
| GURU
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:guru'])->group(function () {

    Route::get('/guru/dashboard', [GuruDashboardController::class, 'index']);

    Route::get('/guru/nilai', [GuruNilaiController::class, 'index']);
    Route::get('/guru/nilai/{id}/create', [GuruNilaiController::class, 'create']);
    Route::post('/guru/nilai', [GuruNilaiController::class, 'store']);

    Route::get('/guru/siswa', [GuruSiswaController::class, 'index']);

    Route::get(
        '/guru/monitoring',
        [GuruMonitoringController::class, 'index']
    );

    Route::get(
        '/guru/laporan',
        [GuruLaporanController::class, 'index']
    );

    Route::post(
        '/guru/laporan/{id}/approve',
        [GuruLaporanController::class, 'approve']
    );

    Route::post(
        '/guru/laporan/{id}/reject',
        [GuruLaporanController::class, 'reject']
    );
});

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

    Route::resource('siswa', SiswaController::class)->except(['show']);
    Route::resource('guru', GuruController::class);
    Route::resource('tempat-pkl', TempatPklController::class);
    Route::resource('penempatan', PenempatanController::class);
    Route::resource('monitoring', MonitoringController::class);
    Route::resource('nilai', NilaiController::class);

    /*
    |--------------------------------------------------------------------------
    | LAPORAN PKL
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/laporan', [LaporanController::class, 'index']);
    Route::delete('/admin/laporan/{id}', [LaporanController::class, 'destroy']);

    Route::post('/admin/laporan/{id}/approve', [LaporanController::class, 'approve']);
    Route::post('/admin/laporan/{id}/reject', [LaporanController::class, 'reject']);
});

require __DIR__.'/auth.php';