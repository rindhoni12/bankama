<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{NasabahController, BlogController, SimulasiController, BannerController, HomeController};

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

Route::get('/', function () {
    return view('welcome');
});

// Admin Pages Routes
Route::get('/admin/dashboard2', [NasabahController::class, 'dashboard'])->name('index');

Route::prefix('admin/nasabah')->middleware(['auth'])->group(function () {
    Route::get('/', [NasabahController::class, 'index'])->name('nasabah.index');
    Route::get('/create', [NasabahController::class, 'create'])->name('nasabah.create');
    Route::post('/store', [NasabahController::class, 'store'])->name('nasabah.store');
    Route::get('/{nasabah}/edit', [NasabahController::class, 'edit'])->name('nasabah.edit');
    Route::patch('/{nasabah}/update', [NasabahController::class, 'update'])->name('nasabah.update');
    Route::delete('/{nasabah}/destroy', [NasabahController::class, 'destroy'])->name('nasabah.destroy');
    Route::get('/{nasabah}/show', [NasabahController::class, 'show'])->name('nasabah.show');
});

Route::prefix('admin/blog')->middleware(['auth'])->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/{blog:slug}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::patch('/{blog:slug}/update', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/{blog:slug}/destroy', [BlogController::class, 'destroy'])->name('blog.destroy');
});
Route::get('blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::prefix('admin/banner')->middleware(['auth'])->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/{banner}/edit', [BannerController::class, 'edit'])->name('banner.edit');
    Route::patch('/{banner}/update', [BannerController::class, 'update'])->name('banner.update');
});

// Landing Pages Routes
Route::prefix('simulasi')->group(function () {
    Route::get('/simulasi-kredit', [SimulasiController::class, 'simulasiKredit'])->name('simulasi.kredit');
    Route::post('/hitung-kredit', [SimulasiController::class, 'hitungKredit'])->name('hitung.kredit');
    Route::get('/simulasi-deposito', [SimulasiController::class, 'simulasiDeposito'])->name('simulasi.deposito');
    Route::post('/hitung-deposito', [SimulasiController::class, 'hitungDeposito'])->name('hitung.deposito');
});

// Route::prefix('admin')->group(function () {});

Auth::routes([
    // 'register' => false, // Disable Register Routes
    'reset' => false, // Disable Reset Password Routes
    'verify' => false, // Disable Email Verification Routes
]);

Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('home');
