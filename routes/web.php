<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/import', [SearchController::class, 'import'])->name('import');
Route::post('/import/markah', [SearchController::class, 'importMarkah'])->name('importMarkah');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/profile/{id}', [SearchController::class, 'profile'])->name('profile');
Route::get('/result/{id}', [SearchController::class, 'result'])->name('result');





