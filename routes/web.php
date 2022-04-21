<?php

use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KonsumenController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\PemesananController;
use App\Http\Controllers\PagesController;
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

// Route::get('/', [PagesController::class, 'index']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);
Route::get('/pesanan', [PagesController::class, 'pesanan']);
Route::get('/profil', [PagesController::class, 'profil']);
Route::get('/transaksi', [PagesController::class, 'transaksi']);
Route::get('/detail-pemesanan', [PagesController::class, 'pemesanan']);









//====================================================================
// Admin

// Route Back End
Route::get('/dashboard-admin', [DashboardController::class, 'index']);

// Layanan
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/layanan/tambah', [LayananController::class, 'create']);
Route::post('/layanan/tambah', [LayananController::class, 'store']);
Route::get('/layanan/{id}', [LayananController::class, 'edit']);
Route::post('/layanan/update', [LayananController::class, 'update']);
Route::delete('/layanan/{id}', [LayananController::class, 'destroy']);

// Anggota
// Route::get('/anggota/tambah', [AnggotaController::class, 'create']);
// Route::post('/anggota/tambah', [AnggotaController::class, 'store']);
// Route::get('/adelete/{id}', [AnggotaController::class, 'destroy']);
// Route::get('/anggota/{id}', [AnggotaController::class, 'edit']);
// Route::post('/anggota/edit', [AnggotaController::class, 'update']);

// Konsumen
Route::get('/konsumen', [KonsumenController::class, 'index']);
// Route::get('/konsumen', [KonsumenController::class, 'index']);
// Route::get('/kdelete/{id}', [KonsumenController::class, 'destroy']);

// Pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/detail-pesanan/{id}', [PemesananController::class, 'create']);
// Route::get('/bukti/{id}', [PemesananController::class, 'bukti']);
// Route::get('/confirm/{id}', [PemesananController::class, 'confirm']);
// Route::get('/tolak/{id}', [PemesananController::class, 'tolak']);
// >>>>>>> 73d132179453262b0042b91f94535f508129bd11

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
