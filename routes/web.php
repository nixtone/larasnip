<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::name('user.')->group(function() {
    Route::view('/private', 'private')->middleware('auth')->name('private');

    Route::get('/login', function() {
        if(Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/reg', function() {
        if(Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('reg');
    })->name('reg');

    Route::post('/reg', [RegisterController::class, 'save']);
});
