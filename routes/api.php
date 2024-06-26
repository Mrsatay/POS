<?php

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
// Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register1');
route::post('/login',App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
Route::middleware('auth:api')->post('/logout', 'App\Http\Controllers\Api\LogoutController')->name('logout');


route::get('levels', [LevelController::class, 'index']);
route::post('levels', [LevelController::class, 'store']);
route::get('levels/{level}', [LevelController::class, 'show']);
route::put('levels/{level}', [LevelController::class, 'update']);
route::delete('levels/{level}', [LevelController::class, 'destroy']);

