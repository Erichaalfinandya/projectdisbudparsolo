<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\Dashboard\DashboardController as DashboardController;
use App\Http\Controllers\Dashboard\BlankController as BlankController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/event/detail', [EventController::class, 'detailevent'])->name('detail-event');
Route::get('/kuliner', [KulinerController::class, 'index'])->name('kuliner');
Route::get('/kuliner/detail', [KulinerController::class, 'detail'])->name('kuliner-detail');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/blank', [BlankController::class, 'index'])->name('blank');
// Route::get('/blank', [BlankController::class, 'index'])->name('blank');
// Route::get('/blank', [BlankController::class, 'index'])->name('blank');
// Route::get('/blank', [BlankController::class, 'index'])->name('blank');
// Route::get('/blank', [BlankController::class, 'index'])->name('blank');

