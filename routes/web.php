<?php

<<<<<<< HEAD
use App\Http\Controllers\DashboardController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrganizeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PosPantauController;
use App\Http\Controllers\PrabencanaController;
=======
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProfileController;
>>>>>>> origin/coba

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

<<<<<<< HEAD

// Route Login Dashboard
Route::get('/', [HomeController::class, 'index'])->name('masuk')->middleware('guest');
Route::post('/in', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);


// Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
=======
Route::get('/home', function () {
    return Inertia::render('Homepage', [
        'title' => 'BPBD Kota Surabaya',
        'description' => 'Selamat datang website resmi BPBD Kota Surabaya'
    ]);
});

//Profil
Route::get('/profil', function () {
    return Inertia::render('Profil/Profilpage', [
        'title' => 'Profil | BPBD Kota Surabaya',
        'description' => 'Selamat datang website resmi BPBD Kota Surabaya'
    ]);
});

//Layanan
Route::get('/layanan', function () {
    return Inertia::render('Layanan/Layanan', [
        'title' => 'Layanan | BPBD Kota Surabaya',
        'description' => 'Selamat datang website resmi BPBD Kota Surabaya'
    ]);
});


//Edukasi Bencana
Route::get('/prabencana', function () {
    return Inertia::render('Edukasi/Prabencana', [
        'title' => 'Edukasi | BPBD Kota Surabaya',
        'description' => 'Selamat datang website resmi BPBD Kota Surabaya'
    ]);
});

Route::get('/pascabencana', function () {
    return Inertia::render('Edukasi/Pascabencana', [
        'title' => 'Edukasi | BPBD Kota Surabaya',
        'description' => 'Selamat datang website resmi BPBD Kota Surabaya'
    ]);
});

Route::get('/tanggapdarurat', function () {
    return Inertia::render('Edukasi/Tanggapdarurat', [
        'title' => 'Edukasi | BPBD Kota Surabaya',
        'description' => 'Selamat datang website resmi BPBD Kota Surabaya'
    ]);
});

//Dokumen Mitigasi
Route::get('/dokmit', function () {
    return Inertia::render('Dokmitigasi/Dokmit', [
        'title' => 'Dokumen Mitigasi | BPBD Kota Surabaya',
        'description' => 'Selamat datang website resmi BPBD Kota Surabaya'
    ]);
});

//Pos Pantau
Route::get('/pos', function () {
    return Inertia::render('LokasiPos/Pos', [
        'title' => 'Pos Pantau | BPBD Kota Surabaya',
        'description' => 'Selamat datang website resmi BPBD Kota Surabaya'
    ]);
}, [PosController::class, 'index']);

// Route::get('/pos-tes', function () {
//     return Inertia::render('Tes', [
//         'title' => 'BPBD Kota Surabaya',
//         'description' => 'Selamat datang website resmi BPBD Kota Surabaya'
//     ]);
// });

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
>>>>>>> origin/coba

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
<<<<<<< HEAD
    Route::post('/updatemain', [HomeController::class, 'update']);

    //CRUD Halaman Utama
    Route::post('/admin', [UtamaController::class, 'index']);
    Route::get('/utama', [UtamaController::class, 'index']);
    // CRUD News Update
    Route::get('/newsupdate', [NewsController::class, 'index']);
    Route::get('/newsupdate/create', [NewsController::class, 'create']);
    Route::get('/newsupdate/{id}/edit', [NewsController::class, 'edit']);
    Route::get('/newsupdate/{id}/detail', [NewsController::class, 'show']);
    Route::post('/newsupdate/create', [NewsController::class, 'store']);
    Route::put('/newsupdate/{id}', [NewsController::class, 'update']);
    Route::delete('/newsupdate/{id}', [NewsController::class, 'destroy']);

    //CRUD 3 menu utama : prabencana
    Route::get('/prabencana', [PrabencanaController::class, 'index']);
    Route::get('/prabencana{id}/detail', [PrabencanaController::class, 'show']);
    Route::get('/prabencana{id}/edit', [PrabencanaController::class, 'edit']);
    Route::put('/prabencana{id}', [PrabencanaController::class, 'update']);
    Route::post('/prabencana', [PrabencanaController::class, 'update']);

    //CRUD Struktur Organisasi
    Route::resource('/dashboard/organisasi', OrganizeController::class)->middleware('auth');

    //CRUD Pos Pantau
    Route::resource('/dashboard/posPantau', PosPantauController::class)->middleware('auth');
    Route::get('/marker/json', [PosPantauController::class, 'marker']);
=======
>>>>>>> origin/coba
});

require __DIR__ . '/auth.php';
