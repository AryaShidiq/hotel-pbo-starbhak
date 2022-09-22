<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FasumController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResepsionisController;

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

// login
Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/', [LoginController::class, 'authenticate']);

// logout
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);



Route::get('/home', function () {
    return view('index');
})->middleware('auth');
Route::get('/admin', function () {
    return view('layout.admin');
})->middleware('auth');
Route::get('/pesan', function () {
    return view('user.pemesanan');
})->middleware('auth');
// Route::get('/fasilitas', function () {
//     return view('fasilitas');
// });

// kategori
Route::get('/admin/kategori', [KategoriController::class, 'indexkategori'])->middleware('auth');
Route::get('/admin/kategori/create', [KategoriController::class, 'createkategori'])->middleware('auth');
Route::post('/admin/kategori/store', [KategoriController::class, 'storekategori'])->middleware('auth');
Route::get('/admin/kategori/edit/{id}', [KategoriController::class, 'editkategori'])->middleware('auth');
Route::put('/admin/kategori/update/{id}', [KategoriController::class, 'updatekategori'])->middleware('auth');
Route::delete('/admin/kategori/delete/{id}', [KategoriController::class, 'deletekategori'])->middleware('auth');

// kamar
Route::get('/admin/kamar', [KamarController::class,'indexkamar'])->middleware('auth');
Route::get('/admin/kamar/create', [KamarController::class,'createkamar'])->middleware('auth');
Route::post('/admin/kamar/store', [KamarController::class,'storekamar'])->middleware('auth');
Route::get('/admin/kamar/edit/{id}', [KamarController::class,'editkamar'])->middleware('auth');
Route::put('/admin/kamar/update/{id}',[KamarController::class,'updatekamar'])->middleware('auth');
Route::delete('/admin/kamar/delete/{id}',[KamarController::class,'deletekamar'])->middleware('auth');

// Fasilitas umum
Route::get('/admin/fasum', [FasumController::class,'indexfasum'])->middleware('auth');
Route::get('/admin/fasum/create', [FasumController::class,'createfasum'])->middleware('auth');
Route::post('/admin/fasum/store', [FasumController::class,'storefasum'])->middleware('auth');
Route::get('/admin/fasum/edit/{id}',[FasumController::class,'editfasum'])->middleware('auth');
Route::put('/admin/fasum/update/{id}',[FasumController::class,'updatefasum'])->middleware('auth');
Route::delete('/admin/fasum/delete/{id}',[FasumController::class,'deletefasum'])->middleware('auth');

// User
Route::get('/dashboard', function () {
    return view('user.index');
});
Route::get('/fasilitashotel', [UserController::class, 'indexfasumuser'])->middleware('auth');
Route::get('/kamar', [UserController::class, 'indexkamaruser'])->middleware('auth');



// Resepsionis
Route::get('/resepsionis', [ResepsionisController::class, 'indexresep'])->middleware('auth');
Route::get('/resepsionis/pemesanan/create', [ResepsionisController::class, 'createresep'])->middleware('auth');
Route::post('/resepsionis/pemesanan/store', [ResepsionisController::class, 'storeresep'])->middleware('auth');
Route::get('/resepsionis/pemesanan/edit/{id}', [ResepsionisController::class, 'editresep'])->middleware('auth');
Route::put('/resepsionis/pemesanan/update/{id}', [ResepsionisController::class, 'updateresep'])->middleware('auth');
Route::delete('/resepsionis/pemesanan/delete/{id}', [ResepsionisController::class, 'deleteresep'])->middleware('auth'); 