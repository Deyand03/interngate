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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:mitra'])->group(function(){
    Route::resource('mitra', MitraController::class);
});
Route::middleware(['auth', 'role:mahasiswa'])->group(function(){
    Route::resource('mahasiswa', MahasiswaController::class);
});


require __DIR__.'/auth.php';
