<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CamoController;

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

// Игроки
Route::prefix('/player')->controller(PlayerController::class)->group(function() {
    Route::get('/', 'list');
    Route::get('/new', 'new');
    Route::get('/{player}', 'item')->name('player');
});

// Команды
Route::prefix('/team')->controller(TeamController::class)->group(function() {
    Route::get('/', 'list');
    Route::get('/new', 'new');
    Route::get('/{team}', 'item')->name('team');
});

// Игры
Route::prefix('/game')->controller(GameController::class)->group(function() {
    Route::get('/', 'list');
    Route::get('/new', 'new');
    Route::get('/{game}', 'item')->name('game');
});

// Камуфляжи
Route::prefix('/camo')->controller(CamoController::class)->group(function() {
    Route::get('/', 'list');
    Route::get('/new', 'new');
    Route::get('/{camo}', 'item')->name('camo');
});

// Главная
Route::get('/', function () {
    return view('index');
});
