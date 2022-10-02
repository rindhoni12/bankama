<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{NasabahController, PengaduanController, BlogController, SimulasiController, BannerController, BannerMobileController, BungaController, HomeController, GaleriController, VideoController, PembiayaanController, TabunganController};

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
Route::get('/dashboard2', [NasabahController::class, 'dashboard'])->name('index');

Route::prefix('nasabah')->middleware(['auth'])->group(function () {
    Route::get('/', [NasabahController::class, 'index'])->name('nasabah.index');
    Route::get('/create', [NasabahController::class, 'create'])->name('nasabah.create');
    Route::post('/store', [NasabahController::class, 'store'])->name('nasabah.store');
    Route::get('/{nasabah}/edit', [NasabahController::class, 'edit'])->name('nasabah.edit');
    Route::patch('/{nasabah}/update', [NasabahController::class, 'update'])->name('nasabah.update');
    Route::delete('/{nasabah}/destroy', [NasabahController::class, 'destroy'])->name('nasabah.destroy');
    Route::get('/{nasabah}/show', [NasabahController::class, 'show'])->name('nasabah.show');
});

Route::prefix('pembiayaan')->middleware(['auth'])->group(function () {
    Route::get('/ibmurabahah', [PembiayaanController::class, 'ibmurabahah'])->name('pembiayaan.ibmurabahah');
    Route::get('/ibmusyarakah', [PembiayaanController::class, 'ibmusyarakah'])->name('pembiayaan.ibmusyarakah');
    Route::get('/ibmultijasa', [PembiayaanController::class, 'ibmultijasa'])->name('pembiayaan.ibmultijasa');
    Route::get('/ibgadaiemas', [PembiayaanController::class, 'ibgadaiemas'])->name('pembiayaan.ibgadaiemas');
    Route::get('/{pembiayaan}/show', [PembiayaanController::class, 'show'])->name('pembiayaan.show');
});

Route::prefix('tabungan')->middleware(['auth'])->group(function () {
    Route::get('/ibwadiah', [TabunganController::class, 'ibwadiah'])->name('tabungan.ibwadiah');
    Route::get('/ibhaji', [TabunganController::class, 'ibhaji'])->name('tabungan.ibhaji');
    Route::get('/ibpendidikan', [TabunganController::class, 'ibpendidikan'])->name('tabungan.ibpendidikan');
    Route::get('/ibqurban', [TabunganController::class, 'ibqurban'])->name('tabungan.ibqurban');
    Route::get('/ibsimuda', [TabunganController::class, 'ibsimuda'])->name('tabungan.ibsimuda');
    Route::get('/{tabungan}/show', [TabunganController::class, 'show'])->name('tabungan.show');
});

Route::prefix('pengaduan')->middleware(['auth'])->group(function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('pengaduan.index');
    // Route::get('/create', [PengaduanController::class, 'create'])->name('nasabah.create');
    // Route::post('/store', [PengaduanController::class, 'store'])->name('nasabah.store');
    // Route::get('/{nasabah}/edit', [PengaduanController::class, 'edit'])->name('nasabah.edit');
    // Route::patch('/{nasabah}/update', [PengaduanController::class, 'update'])->name('nasabah.update');
    // Route::delete('/{nasabah}/destroy', [PengaduanController::class, 'destroy'])->name('nasabah.destroy');
    Route::get('/{pengaduan}/show', [PengaduanController::class, 'show'])->name('pengaduan.show');
    Route::get('/{pengaduan}/status', [PengaduanController::class, 'status'])->name('pengaduan.status');
});

Route::prefix('blog')->middleware(['auth'])->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/{blog:slug}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::patch('/{blog:slug}/update', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/{blog:slug}/destroy', [BlogController::class, 'destroy'])->name('blog.destroy');
});
Route::get('blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::prefix('banner')->middleware(['auth'])->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/{banner}/edit', [BannerController::class, 'edit'])->name('banner.edit');
    Route::patch('/{banner}/update', [BannerController::class, 'update'])->name('banner.update');
});

Route::prefix('banner-mobile')->middleware(['auth'])->group(function () {
    Route::get('/', [BannerMobileController::class, 'index'])->name('banner-mobile.index');
    Route::get('/{banner}/edit', [BannerMobileController::class, 'edit'])->name('banner-mobile.edit');
    Route::patch('/{banner}/update', [BannerMobileController::class, 'update'])->name('banner-mobile.update');
});

Route::prefix('bunga')->middleware(['auth'])->group(function () {
    Route::get('/', [BungaController::class, 'index'])->name('bunga.index');
    Route::get('/{bunga}/edit', [BungaController::class, 'edit'])->name('bunga.edit');
    Route::patch('/{bunga}/update', [BungaController::class, 'update'])->name('bunga.update');
});

Route::prefix('galeri')->middleware(['auth'])->group(function () {
    Route::get('/', [GaleriController::class, 'index'])->name('galeri.index');
    Route::get('/create', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('/store', [GaleriController::class, 'store'])->name('galeri.store');
    Route::delete('/{galeri}/destroy', [GaleriController::class, 'destroy'])->name('galeri.destroy');
});

Route::prefix('video')->middleware(['auth'])->group(function () {
    // Route::get('/', [GaleriController::class, 'index'])->name('galeri.index');
    Route::get('/{video}/edit', [VideoController::class, 'edit'])->name('video.edit');
    Route::patch('/{video}/update', [VideoController::class, 'update'])->name('video.update');
});

// Landing Pages Routes
Route::prefix('simulasi')->group(function () {
    Route::get('/simulasi-kredit', [SimulasiController::class, 'simulasiKredit'])->name('simulasi.kredit');
    Route::post('/hitung-kredit', [SimulasiController::class, 'hitungKredit'])->name('hitung.kredit');
    Route::get('/simulasi-deposito', [SimulasiController::class, 'simulasiDeposito'])->name('simulasi.deposito');
    Route::post('/hitung-deposito', [SimulasiController::class, 'hitungDeposito'])->name('hitung.deposito');
});

Auth::routes([
    // 'register' => false, // Disable Register Routes
    'reset' => false, // Disable Reset Password Routes
    'verify' => false, // Disable Email Verification Routes
]);

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
