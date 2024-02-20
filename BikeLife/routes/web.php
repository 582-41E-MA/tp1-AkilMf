<?php

use App\Http\Controllers\VeloController;
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

// Home Page 
Route::get('/', function () {
    return view('welcome');
})->name('home');



// Affiche all bikes from db.velos
Route::get('/velos', [VeloController::class, 'index'])->name('velo.index');


// Affiche 1 bike ( show method)
