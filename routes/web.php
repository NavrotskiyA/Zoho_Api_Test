<?php

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

Route::name('index.')->group(function (){
    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('show');
    Route::post('/',[\App\Http\Controllers\IndexController::class, 'store'])->name('store');
});
