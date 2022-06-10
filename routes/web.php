<?php

use App\Http\Controllers\CoursController;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;


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




Route::get('/tests', [ModuleController::class, 'index'])->name('tests');
Route::get('/', [FormationController::class, 'index'])->name('formations');
Route::get('/cours/{id}/{name?}', [CoursController::class, 'index'])->name('cours');

