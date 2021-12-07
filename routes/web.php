<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\CosmetologController;
use App\Http\Controllers\HaircutterController;
use App\Http\Controllers\ManicureController;
use App\Http\Controllers\VizajeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/cosmetolog',[CosmetologController::class, 'index']);
Route::get('/haircutter',[HaircutterController::class, 'index']);
Route::get('/manicure', [ManicureController::class, 'index']);
Route::get('/vizaje', [VizajeController::class, 'index']);


