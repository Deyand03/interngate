<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProfileController;
use App\Models\Mitra;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigationController::class, 'beranda'])->name('beranda');
Route::get('/lowongan', [NavigationController::class, 'lowongan'])->name('lowongan');
Route::get('/perusahaan', [NavigationController::class, 'perusahaan'])->name('perusahaan');
Route::get('/faq', [NavigationController::class, 'faq'])->name('faq');

Route::get('/detail', function(){
    return view('lowongan.detail');
});
// Route::get('/profil/biodata', [ProfileController::class, 'show'])->name('profil.biodata.show');

Route::get('biodata/mahasiswa', function () {
    return view('biodata_mhs');
});

Route::get('/dashboard-mitra', function () {
    return view('dashboard_mitra.index');
});
Route::get('/dashboard-mitra/profile', function () {
    return view('dashboard_mitra.profile');
});
Route::get('/dashboard-mitra/tambah-program', function () {
    return view('dashboard_mitra.tambah_program');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:mitra'])->group(function () {
    Route::resource('mitra', MitraController::class);
});
Route::middleware(['auth', 'role:mahasiswa'])->group(function(){
    Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
});


require __DIR__ . '/auth.php';
