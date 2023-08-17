<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyfoodController              ;

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

Route::get('/', function(){
    return view('index');
});

Route::get('/index',[MyfoodController::class, 'index']);
Route::get('/restaurantes',[MyfoodController::class, 'restaurantes']);
Route::get('/mcdonalds',[MyfoodController::class, 'mcdonalds']);
Route::get('/habibs',[MyfoodController::class, 'habibs']);
Route::get('/opastelao',[MyfoodController::class, 'opastelao']);
Route::get('/tiosamjapa',[MyfoodController::class, 'tiosamjapa']);
