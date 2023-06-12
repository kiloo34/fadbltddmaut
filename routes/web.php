<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;

// Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CriteriaController as AdminCriteria;
use App\Http\Controllers\Admin\VillagerController as AdminVillager;
use App\Http\Controllers\Admin\EducationController as AdminEducation;
use App\Http\Controllers\Admin\JobController as AdminJob;
use App\Http\Controllers\Admin\SpkController;

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

        // Villager
        Route::resource('warga', AdminVillager::class);
        Route::get('/warga/kriteriaVal', [AdminVillager::class, 'kriteriaVal'])->name('warga.kriteriaVal');
        Route::get('/warga/{warga}/kriteriaValForm', [AdminVillager::class, 'formValue'])->name('warga.kriteriaValForm');
        Route::post('/warga/{warga}/kriteriaValForm', [AdminVillager::class, 'storeKriteriaVal'])->name('warga.storeKriteriaVal');
        // ajax
        Route::get('/allVillager', [AdminVillager::class, 'getAllData'])->name('villager.all');

        // Job
        Route::resource('pekerjaan', AdminJob::class);
        // Route::get('/allVillager', [AdminJob::class, 'getAllData'])->name('villager.all');

        // Education
        Route::resource('pendidikan', AdminEducation::class);
        // Route::get('/allVillager', [AdminEducation::class, 'getAllData'])->name('villager.all');

        // SPK
        Route::get('/spk', [SpkController::class, 'index'])->name('spk.index');
        Route::get('/spk/calculate', [SpkController::class, 'calculate'])->name('spk.calculate');
    });
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
