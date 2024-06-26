<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{NasabahController, PengaduanController, BlogController, SimulasiController, BannerController, BannerMobileController, BungaController, HomeController, GaleriController, VideoController, PembiayaanController, TabunganController, TriwulanController, GcgController, VisimisiController, MitraController, TentangkamiController, AwardController, DireksiController, StrukturController, AlamatController, BungapembiayaanController, IlustrasiController, NavbarController, JenisprodukController, ProduklayananController};

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

Route::prefix('visimisi')->middleware(['auth'])->group(function () {
    Route::get('/', [VisimisiController::class, 'index'])->name('visimisi.index');
    Route::get('/create', [VisimisiController::class, 'create'])->name('visimisi.create');
    Route::post('/store', [VisimisiController::class, 'store'])->name('visimisi.store');
    Route::get('/{visimisi}/edit', [VisimisiController::class, 'edit'])->name('visimisi.edit');
    Route::patch('/{visimisi}/update', [VisimisiController::class, 'update'])->name('visimisi.update');
});

Route::prefix('mitra')->middleware(['auth'])->group(function () {
    Route::get('/', [MitraController::class, 'index'])->name('mitra.index');
    Route::get('/create', [MitraController::class, 'create'])->name('mitra.create');
    Route::post('/store', [MitraController::class, 'store'])->name('mitra.store');
    Route::delete('/{mitra}/destroy', [MitraController::class, 'destroy'])->name('mitra.destroy');
});

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

Route::prefix('ilustrasi')->middleware(['auth'])->group(function () {
    Route::get('/', [IlustrasiController::class, 'index'])->name('ilustrasi.index');
    Route::get('/{ilustrasi}/edit', [IlustrasiController::class, 'edit'])->name('ilustrasi.edit');
    Route::patch('/{ilustrasi}/update', [IlustrasiController::class, 'update'])->name('ilustrasi.update');
});

Route::prefix('bunga')->middleware(['auth'])->group(function () {
    Route::get('/', [BungaController::class, 'index'])->name('bunga.index');
    Route::get('/create', [BungaController::class, 'create'])->name('bunga.create');
    Route::post('/store', [BungaController::class, 'store'])->name('bunga.store');
    Route::get('/{bunga}/edit', [BungaController::class, 'edit'])->name('bunga.edit');
    Route::patch('/{bunga}/update', [BungaController::class, 'update'])->name('bunga.update');
    Route::delete('/{bunga}/destroy', [BungaController::class, 'destroy'])->name('bunga.destroy');
});

Route::prefix('bunga-pembiayaan')->middleware(['auth'])->group(function () {
    Route::get('/', [BungapembiayaanController::class, 'index'])->name('bungapembiayaan.index');
    Route::get('/create', [BungapembiayaanController::class, 'create'])->name('bungapembiayaan.create');
    Route::post('/store', [BungapembiayaanController::class, 'store'])->name('bungapembiayaan.store');
    Route::get('/{bungapembiayaan}/edit', [BungapembiayaanController::class, 'edit'])->name('bungapembiayaan.edit');
    Route::patch('/{bungapembiayaan}/update', [BungapembiayaanController::class, 'update'])->name('bungapembiayaan.update');
    Route::delete('/{bungapembiayaan}/destroy', [BungapembiayaanController::class, 'destroy'])->name('bungapembiayaan.destroy');
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

Route::prefix('laporan')->middleware(['auth'])->group(function () {
    Route::get('/triwulan', [TriwulanController::class, 'index'])->name('triwulan.index');
    Route::get('/triwulan/create', [TriwulanController::class, 'create'])->name('triwulan.create');
    Route::post('/triwulan/store', [TriwulanController::class, 'store'])->name('triwulan.store');
    Route::get('/triwulan/{triwulan}/edit', [TriwulanController::class, 'edit'])->name('triwulan.edit');
    Route::patch('/triwulan/{triwulan}/update', [TriwulanController::class, 'update'])->name('triwulan.update');
    Route::delete('/triwulan/{triwulan}/destroy', [TriwulanController::class, 'destroy'])->name('triwulan.destroy');

    Route::get('/gcg', [GcgController::class, 'index'])->name('gcg.index');
    Route::get('/gcg/create', [GcgController::class, 'create'])->name('gcg.create');
    Route::post('/gcg/store', [GcgController::class, 'store'])->name('gcg.store');
    Route::get('/gcg/{gcg}/edit', [GcgController::class, 'edit'])->name('gcg.edit');
    Route::patch('/gcg/{gcg}/update', [GcgController::class, 'update'])->name('gcg.update');
    Route::delete('/gcg/{gcg}/destroy', [GcgController::class, 'destroy'])->name('gcg.destroy');
});

Route::prefix('setting-navbar')->middleware(['auth'])->group(function () {
    Route::prefix('jenisproduk')->middleware(['auth'])->group(function () {
        Route::get('/', [JenisprodukController::class, 'index'])->name('jenisproduk.index');
        Route::get('/create', [JenisprodukController::class, 'create'])->name('jenisproduk.create');
        Route::post('/store', [JenisprodukController::class, 'store'])->name('jenisproduk.store');
        Route::get('/{jenisproduk}/edit', [JenisprodukController::class, 'edit'])->name('jenisproduk.edit');
        Route::patch('/{jenisproduk}/update', [JenisprodukController::class, 'update'])->name('jenisproduk.update');
        Route::delete('/{jenisproduk}/destroy', [JenisprodukController::class, 'destroy'])->name('jenisproduk.destroy');
    });
    Route::prefix('navbar')->middleware(['auth'])->group(function () {
        Route::get('/', [NavbarController::class, 'index'])->name('navbar.index');
        Route::get('/create', [NavbarController::class, 'create'])->name('navbar.create');
        Route::post('/store', [NavbarController::class, 'store'])->name('navbar.store');
        Route::get('/{navbar}/edit', [NavbarController::class, 'edit'])->name('navbar.edit');
        Route::patch('/{navbar}/update', [NavbarController::class, 'update'])->name('navbar.update');
        Route::delete('/{navbar}/destroy', [NavbarController::class, 'destroy'])->name('navbar.destroy');
    });
    Route::prefix('produklayanan')->middleware(['auth'])->group(function () {
        Route::get('/', [ProduklayananController::class, 'index'])->name('produklayanan.index');
        Route::get('/create', [ProduklayananController::class, 'create'])->name('produklayanan.create');
        Route::post('/store', [ProduklayananController::class, 'store'])->name('produklayanan.store');
        Route::get('/{produklayanan}/edit', [ProduklayananController::class, 'edit'])->name('produklayanan.edit');
        Route::patch('/{produklayanan}/update', [ProduklayananController::class, 'update'])->name('produklayanan.update');
        Route::delete('/{produklayanan}/destroy', [ProduklayananController::class, 'destroy'])->name('produklayanan.destroy');
        Route::get('/{produklayanan}/show', [ProduklayananController::class, 'show'])->name('produklayanan.show');
    });
});

// ############
Route::prefix('tentang-kami')->middleware(['auth'])->group(function () {
    Route::prefix('tentangkami')->middleware(['auth'])->group(function () {
        Route::get('/', [TentangkamiController::class, 'index'])->name('tentangkami.index');
        Route::get('/create', [TentangkamiController::class, 'create'])->name('tentangkami.create');
        Route::post('/store', [TentangkamiController::class, 'store'])->name('tentangkami.store');
        Route::get('/{tentangkami}/edit', [TentangkamiController::class, 'edit'])->name('tentangkami.edit');
        Route::patch('/{tentangkami}/update', [TentangkamiController::class, 'update'])->name('tentangkami.update');
    });
    Route::prefix('award')->middleware(['auth'])->group(function () {
        Route::get('/', [AwardController::class, 'index'])->name('award.index');
        Route::get('/create', [AwardController::class, 'create'])->name('award.create');
        Route::post('/store', [AwardController::class, 'store'])->name('award.store');
        Route::delete('/{award}/destroy', [AwardController::class, 'destroy'])->name('award.destroy');
    });
    Route::prefix('direksi')->middleware(['auth'])->group(function () {
        Route::get('/', [DireksiController::class, 'index'])->name('direksi.index');
        Route::get('/create', [DireksiController::class, 'create'])->name('direksi.create');
        Route::post('/store', [DireksiController::class, 'store'])->name('direksi.store');
        Route::get('/{direksi}/edit', [DireksiController::class, 'edit'])->name('direksi.edit');
        Route::patch('/{direksi}/update', [DireksiController::class, 'update'])->name('direksi.update');
        Route::delete('/{direksi}/destroy', [DireksiController::class, 'destroy'])->name('direksi.destroy');
    });
    Route::prefix('struktur-organisasi')->middleware(['auth'])->group(function () {
        Route::get('/', [StrukturController::class, 'index'])->name('struktur.index');
        Route::get('/{struktur}/edit', [StrukturController::class, 'edit'])->name('struktur.edit');
        Route::patch('/{struktur}/update', [StrukturController::class, 'update'])->name('struktur.update');
    });
    Route::prefix('alamat-cabang')->middleware(['auth'])->group(function () {
        Route::get('/', [AlamatController::class, 'index'])->name('alamat.index');
        Route::get('/create', [AlamatController::class, 'create'])->name('alamat.create');
        Route::post('/store', [AlamatController::class, 'store'])->name('alamat.store');
        Route::get('/{alamat}/edit', [AlamatController::class, 'edit'])->name('alamat.edit');
        Route::patch('/{alamat}/update', [AlamatController::class, 'update'])->name('alamat.update');
        Route::delete('/{alamat}/destroy', [AlamatController::class, 'destroy'])->name('alamat.destroy');
    });
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
