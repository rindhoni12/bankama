<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{BannerController, BungaController, PostController, NasabahController, PengaduanController, GaleriController, TabunganController, PembiayaanController};


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
    Route::get('banners', [BannerController::class, 'getAllBanners']);
    Route::get('bunga', [BungaController::class, 'getAllBungas']);
    Route::get('posts', [PostController::class, 'getAllPosts']);
    Route::get('galeri', [GaleriController::class, 'getAllGaleris']);
    
    Route::post('nasabah', [NasabahController::class, 'createNasabah']);
    Route::post('tabungan', [TabunganController::class, 'createTabungan']);
    Route::post('pembiayaan', [PembiayaanController::class, 'createPembiayaan']);
    Route::post('pengaduan', [PengaduanController::class, 'createPengaduan']);
});