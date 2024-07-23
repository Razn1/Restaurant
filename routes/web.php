<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksimenuController;
use App\Http\Controllers\MenuController;

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

// Route::get('/', function () {
//     return view('home.dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/l', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/user', [AdminController::class, 'index'])->middleware('Admin');
Route::get('/user/tambah', [AdminController::class, 'create'])->middleware('Admin');
Route::post('/user/save', [AdminController::class, 'store'])->middleware('Admin');
Route::get('/user/{id}/delete', [AdminController::class, 'destroy'])->middleware('Admin');
Route::get('/user/{id}/edit', [AdminController::class, 'show'])->middleware('Admin');
Route::post('/user/{id}/update', [AdminController::class, 'update'])->middleware('Admin');

Route::get('/kasir', [KasirController::class, 'index'])->middleware('auth');
Route::get('/kasir/tambah', [KasirController::class, 'create'])->middleware('auth');
Route::post('/kasir/save', [KasirController::class, 'store'])->middleware('auth');
Route::get('/kasir/{id}/delete', [KasirController::class, 'destroy'])->middleware('auth');
Route::get('/kasir/{id}/edit', [KasirController::class, 'show'])->middleware('auth');
Route::post('/kasir/{id}/update', [KasirController::class, 'update'])->middleware('auth');

Route::get('/transaksi', [TransaksiController::class, 'index'])->middleware('auth');
Route::get('/transaksi/tambah', [TransaksiController::class, 'create'])->middleware('auth');
Route::post('/transaksi/save', [TransaksiController::class, 'store'])->middleware('auth');
Route::get('/transaksi/{id}/delete', [TransaksiController::class, 'destroy'])->middleware('auth');
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'show'])->middleware('auth');
Route::post('/transaksi/{id}/update', [TransaksiController::class, 'update'])->middleware('auth');

Route::get('/tranmenu', [TransaksimenuController::class, 'index'])->middleware('auth');
Route::get('/tranmenu/tambah', [TransaksimenuController::class, 'create'])->middleware('auth');
Route::post('/tranmenu/save', [TransaksimenuController::class, 'store'])->middleware('auth');
Route::get('/tranmenu/{id}/delete', [TransaksimenuController::class, 'destroy'])->middleware('auth');
Route::get('/tranmenu/{id}/edit', [TransaksimenuController::class, 'show'])->middleware('auth');
Route::post('/tranmenu/{id}/update', [TransaksimenuController::class, 'update'])->middleware('auth');

Route::get('/menu', [MenuController::class, 'index'])->middleware('auth');
Route::get('/menu/tambah', [MenuController::class, 'create'])->middleware('auth');
Route::post('/menu/save', [MenuController::class, 'store'])->middleware('auth');
Route::get('/menu/{id}/delete', [MenuController::class, 'destroy'])->middleware('auth');
Route::get('/menu/{id}/edit', [MenuController::class, 'show'])->middleware('auth');
Route::post('/menu/{id}/update', [MenuController::class, 'update'])->middleware('auth');
