<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{BannerController, BannerMobileController, BungaController, PostController, NasabahController, PengaduanController, GaleriController, TabunganController, PembiayaanController, LaporanController, VisimisiController, MitraController, TentangkamiController, AwardController, DireksiController, StrukturController, AlamatController, BungapembiayaanController, IlustrasiController, NavbarController};


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
    // GET
    Route::get('banners', [BannerController::class, 'getAllBanners']);
    Route::get('mobile-banners', [BannerMobileController::class, 'getAllBannersMobile']);
    Route::get('ilustrasi', [IlustrasiController::class, 'getAllIlustrasis']);
    Route::get('bunga', [BungaController::class, 'getAllBungas']);
    Route::get('bunga-pembiayaan', [BungapembiayaanController::class, 'getAllBungaPembiayaans']);
    Route::get('posts', [PostController::class, 'getAllPosts']);
    Route::get('galeri', [GaleriController::class, 'getAllGaleris']);
    Route::get('laporan', [LaporanController::class, 'getAllLaporan']);
    Route::get('visimisi', [VisimisiController::class, 'getAllVisimisis']);
    Route::get('mitra', [MitraController::class, 'getAllMitras']);
    Route::get('tentangkami', [TentangkamiController::class, 'getAllTentangkamis']);
    Route::get('award', [AwardController::class, 'getAllAwards']);
    Route::get('direksi', [DireksiController::class, 'getAllDireksis']);
    Route::get('struktur', [StrukturController::class, 'getAllStrukturs']);
    Route::get('alamat', [AlamatController::class, 'getAllAlamats']);

    Route::get('navbar', [NavbarController::class, 'getJenisProdukNavbars']);
    Route::get('navbar-list', [NavbarController::class, 'getNavbarList']);
    Route::get('produklayanan-list', [NavbarController::class, 'getProdukLayananList']);

    // Used in production
    Route::get('tabungan-list', [NavbarController::class, 'getDropdownTabunganList']); // Get list tabungan produk for dropdown in tabungan form
    Route::get('pembiayaan-list', [NavbarController::class, 'getDropdownPembiayaanList']); // Get list pembiayaan produk for dropdown in pembiayaan form
    Route::get('navbar-all', [NavbarController::class, 'getNavbarListAll']);  // Get all the navbar section part in one api hit
    Route::get('produk-all', [NavbarController::class, 'getProdukListAll']);  // Get all the produk section part in one api hit

    // POST
    Route::post('nasabah', [NasabahController::class, 'createNasabah']);
    Route::post('tabungan', [TabunganController::class, 'createTabungan']);
    Route::post('pembiayaan', [PembiayaanController::class, 'createPembiayaan']);
    Route::post('pengaduan', [PengaduanController::class, 'createPengaduan']);
});