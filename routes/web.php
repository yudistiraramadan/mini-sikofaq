<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PetugasController;
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
//     return view('authentication.login');
// });
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth', 'ceklevel:1']], function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard_admin');
});

Route::group(['middleware' => ['auth', 'ceklevel:2']], function(){
    Route::get('/dashboard', [PetugasController::class, 'dashboard'])->name('dashboard_petugas');
});

// Route::get('/dashboard', function(){
//     return view('layouts.main');
// });

