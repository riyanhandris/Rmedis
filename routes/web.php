<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dokter', [DokterController::class, 'index']);
    Route::get('/pasien', [PasienController::class, 'index']);
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/dokter/addDokter', [DokterController::class, 'addDokter']);
    Route::get('/pasien/addPasien', [PasienController::class, 'addPasien']);
    Route::get('/pasien/detail/{id}', [PasienController::class, 'detailPasien']);
});

Route::post('/pasien/addPasien/add', [PasienController::class, 'store']);
Route::post('/dokter/addDokter', [DokterController::class, 'store']);

Route::post('/pasien/addKondisi', [PasienController::class, 'inputKondisi']);
