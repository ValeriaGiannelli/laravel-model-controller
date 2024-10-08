<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('movie');

Route::get('/migliori-film', [PageController::class, 'bestMovie'])->name('bestMovie');

Route::get('/dettaglio-film/{id}', [PageController::class, 'movieDetail'])->name('movieDetail');

Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');

Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');

