<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeamController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TeamController::class, 'index'])->name('teams.index');
Route::get('/daftar', [TeamController::class, 'regis'])->name('teams.regis');
Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/verify/{id}', [AdminController::class, 'verify'])->name('admin.verify');
    Route::get('/detail/{id}', [AdminController::class, 'detail'])->name('admin.detail');
    Route::post('/verify/{id}', [AdminController::class, 'verify'])->name('admin.verify');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('search-province', [TeamController::class, 'searchProvince'])->name('search.province');
