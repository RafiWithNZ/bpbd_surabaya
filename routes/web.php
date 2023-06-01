<?php

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
});

require __DIR__ . '/auth.php';
