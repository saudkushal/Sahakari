<?php

use App\Http\Controllers\frontend\AboutusController;
use App\Http\Controllers\frontend\BranchController;
use App\Http\Controllers\frontend\LandingController;
use App\Http\Controllers\frontend\ReportController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[LandingController::class,'index'])->name('landing');
Route::get('/aboutus',[AboutusController::class,'index'])->name('aboutus');
Route::get('/report',[ReportController::class,'index'])->name('report');
Route::get('/branch',[BranchController::class,'index'])->name('branch');




