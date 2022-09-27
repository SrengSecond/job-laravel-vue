<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ChripController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Models\Job;

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

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('chrips', ChripController::class)
    ->only(['index', 'store'])
    ->middleware(['auth','verified']);*/

Route::get('/register',[UserController::class,'create'])->name('auth.register')->middleware('guest');
Route::post('/logout',[UserController::class,'logout'])->name('auth.logout');
Route::post('/user',[UserController::class,'store'])->name('auth.user');

Route::get('/login',[UserController::class,'login'])->name('auth.login');
Route::post('/user/authenticate',[UserController::class,'authenticate'])->name('auth.authenticate');

// 🚀 Job Model CRUD Operations
Route::get('/jobs',[JobController::class, 'index'])->name('jobs.index');

Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');
Route::post('/jobs/store',[JobController::class, 'store'])->name('jobs.store');

Route::get('/jobs/{job}/edit',[JobController::class, 'edit'])->name('jobs.edit')->middleware('auth');
Route::put('/jobs/{job}',[JobController::class, 'update'])->name('jobs.update')->middleware('auth');

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy')->middleware('auth');

Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');


