<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

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


Route::get('/', [MusicController::class, 'index']);

Route::get('/detail/{musicId}', [MusicController::class, 'detail']);

Route::get('/addMusic', [MusicController::class, 'addMusicPage']);
Route::post('/addMusic', [MusicController::class, 'addMusic']);

Route::get('/deleteMusic/{musicId}', [MusicController::class, 'deleteMusic']);

Route::get('/search', [MusicController::class, 'searchMusic']);

Route::get('/editMusic/{musicId}', [MusicController::class, 'editMusicPage']);
Route::post('/editMusic', [MusicController::class, 'editMusic']);


Route::get('/registrate', [UserController::class, 'registratePage']);
Route::post('/registrate', [UserController::class, 'registrate']);

Route::get('/profile', [UserController::class, 'profile']);
Route::post('/changeUserImage', [UserController::class, 'changeUserImage']);
Route::get('/signOut', [UserController::class, 'signOut']);

Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/login', [UserController::class, 'login']);
