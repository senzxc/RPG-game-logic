<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth', 'hasCharacter'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::post('/buy', [HomeController::class, 'buy'])->name('buy');
    Route::post('/dungeon', [HomeController::class, 'dungeon'])->name('dungeon');
});

Route::middleware('auth')->group(function () {
    Route::get('/charMaker', [HomeController::class, 'charHome'])->name('charMaker');
    Route::post('/charMaker', [HomeController::class, 'charCreate']);
    Route::post('/logout', [HomeController::class, 'logout']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginUser'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/regis', [AuthController::class, 'regisUser'])->name('regis');
    Route::post('/regis', [AuthController::class, 'storeUser']);
});

