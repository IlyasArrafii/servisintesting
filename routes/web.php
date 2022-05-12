<?php

use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataPemesananController;
use App\Http\Controllers\Admin\KonsumenController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\PemesananController;
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
Route::get('/pemesanan/{slug}', [PagesController::class, 'pemesanan']);
Route::post('/pemesanan/tambah', [PemesananController::class, 'store']);
Route::get('/detail-pemesanan/{id}', [PagesController::class, 'detailpemesanan']);
Route::get('/syarat-pemesanan/{id}', [PagesController::class, 'syaratpemesanan']);
Route::get('/batal-pemesanan/{id}', [PagesController::class, 'batalpemesanan']);
Route::post('/checkout', [PagesController::class, 'checkout']);
Route::get('/kebijakan-privasi', [PagesController::class, 'kebijakan']);
Route::get('/cara-pemesanan', [PagesController::class, 'caramemesan']);
Route::get('/komplain/{id}', [PagesController::class, 'komplain']);
Route::post('/kirim-komplain', [PagesController::class, 'kirimkomplain']);
Route::get('/keunggulan', [PagesController::class, 'keunggulan']);









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
Route::get('/admin-pemesanan', [DataPemesananController::class, 'index']);
Route::get('/detail-pesanan/{id}', [DataPemesananController::class, 'create']);
Route::get('/konfirmasi-pesanan/{id}', [DataPemesananController::class, 'konfirmasi']);
Route::get('/mencari-teknisi/{id}', [DataPemesananController::class, 'mencariteknisi']);
Route::get('/teknisi-datang/{id}', [DataPemesananController::class, 'teknisidatang']);
Route::get('/batal-pesanan/{id}', [DataPemesananController::class, 'batalpesanan']);
Route::get('/pesanan-selesai/{id}', [DataPemesananController::class, 'selesai']);
Route::get('/komplain-selesai/{id}', [DataPemesananController::class, 'komplainselesai']);
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
