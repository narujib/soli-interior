<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/services', [ServiceController::class, 'index']);

Route::get('/portofolios', [PortofolioController::class, 'index']);
Route::get('/portofolios/{slug}', [PortofolioController::class, 'show']);

// Route::get('/portofolios', function () {
//     return view('portofolios');
// });
Route::get('/detail', function () {
    return view('portofolio-detail');
});
