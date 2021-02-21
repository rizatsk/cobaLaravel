<?php
use App\Http\Controllers\indexController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\uploadsController;
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

Route::get('/', [indexController::class, 'index']);

// mahasiswa
Route::resource('/students', mahasiswaController::class);

// upload
Route::resource('/upload', uploadsController::class);
Route::delete('/upload/{image}', [uploadsController::class, 'destroy']);

