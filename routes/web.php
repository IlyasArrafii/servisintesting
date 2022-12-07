<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\AssignPermissionController;
use App\Http\Controllers\Admin\AssignRolesController;
use App\Http\Controllers\Admin\CarouselPromoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataPemesananController;
use App\Http\Controllers\Admin\KonsumenController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PagesController;
use App\Http\Middleware\AlreadyLoginAdmin;
use App\Models\Artikel;
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

Route::get('/', [PagesController::class, 'index'])->name('home.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/login', [PagesController::class, 'login'])->name('home.login');
    Route::get('/register', [PagesController::class, 'register'])->name('home.registeracc');
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
});
require __DIR__ . '/auth.php';

// Handle Detail Artikel
Route::get('/artikel/{slug}', [PagesController::class, 'detailArtikel'])->name('home.detailartikel');

// Handle All Artikel
Route::get('/artikel/selengkapnya', [PagesController::class, 'selengkapnyaArtikel'])->name('home.artikelSelengkapnya');
Route::get('/test', [PagesController::class, 'test']);





//====================================================================
// Admin

// Login
Route::get('/admin', [LoginController::class, 'index']);
Route::post('/admin/login', [LoginController::class, 'PostAdminLogin'])->name('admin.login.post');

// Route Back End
Route::middleware(['auth:admin'])->name('admin.')->prefix('/admin/')->group(function () {
    //Dashboard
    Route::resource('dashboard', DashboardController::class);

    // Logout
    Route::get('logout', [LoginController::class, 'LogoutAdmin'])->name('logout');

    // Route Layanan
    Route::get('layanan', [LayananController::class, 'index']);
    Route::get('layanan/tambah', [LayananController::class, 'create']);
    Route::post('layanan/tambah', [LayananController::class, 'store']);
    Route::get('layanan/{id}', [LayananController::class, 'edit']);
    Route::post('layanan/update', [LayananController::class, 'update']);
    Route::delete('layanan/{id}', [LayananController::class, 'destroy']);

    // Admin
    Route::get('data-admin', [AdminController::class, 'index']);
    Route::get('profile/{id}', [AdminController::class, 'profile']);
    Route::post('/profile', [AdminController::class, 'changeprofile']);
    Route::post('/change-password', [AdminController::class, 'changepass']);
    Route::get('add-admin/tambah', [AdminController::class, 'create']);
    Route::post('add-admin/tambah', [AdminController::class, 'store']);
    Route::post('data-admin/update', [AdminController::class, 'update']);
    Route::get('data-admin/{id}', [AdminController::class, 'edit']);
    // Route::get('/adelete/{id}', [AnggotaController::class, 'destroy']);
    // Route::get('/anggota/{id}', [AnggotaController::class, 'edit']);
    // Route::post('/anggota/edit', [AnggotaController::class, 'update']);

    // Settings Profile
    Route::get('settings', [AdminController::class, 'settings'])->name('settings');
    Route::get('settings/password', [AdminController::class, 'settingspassword'])->name('settings.password');
    Route::patch('settings/password', [AdminController::class, 'changepass'])->name('settings.changepass');
    Route::get('settings/profile/{id}', [AdminController::class, 'settingsprofile'])->name('settings.profile');
    Route::put('settings/profile', [AdminController::class, 'changeprofile'])->name('settings.changeprofile');

    // Roles Admin
    Route::get('roles', [RolesController::class, 'index'])->name('roles.index');
    Route::get('roles/tambah', [RolesController::class, 'create'])->name('roles.create');
    Route::post('roles/tambah', [RolesController::class, 'store'])->name('roles.store');
    Route::get('roles/{role}/edit', [RolesController::class, 'edit'])->name('roles.edit');
    Route::put('roles/{role}/edit', [RolesController::class, 'update']);
    Route::delete('roles/{role}/delete', [RolesController::class, 'destroy'])->name('roles.delete');

    // Give Roles to Admin

    Route::get('give-roles', [AssignRolesController::class, 'giveroles'])->name('roles.assign.create');
    Route::post('give-roles', [AssignRolesController::class, 'assignroles']);
    Route::get('/{admin}/edit', [AssignRolesController::class, 'synceditroles'])->name('roles.assign.edit');
    Route::put('/{admin}/edit', [AssignRolesController::class, 'syncupdateroles']);

    // Permissions Admin
    Route::get('permissions', [PermissionsController::class, 'index'])->name('permission.index');
    Route::get('permissions/tambah', [PermissionsController::class, 'create'])->name('permission.create');
    Route::post('permissions/tambah', [PermissionsController::class, 'store'])->name('permission.store');
    Route::get('permissions/{permission}/edit', [PermissionsController::class, 'edit'])->name('permission.edit');
    Route::put('permissions/{permission}/edit', [PermissionsController::class, 'update']);
    Route::delete('permissions/{permission}/delete', [PermissionsController::class, 'destroy'])->name('permission.delete');

    // Give Permission
    Route::get('give-permission', [AssignPermissionController::class, 'givepermission'])->name('permission.assign.create');
    Route::post('give-permission/tambah', [AssignPermissionController::class, 'assignpermission']);
    Route::get('give-permission/{role}/edit', [AssignPermissionController::class, 'synceditpermission'])->name('permission.assign.edit');
    Route::put('give-permission/{role}/edit', [AssignPermissionController::class, 'syncupdatepermission']);

    // Konsumen
    Route::get('konsumen', [KonsumenController::class, 'index']);
    // Route::get('/konsumen', [KonsumenController::class, 'index']);
    // Route::get('/kdelete/{id}', [KonsumenController::class, 'destroy']);

    // Pemesanan
    Route::get('pemesanan', [DataPemesananController::class, 'index'])->name('pemesananIndex');
    Route::get('detail-pesanan/{id}', [DataPemesananController::class, 'create'])->name('detailPesanan');
    Route::get('konfirmasi-pesanan/{id}', [DataPemesananController::class, 'konfirmasi'])->name('konfirmasiPesanan');
    Route::get('mencari-teknisi/{id}', [DataPemesananController::class, 'mencariteknisi'])->name('mencariTeknisi');
    Route::get('teknisi-datang/{id}', [DataPemesananController::class, 'teknisidatang'])->name('teknisiDatang');
    Route::get('batal-pesanan/{id}', [DataPemesananController::class, 'batalpesanan'])->name('batalPesanan');
    Route::get('pesanan-selesai/{id}', [DataPemesananController::class, 'selesai'])->name('pesananSelesai');
    Route::get('komplain-selesai/{id}', [DataPemesananController::class, 'komplainselesai'])->name('komplainSelesai');
    // Route::get('/bukti/{id}', [PemesananController::class, 'bukti']);
    // Route::get('/confirm/{id}', [PemesananController::class, 'confirm']);
    // Route::get('/tolak/{id}', [PemesananController::class, 'tolak']);

    // Handle Artikel
    Route::put('artikel/update', [ArtikelController::class, 'update'])->name('artikel.updateData');
    Route::resource('artikel', ArtikelController::class);

    // Handle Promo Carousel
    Route::resource('carousel-promo', CarouselPromoController::class);
});
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [PagesController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
