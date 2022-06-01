<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LokasiController;
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

