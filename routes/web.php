<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthConroller;

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

Route::get('/',[AuthConroller::class, 'index'])->name('index');
Route::get('/create',[AuthConroller::class, 'create']);
Route::post('/',[AuthConroller::class, 'store'])->name('create');
Route::get('/edit/{id}',[AuthConroller::class, 'edit'])->name('edit');
Route::put('/update/{id}',[AuthConroller::class, 'update'])->name('update');
Route::get('/delete/{id}',[AuthConroller::class, 'destroy']);
Route::get('/cari',[AuthConroller::class, 'show'])->name('cari');



