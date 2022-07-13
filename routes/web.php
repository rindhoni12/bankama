<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;

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

Route::get('/admin/dashboard', [NasabahController::class, 'dashboard'])->name('index');

Route::get('/admin/nasabah', [NasabahController::class, 'index'])->name('nasabah.index');
Route::get('/admin/nasabah/create', [NasabahController::class, 'create'])->name('nasabah.create');
Route::post('/admin/nasabah', [NasabahController::class, 'store'])->name('nasabah.store');
Route::get('/admin/nasabah/{nasabah}/edit', [NasabahController::class, 'edit'])->name('nasabah.edit');
Route::patch('/admin/nasabah/{nasabah}/update', [NasabahController::class, 'update'])->name('nasabah.update');
Route::delete('/admin/nasabah/{nasabah}/delete', [NasabahController::class, 'destroy'])->name('nasabah.destroy');
Route::get('/admin/nasabah/{nasabah}/show', [NasabahController::class, 'show'])->name('nasabah.show');



