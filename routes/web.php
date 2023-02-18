<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::post('/sum-result', [HomeController::class, 'sumResult'])->name('sumResult');
Route::get('/result', [HomeController::class, 'result'])->name('result');
Route::get('/home-artikel', [HomeController::class, 'artikel'])->name('artikel');
Route::get('/artikel-cari', [HomeController::class, 'cariArtikel'])->name('artikel.cari');
Route::get('/artikel-detail/{id}', [HomeController::class, 'detailArtikel'])->name('artikel.detail');
Route::get('/home-video', [HomeController::class, 'video'])->name('video');
Route::get('/video-cari', [HomeController::class, 'carivideo'])->name('video.cari');
Route::get('/video-detail/{id}', [HomeController::class, 'detailvideo'])->name('video.detail');
Route::get('/profile-edit', [HomeController::class, 'profile'])->name('profile');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::resource('/artikel', ArtikelController::class);
    Route::resource('/video', VideoController::class);
    Route::resource('/soal', SoalController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
