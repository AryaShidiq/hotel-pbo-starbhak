<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FasumController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KategoriController;
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


Route::get('/home', function () {
    return view('index');
});
Route::get('/admin', function () {
    return view('layout.admin');
});
Route::get('/pesan', function () {
    return view('user.pemesanan');
});
// Route::get('/fasilitas', function () {
//     return view('fasilitas');
// });

// kategori
Route::get('/admin/kategori', [KategoriController::class, 'indexkategori']);
Route::get('/admin/kategori/create', [KategoriController::class, 'createkategori']);
Route::post('/admin/kategori/store', [KategoriController::class, 'storekategori']);
Route::get('/admin/kategori/edit/{id}', [KategoriController::class, 'editkategori']);
Route::put('/admin/kategori/update/{id}', [KategoriController::class, 'updatekategori']);
Route::delete('/admin/kategori/delete/{id}', [KategoriController::class, 'deletekategori']);

// kamar
Route::get('/admin/kamar', [KamarController::class,'indexkamar']);
Route::get('/admin/kamar/create', [KamarController::class,'createkamar']);
Route::post('/admin/kamar/store', [KamarController::class,'storekamar']);
Route::get('/admin/kamar/edit/{id}', [KamarController::class,'editkamar']);
Route::put('/admin/kamar/update/{id}',[KamarController::class,'updatekamar']);
Route::delete('/admin/kamar/delete/{id}',[KamarController::class,'deletekamar']);

// Fasilitas umum
Route::get('/admin/fasum', [FasumController::class,'indexfasum']);
Route::get('/admin/fasum/create', [FasumController::class,'createfasum']);
Route::post('/admin/fasum/store', [FasumController::class,'storefasum']);
Route::get('/admin/fasum/edit/{id}',[FasumController::class,'editfasum']);
Route::put('/admin/fasum/update/{id}',[FasumController::class,'updatefasum']);
Route::delete('/admin/fasum/delete/{id}',[FasumController::class,'deletefasum']);

// User
Route::get('/', function () {
    return view('user.index');
});
Route::get('/fasilitashotel', [UserController::class, 'indexfasumuser']);
Route::get('/kamar', [UserController::class, 'indexkamaruser']);



// Resepsionis
Route::get('/resepsionis', [ResepsionisController::class, 'indexresep']);
Route::get('/resepsionis/pemesanan/create', [ResepsionisController::class, 'createresep']);
Route::post('/resepsionis/pemesanan/store', [ResepsionisController::class, 'storeresep']);
Route::get('/resepsionis/pemesanan/edit/{id}', [ResepsionisController::class, 'editresep']);
Route::put('/resepsionis/pemesanan/update/{id}', [ResepsionisController::class, 'updateresep']);
Route::delete('/resepsionis/pemesanan/delete/{id}', [ResepsionisController::class, 'deleteresep']); 