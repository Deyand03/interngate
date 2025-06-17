<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigationController::class, 'beranda'])->name('beranda');
Route::get('/perusahaan', [NavigationController::class, 'perusahaan'])->name('perusahaan');
Route::get('/lowongan', [NavigationController::class, 'lowongan'])->name('lowongan');
Route::get('lowongan/{program:slug}', [PostController::class, 'show'])->name('lowongan.show');
Route::post('lowongan/{program:slug}/apply', [PostController::class, 'storeMahasiswa'])->name('lowongan.store');
Route::get('/faq', [NavigationController::class, 'faq'])->name('faq');

Route::get('/logout', function(){
    return view('beranda.index');
})->middleware('auth');

//

Route::middleware(['auth', 'role:mitra'])->group(function () {
    Route::get('mitra', [MitraController::class, 'index'])->name('mitra.index');
    Route::patch('mitra/status/{id}', [MitraController::class, 'toggleStatusMhs'])->name('mitra.index.togglemhs');
    Route::get('mitra/kelola', [PostController::class, 'index'])->name('mitra.kelola');
    Route::post('mitra/kelola/store', [PostController::class, 'storeMitra'])->name('mitra.program.store');
    Route::get('mitra/kelola/status', [PostController::class, 'toggleStatus'])->name('mitra.status');
    Route::delete('mitra/hapus/{id}', [PostController::class, 'destroy'])->name('mitra.program.destroy');
    Route::patch('/mitra/update/{id}', [PostController::class, 'update'])->name('mitra.program.update');
    Route::get('mitra/edit/{id}', [PostController::class, 'edit'])->name('mitra.program.edit');
    Route::get('mitra/profile', [MitraController::class, 'profile'])->name('mitra.profile');
    Route::patch('/mitra/{id}', [MitraController::class, 'update'])->name('mitra.update');
    Route::patch('/mitra/profil/update-foto/{id}', [MitraController::class, 'updateMedia'])->name('mitra.foto.update');
});
Route::middleware(['auth', 'role:mahasiswa'])->group(function(){
    Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::patch('/mahasiswa/profil/update-foto', [MahasiswaController::class, 'updateFoto'])->name('mahasiswa.foto.update');
    Route::patch('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
});


require __DIR__ . '/auth.php';
