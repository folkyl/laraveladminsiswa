<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\CekAdmin;
use App\Http\Controllers\ArtikelController;



// Route umum
Route::get('/', [ArtikelController::class, 'landing'])->name('landing');
Route::get('/login', [AdminController::class, 'formLogin'])->name('login');
Route::post('/login', [AdminController::class, 'prosesLogin'])->name('login.post');
Route::get('/home', [SiswaController::class, 'home'])->name('home');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/register', [AdminController::class, 'formregister'])->name('register');
Route::post('/register', [AdminController::class, 'prosesRegister'])->name('register.post');
Route::get('/detil/{id}', [ArtikelController::class, 'detil'])->name('artikel.detil');


Route::middleware(CekAdmin::class)->group(function () {
    Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::post('/siswa/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');
    Route::get('/siswa/{id}/delete', [SiswaController::class, 'destroy'])->name('siswa.delete');



});

