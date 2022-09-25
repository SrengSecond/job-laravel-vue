<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Models\User;

use App\Models\Job;
use App\Http\Controllers\JobController;

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

Route::get('/', function () {
    Debugbar::info("INFO");
    Debugbar::error("INFO");
    Debugbar::warning("INFO");
    Debugbar::addMessage('Another message', 'mylabel');
    return view('welcome');
});

Route::get('/job',[JobController::class, 'index']);

Route::get('/job/{id}', [JobController::class, 'detail']);
