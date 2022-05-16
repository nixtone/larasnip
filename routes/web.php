<?php

//use App\Http\Controllers\PostController;

// В перспективе заменить на хелпер namespace в группировке роутов
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DestroyController;

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

Route::get('/', function() {
    return view('layouts.main');
});

Route::name('post.')->group(function() { // ->namespace('\Post')
    Route::get('/posts', IndexController::class)->name('index');
    Route::get('/posts/create', CreateController::class)->name('create');
    Route::post('/posts', StoreController::class)->name('store');
    Route::get('/posts/{post}', ShowController::class)->name('show');
    Route::get('/posts/{post}/edit', EditController::class)->name('edit');
    Route::patch('/posts/{post}', UpdateController::class)->name('update');
    Route::delete('/posts/{post}', DestroyController::class)->name('destroy');
});

/*
Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);
Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);
*/
