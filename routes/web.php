<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProfileController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
