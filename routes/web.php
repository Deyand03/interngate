<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Mitra;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigationController::class, 'beranda'])->name('beranda');
Route::get('/lowongan', [NavigationController::class, 'lowongan'])->name('lowongan');
Route::get('/perusahaan', [NavigationController::class, 'perusahaan'])->name('perusahaan');
Route::get('lowongan/{program:slug}', [PostController::class, 'show'])->name('lowongan.show');
Route::get('/faq', [NavigationController::class, 'faq'])->name('faq');

Route::get('/test-view', function(){
    return view('welcome');
});

Route::prefix('dashboard-mitra')->group(function () {
    Route::get('/', function () {
        return view('dashboard_mitra.index');
    });
    Route::get('/profile', function () {
        return view('dashboard_mitra.profile');
    });
    Route::get('/tambah-program', function () {
        return view('dashboard_mitra.tambah_program');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth', 'role:mitra'])->group(function () {
    Route::get('mitra', [MitraController::class, 'index'])->name('mitra.index');
    Route::get('mitra/kelola', [MitraController::class, 'create'])->name('mitra.kelola');
});
Route::middleware(['auth', 'role:mahasiswa'])->group(function(){
    Route::resource('mahasiswa', MahasiswaController::class);
});


require __DIR__ . '/auth.php';
