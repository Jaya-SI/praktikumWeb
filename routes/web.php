<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PenggajianController;
use App\Models\Penggajian;
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

Route::get('/',[AdminController::class, 'home']);

Route::get('/lokasi', [AdminController::class, 'index']);
Route::get('lokasi/tambah', [LokasiController::class, 'index']);
Route::post('lokasi/create',[LokasiController::class, 'create']);
Route::get('lokasi/{id}/ubah',[LokasiController::class,'ubah']);
Route::post('lokasi/{id}/update',[LokasiController::class,'edit']);
Route::get('lokasi/{id}/hapus',[LokasiController::class, 'delete']);
Route::get('lokasi/print',[LokasiController::class,'print']);

//jabatan
Route::get('/jabatan', [AdminController::class, 'jabatan']);
Route::get('/jabatan/tambah', [JabatanController::class, 'index']);
Route::post('/jabatan/create', [JabatanController::class, 'create']);
Route::get('/jabatan/{id}/hapus', [JabatanController::class, 'delete']);
Route::get('/jabatan/{id}/ubah', [JabatanController::class,'ubah']);
route::post('/jabatan/{id}/update',[JabatanController::class,'update']);

//Penggajian
Route::get('/penggajian', [AdminController::class, 'penggajian']);
Route::get('/penggajian/tambah',[PenggajianController::class, 'index']);
Route::post('/penggajian/create',[PenggajianController::class, 'create']);
Route::get('/penggajian/print',[PenggajianController::class,'print']);

