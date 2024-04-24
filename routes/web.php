<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiodataController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index', function () {
    return view('index');
});

Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata.index');
Route::get('/create-biodata', [BiodataController::class, 'create'])->name('biodata.create');
Route::post('/biodata', [BiodataController::class, 'store'])->name('biodata.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
