<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AdminController;

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
// admin
Route::get('admin/artikel', [ArtikelController:: class, 'artikel']);
Route::get('index_admin', [AdminController:: class, 'index_admin']);

// user
Route::get('user', [HomeController:: class, 'user']);
Route::get('artikel', [HomeController:: class, 'artikel']);
Route::get('about', [HomeController:: class, 'about']);
Route::get('galeri', [HomeController:: class, 'galeri']);
Route::get('contact', [HomeController:: class, 'contact']);
Route::get('views/artikel1', [HomeController:: class, 'artikel1']);
Route::get('views/artikel2', [HomeController:: class, 'artikel2']);
Route::get('login', [HomeController:: class, 'login']);

