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

// Игроки
Route::prefix('/player')->group(function() {
    Route::get('/', function() { return view('player.list'); });
    Route::get('/new', function() { return view('player.new'); });
    Route::get('/{player_name}', function() { return view('player.item'); });
});

// Команды
Route::prefix('/team')->group(function() {
    Route::get('/', function() { return view('team.list'); });
    Route::get('/new', function() { return view('team.new'); });
    Route::get('/{team_name}', function() { return view('team.item'); });
});

// Игры
Route::prefix('/game')->group(function() {
    Route::get('/', function() { return view('game.list'); });
    Route::get('/new', function() { return view('game.new'); });
    Route::get('/{game_name}', function() { return view('game.item'); });
});

// Камуфляжи
Route::prefix('/camo')->group(function() {
    Route::get('/', function() { return view('camo.list'); });
    Route::get('/new', function() { return view('camo.new'); });
    Route::get('/{camo_name}', function() { return view('camo.item'); });
});

// Главная
Route::get('/', function () {
    return view('index');
});
