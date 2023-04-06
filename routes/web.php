<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
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

use App\Http\Controllers\AdminController;
route::get('/admin/dashboard', [AdminController::class, 'index']);
route::get('/admin/post', [AdminController::class, 'show_postingan']);
route::get('/admin/arsip', [AdminController::class, 'show_arsip']);
route::get('/admin/logout', [AdminController::class, 'logout']);
route::get('/admin/setting', [AdminController::class, 'setting']);
route::get('/admin/favorit', [AdminController::class, 'favorit']);
