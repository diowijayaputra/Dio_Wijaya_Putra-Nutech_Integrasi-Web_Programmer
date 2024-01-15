<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DioController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/tambah_produk', function () {
    return view('tambah_produk');
});

Route::get('/edit_produk', function () {
    return view('edit_produk');
});

Route::get('/endSession', [DioController::class, 'session']);

// INSERT
Route::post('/daftar_profile', [DioController::class, 'profile']);
Route::post('/addProduct', [DioController::class, 'addProduct']);

// GET
Route::get('/logIn/{username}/{password}', [DioController::class, 'admin']);
Route::get('/logInData/{user_id}/', [DioController::class, 'adminUsername']);
Route::get('/profileData/{user_id}/', [DioController::class, 'profileData']);
Route::get('/getCategory', [DioController::class, 'getCategory']);
Route::get('/getProduk', [DioController::class, 'getProduk']);
Route::get('/getOneProduk/{id_produk}', [DioController::class, 'getOneProduk']);
Route::get('/getSomeProduk/{nama_produk}', [DioController::class, 'getSomeProduk']);
Route::get('/getCat/{catType}', [DioController::class, 'getCat']);
Route::get('/searchProduct/{keyword}', [DioController::class, 'searchProduct']);
Route::get('/searchProduk/{keyword}/{kategori_produk}', [DioController::class, 'searchProduk']);
Route::get('/searchkategoriProduk/{kategori_produk}', [DioController::class, 'searchkategoriProduk']);

// UPDATE
Route::post('/editProduct/{id_produk}', [DioController::class, 'editProduct']);

// DELETE
Route::post('/deleteProduct/{id}', [DioController::class, 'deleteProduct']);
