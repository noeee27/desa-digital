<?php

use Illuminate\Support\Facades\Route;


// =====================================================
// CONTROLLERS
// =====================================================

// ==========================
// USER / PUBLIC
// ==========================

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ProfilController;
use App\Http\Controllers\User\UmkmController as UserUmkmController;
use App\Http\Controllers\User\WisataController as UserWisataController;
use App\Http\Controllers\User\BeritaController as UserBeritaController;
use App\Http\Controllers\User\GaleriController as UserGaleriController;


// ==========================
// ADMIN
// ==========================

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UmkmController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController as AdminProfilController;


// =====================================================
// USER / PUBLIC
// =====================================================


// ==========================
// BERANDA
// ==========================

Route::get('/', [HomeController::class, 'index'])
    ->name('home');


// ==========================
// PROFIL DESA
// ==========================

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('user.profil');


// ==========================
// UMKM USER
// ==========================

// Daftar UMKM
Route::get('/umkm', [UserUmkmController::class, 'index'])
    ->name('user.umkm.index');

// Detail UMKM
Route::get('/umkm/{umkm}', [UserUmkmController::class, 'show'])
    ->name('user.umkm.show');


// ==========================
// WISATA & JASA USER
// ==========================

// Daftar Wisata & Jasa
Route::get('/wisata', [UserWisataController::class, 'index'])
    ->name('user.wisata.index');

// Detail Wisata & Jasa
Route::get('/wisata/{wisata}', [UserWisataController::class, 'show'])
    ->name('user.wisata.show');


// ==========================
// BERITA USER
// ==========================

// Daftar Berita
Route::get('/berita', [UserBeritaController::class, 'index'])
    ->name('user.berita.index');

// Detail Berita
Route::get('/berita/{berita}', [UserBeritaController::class, 'show'])
    ->name('user.berita.show');


// ==========================
// GALERI USER
// ==========================

// Daftar Galeri
Route::get('/galeri', [UserGaleriController::class, 'index'])
    ->name('user.galeri.index');

// Detail Galeri
Route::get('/galeri/{galeri}', [UserGaleriController::class, 'show'])
    ->name('user.galeri.show');


// =====================================================
// ADMIN AUTH
// =====================================================


// ==========================
// LOGIN ADMIN
// ==========================

// Halaman Login Admin
Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('admin.login');

// Proses Login Admin
Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.submit');

// Logout Admin
Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('admin.logout');


// =====================================================
// ADMIN AREA
// =====================================================

Route::middleware('auth')->prefix('admin')->group(function () {


    // ==========================
    // DASHBOARD
    // ==========================

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    // ==========================
    // PROFIL DESA
    // ==========================

    // Halaman kelola profil desa
    Route::get('/profil', [AdminProfilController::class, 'index'])
        ->name('admin.profil.index');

    // Proses update profil desa
    Route::put('/profil', [AdminProfilController::class, 'update'])
        ->name('admin.profil.update');


    // ==========================
    // UMKM
    // ==========================

    Route::resource('umkm', UmkmController::class);


    // ==========================
    // WISATA & JASA
    // ==========================

    Route::resource('wisata', WisataController::class);


    // ==========================
    // BERITA
    // ==========================

    Route::resource('berita', BeritaController::class);


    // ==========================
    // GALERI
    // ==========================

    Route::resource('galeri', GaleriController::class);

});