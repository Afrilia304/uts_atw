<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;

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

// user
Route::get('user', [HomeCOntroller:: class, 'user']);
Route::get('artikel', [HomeCOntroller:: class, 'artikel']);
Route::get('about', [HomeCOntroller:: class, 'about']);