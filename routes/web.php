<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [\App\Http\Controllers\BurgerController::class, 'index'])->name('index');

Route::middleware(['auth', 'is.admin'])->group(function () {
    Route::get('/burger/create', [\App\Http\Controllers\BurgerController::class, 'create'])->
    name('burger.create');
    Route::post('/burger', [\App\Http\Controllers\BurgerController::class, 'store'])->
    name('burger.store');
    Route::put('/burger/{burger}', [\App\Http\Controllers\BurgerController::class, 'update'])->
    name('burger.update');
    Route::delete('/burger/{burger}', [\App\Http\Controllers\BurgerController::class, 'destroy'])->
    name('burger.destroy');
    Route::get('/burger/{burger}/edit', [\App\Http\Controllers\BurgerController::class, 'edit'])->
    name('burger.edit');
    Route::get('/admin', [\App\Http\Controllers\BurgerController::class, 'admin'])->
    name('admin');
});

Route::get('/', [\App\Http\Controllers\BurgerController::class, 'index'])->name('burger.index');
Route::get('/burger/{id}', [\App\Http\Controllers\BurgerController::class, 'show'])->name('burger.show');

Auth::routes();
