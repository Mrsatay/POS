<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


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
});

Route::get('/level',[LevelController::class,'index']);

Route::get('/user',[UserController::class,'index'])->name('/user');
Route::get('user/tambah', [UserController::class, 'tambah'])->name('user/tambah');
Route::get('user/ubah/{id}', [UserController::class, 'ubah'])->name('user/ubah');
Route::get('user/hapus/{id}', [UserController::class, 'hapus'])->name('user/hapus');
Route::get('user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
Route::get('/hello', function(){
    return view('hello', ['name' => 'Andi']);
});



Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/kategori/create', function () {
    return view('kategori.create');
});
Route::post('/add',[KategoriController::class,'createprocess']); 

Route::get('/kategori/delete', function () {
    return view('kategori/delete');
});
Route::post('/destroy',[KategoriController::class,'deleteprocess']); 

Route::get('/kategori/update', function () {
    return view('kategori.update');
});
Route::post('/edit',[KategoriController::class,'updateprocess']); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/kategori', [KategoriController::class, 'index']);