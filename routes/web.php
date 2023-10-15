<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::get('/', [PagesController::class, 'index']);
Route::get('/free_videos', [PagesController::class, 'freeVideos'])->name('free_videos');
Route::get('/premium_videos', [PagesController::class, 'paidVideos'])->name('premium_videos');
Route::get('/meetme', [PagesController::class, 'meetMe']);
Route::get('/store', [PagesController::class, 'store']);
Route::get('/others', [PagesController::class, 'others']);
Route::get('/confessions', [PagesController::class, 'confessions']);
Route::get('/confess', [PagesController::class, 'confess']);
Route::get('/podcast', [PagesController::class, 'podcast']);



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
