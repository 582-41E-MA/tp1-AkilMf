<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeloController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [VeloController::class, 'index'])->name('velo.index');
Route::get('/velo/{velo}', [VeloController::class, 'show'])->name('velo.show');
Route::get('/velo/checkout/{velo}', [VeloController::class, 'checkout'])->name('velo.checkout');