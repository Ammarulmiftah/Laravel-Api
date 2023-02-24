<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barang_controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/input',[barang_controller::class,'create']);
Route::get('/table',[barang_controller::class,'index']);

Route::post('/create', [barang_controller::class, 'store']);

Route::get('/table/{id}/edit', [barang_controller::class, 'edit']);
Route::post('/table/{id}/proses', [barang_controller::class, 'update']);

Route::get('/table/{id}/delete', [barang_controller::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
