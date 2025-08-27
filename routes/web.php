

<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\Siswacontroller;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', function() {
    return view('welcome');
});

// Route Guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::put('/guru/{id}', [GuruController::class, 'update'])->name('guru.update');
Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');

// Route Siswa
Route::get('/siswas', [Siswacontroller::class, 'index'])->name('siswas.index');
Route::get('/siswas/create', [Siswacontroller::class, 'create'])->name('siswas.create');
Route::post('/siswas', [Siswacontroller::class, 'store'])->name('siswas.store');
Route::get('/siswas/{id}/edit', [Siswacontroller::class, 'edit'])->name('siswas.edit');
Route::put('/siswas/{id}', [Siswacontroller::class, 'update'])->name('siswas.update');
Route::delete('/siswas/{id}', [Siswacontroller::class, 'destroy'])->name('siswas.destroy');

