<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;

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

Route::get('/', [HomeController::class, 'showHomePage']);

Route::get('/movie', [MovieController::class, 'showAllMovies']);

Route::get('/movie/{id}', [MovieController::class, 'showMovieById']);

Route::get('/add', [MovieController::class, 'create'])->name('add');
Route::post('/add', [MovieController::class, 'store']);

//Route::prefix('')->name('')->group(function () {
//    Route::resource('movie', MovieController::class)->except(['show', 'index']);
//});



