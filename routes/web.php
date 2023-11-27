<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\VideoController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize');

    return 'Cache, config, and optimization cleared successfully.';
});



Route::get('/', [PagesController::class, 'index'])->name('welcome');
Route::get('/free_videos', [PagesController::class, 'freeVideos'])->name('free_videos');
Route::get('/premium_videos', [PagesController::class, 'paidVideos'])->name('premium_videos');
Route::get('/meetme', [PagesController::class, 'meetMe']);
Route::get('/store', [PagesController::class, 'store']);
Route::get('/others', [PagesController::class, 'others']);
Route::get('/comming_soon', [PagesController::class, 'commingSoon']);
Route::get('/policy', [PagesController::class, 'policy']);
// Confession route
Route::get('/confessions', [PagesController::class, 'confessions'])->name('confessions');
Route::get('/confess', [PagesController::class, 'confess']);
Route::post('/send-confession', [PagesController::class, 'sendConfession']);

// Podcast route
Route::get('/podcast', [PagesController::class, 'podcast']);



Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('admin/video', [VideoController::class, 'index']);
    Route::get('admin/video/upload', [VideoController::class, 'create']);
});

Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'SuperAdminHome'])->name('admin.home');
});
