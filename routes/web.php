<?php

use App\Http\Controllers\FasumController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('user.index');
});
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

Route::get('/fasilitashotel', [UserController::class, 'indexuser']);


