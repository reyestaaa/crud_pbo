<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('profile/add', [ProfileController::class, 'create']);
Route::post('profile', [ProfileController::class, 'store']);

Route::get('profile/{id}/edit', [ProfileController::class, 'edit']);
Route::put('profile/{id}', [ProfileController::class, 'update']);

Route::delete('profile/{id}', [ProfileController::class, 'destroy']);


Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
