<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\APIController;
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

Route::get('/', [PagesController::class, 'index'])->name('welcome');
Route::get('/pools/{chain}/tokens/{address}', [PagesController::class, 'tokenData'])->name('token-via-chain');
Route::get('/latest-pair-trade', [APIController::class, 'getLatestTradesForGivenPair'])->name('latest-pair-trade');
Route::get('/search', [APIController::class, 'search'])->name('search');
Route::get('/get-token-price', [APIController::class, 'currentTokenPrice'])->name('get-token-price');
Route::get('test', function () {
    return view('test');
});

 // admin routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('signin', [AdminController::class, 'signin'])->name('admin-login');
    
    Route::group(['middleware' => 'admin'], function () { 
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        Route::post('add-token', [AdminController::class, 'addToken'])->name('add-token');
        Route::post('update-token', [AdminController::class, 'updateToken'])->name('update-token');
        Route::post('delete-token', [AdminController::class, 'deleteToken'])->name('delete-token');
        Route::post('chains', [AdminController::class, 'chains'])->name('admin.chains');
    });
});

Route::get('/query', [HomeController::class, 'query6'])->name('query');


Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/token', [HomeController::class, 'index'])->name('home');
Auth::routes();