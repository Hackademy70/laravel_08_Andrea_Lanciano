<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;

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
})->name('welcome');
// Home -> register con email
Route::get('/start', [PublicController::class, 'start'])->name('start');

// Show AddMovieForm after login
Route::get('formCreate', [MovieController::class, 'showForm'])->name('showForm');
// Add a movie after login
Route::post('created', [MovieController::class, 'addMovie'])->name('add.movie');