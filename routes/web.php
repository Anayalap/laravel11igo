<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('gallery', GalleryController::class);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
Route::post('/siswa/tambah', [SiswaController::class, 'tambah_proses'])->name('siswa.tambah_proses');
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/edit/{id}', [SiswaController::class, 'edit_proses'])->name('siswa.edit_proses');
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'hapus'])->name('siswa.hapus');
Route::delete('/siswa/hapus/{id}', [SiswaController::class, 'hapus_proses'])->name('siswa.hapus_proses');
Route::get('cetak_siswa', [SiswaController::class, 'cetak_siswa'])->name('cetak_siswa');

Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');


// Route::resource('guru', GuruController::class);
Route::get('guru', [GuruController::class, 'index']);
Route::post('guru', [GuruController::class, 'store']);
Route::get('guru/{id}', [GuruController::class, 'show']);
Route::put('guru/{id}', [GuruController::class, 'update']);
Route::delete('guru/{id}', [GuruController::class, 'destroy']);

//other way route
Route::resource('pelajaran', PelajaranController::class);

Route::resource('kurikulum', KurikulumController::class);

Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal.index');