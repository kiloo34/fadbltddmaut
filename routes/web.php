<?php

use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CriteriaController as AdminCriteria;
use App\Http\Controllers\Admin\VillagerController as AdminVillager;
use App\Http\Controllers\Admin\EducationController as AdminEducation;
use App\Http\Controllers\Admin\JobController as AdminJob;

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

Route::get('/', function () {
    return view('welcome');
});

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
        Route::get('/allVillager', [AdminVillager::class, 'getAllData'])->name('villager.all');

        // Job
        Route::resource('pekerjaan', AdminJob::class);
        // Route::get('/allVillager', [AdminJob::class, 'getAllData'])->name('villager.all');

        // Education
        Route::resource('pendidikan', AdminEducation::class);
        // Route::get('/allVillager', [AdminEducation::class, 'getAllData'])->name('villager.all');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
