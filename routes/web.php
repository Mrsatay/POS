<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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
Route::get('/',function()
{
    return view('welcome');
});
// Route::get('/about', [AboutController::class,'about']);
// Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/world', function () {
    return 'World';
   });
Route::get('/welcome', function () {
    return 'Welcome';
   });
Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
// Route::get('/articles/{id}', [ArticleController::class,'articles']);
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//    ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
//    ]);
// Route::get('/greeting',[WelcomeController::class,'greeting'] );
// Route::prefix('products')->group(function () {
//     Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage']);
//     Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth']);
//     Route::get('/category/home-care', [ProductController::class, 'homeCare']);
//     Route::get('/category/baby-kid', [ProductController::class, 'babyKid']);
// });

Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Route::get('/sales', [SalesController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/tambah',[LevelController::class,'tambah'])->name('/level/tambah');
Route::get('/level/tambah_simpan',[LevelController::class,'tambah_simpan'])->name('/level/tambah_simpan');

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::put('/kategori/update_save/{id}', [KategoriController::class, 'update_save'])->name('kategori.update_save');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');

Route::get('/user', [UserController::class, 'index'])->name('/user');
Route::get('/user/count', [UserController::class, 'index']);
Route::get('/user/tambah',[UserController::class,'tambah'])->name('/user/tambah');
Route::get('/user/ubah/{id}',[UserController::class,'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}',[UserController::class,'hapus'])->name('/user/hapus');
Route::post('/user/tambah_simpan',[UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
Route::put('/user/ubah_simpan/{id}',[UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');
Route::resource('m_user', POSController::class);


Route::get('/',[WelcomeController::class,'index']);

Route::group(['prefix' => 'user'], function(){
    Route::get('/',[UserController::class, 'index']);           // menampilkan halaman awal user
    Route::post('/list',[UserController::class, 'list']);       // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create',[UserController::class, 'create']);    // menampilkan halaman form tambah user
    Route::post('/',[UserController::class, 'store']);          // menyimpan data user baru
    Route::get('/{id}',[UserController::class, 'show']);        // menampilkan detail user
    Route::get('/{id}/edit',[UserController::class, 'edit']);   // menampilkan halaman form edit user
    Route::put('/{id}',[UserController::class, 'update']);      // menyimpan perubahan data user
    Route::delete('/{id}',[UserController::class, 'destroy']);  // menghapus data user
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakna group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akn diarahkan ke AdminController
// jika user yang login merupakan manager maka akan diarahkan ke UserController
Route::group(['middleware'=> ['auth']], function(){

    Route::group(['middleware' => ['cek_login:1']], function(){
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:2']], function(){
        Route::resource('manager', ManagerController::class);
    });
});