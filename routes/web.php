<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Laporan;

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
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/admin/formlaporan', [Laporan::class, 'create'])->name('admin.formlaporan');
Route::post('/admin/store', [Laporan::class, 'store'])->name('admin.store');