<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and assigned to the "web" middleware group.
| Make something great!
|
*/

// web segment
Route::get('/', function () {
    return view('welcome');
});

// admin segment
Route::prefix('admin')->group(function () {
    Route::get('/' , [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login.submit');
    
    Route::middleware('auth')->group(function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [DashboardController::class, ''])->name('admin.dashboard');
    });
});




