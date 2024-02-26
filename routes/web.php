<?php

use Illuminate\Support\Facades\Route;


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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/seasons', function () {
    return view('welcome');
});

Route::get('/matches/{season_id}', function ($season_id) {
    return 'Season id: '.$season_id;
});
*/

/*
Route::view('/', 'layout')->name('home');
Route::view('/seasons', 'seasons')->name('seasons');
Route::view('/matches', 'matches')->name('matches');

Route::view('/', 'layout')->name('home');
*/


Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/seasons', [\App\Http\Controllers\SeasonsController::class, 'seasons'])->name('seasons');

Route::get('/games', [\App\Http\Controllers\GamesController::class, 'games'])->name('games');
Route::get('/add', [\App\Http\Controllers\GamesController::class, 'add'])->name('add');
Route::get('/delete', [\App\Http\Controllers\GamesController::class, 'delete'])->name('delete');

Route::get('/show', [\App\Http\Controllers\GamesFormController::class, 'show'])->name('show');
Route::post('/update', [\App\Http\Controllers\GamesFormController::class, 'update'])->name('update');
Route::post('/create', [\App\Http\Controllers\GamesFormController::class, 'store'])->name('store');

