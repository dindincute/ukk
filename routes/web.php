<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelatihController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route view tampilan
Route::get('/', [LandingController::class, 'index']);
Route::get('/classes', [LandingController::class, 'classes']);
Route::get('/classes/{id}', [LandingController::class, 'detail_kelas']);
Route::get('/jadwal', [LandingController::class, 'jadwal']);
Route::get('/pelatih', [LandingController::class, 'pelatih']);
Route::get('/tentang', [LandingController::class, 'tentang']);

// Route::get('/contact', [LandingController::class, 'contact']);


// route login
Route::get('/login', [LoginController::class, 'index_login']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'index_register']);
Route::post('/register', [LoginController::class, 'register']);


//route admin
Route::group(['middleware' => 'auth.admin'], function () {



    // menampilkan class index
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/kelas', [DashboardController::class, 'kelas']);
    Route::get('/jadwal-kelas', [DashboardController::class, 'jadwal']);
    Route::get('/pelatih-kelas', [DashboardController::class, 'pelatih']);


      // menampilkan route tambah pelatih

    Route::get('/tambah-pelatih', [PelatihController::class, 'create']);
    Route::post('/tambah-pelatih', [PelatihController::class, 'store']);
    Route::get('/edit-pelatih/{id}', [PelatihController::class, 'edit']);
    Route::put('edit-pelatih/{id}', [PelatihController::class, 'update']);
    Route::delete('/pelatih-kelas/{id}', [PelatihController::class, 'destroy']);

    //route kelas

    Route::get('/tambah-kelas', [KelasController::class, 'create']);
    Route::post('/tambah-kelas', [KelasController::class, 'store']);
    Route::get('/edit-kelas/{id}', [KelasController::class, 'edit']);
    Route::put('edit-kelas/{id}', [KelasController::class, 'update']);
    Route::delete('/kelas/{id}', [KelasController::class, 'destroy']);


    //route jadwal
    Route::get('/tambah-jadwal', [JadwalController::class, 'create']);
    Route::post('/tambah-jadwal', [JadwalController::class, 'store']);
    Route::get('/edit-jadwal/{id}', [JadwalController::class, 'edit']);
    Route::put('/edit-jadwal/{id}', [JadwalController::class, 'update']);
    Route::delete('/jadwal-kelas/{id}', [JadwalController::class, 'destroy']);

     // menampilkan update profile admin
     Route::get('/edit-profile', [DashboardController::class, 'profile']);
     Route::post('/edit-profile', [DashboardController::class, 'edit_profile']);

    //route logout
    Route::get('/logout', [LoginController::class, 'logout']);

});

