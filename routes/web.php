<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{NasabahController, BlogController};

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

Route::get('/admin/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/admin/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/admin/blog/{blog:slug}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::patch('/admin/blog/{blog:slug}/update', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/admin/blog/{blog:slug}/delete', [BlogController::class, 'destroy'])->name('blog.destroy');
Route::get('/admin/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');



