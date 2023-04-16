<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;

// Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CriteriaController as AdminCriteria;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::group([
        'prefix'        => '/admin',
        'as'            => 'admin.',
        'middleware'    => ['role:admin'],
    ], function () {
    	// Dashboard
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard.index');

        // Criteria
        Route::resource('kriteria', AdminCriteria::class);
        Route::get('/allCriteria', [AdminCriteria::class, 'getAllData'])->name('criteria.all');
    });
});

Route::get('/', [HomeController::class, 'index'])->name('landing');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
