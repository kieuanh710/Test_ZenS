<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;
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

Route::get('/content', [JokeController::class,'joke']);
Route::get('/content/funny/{id}', [JokeController::class,'addFunny'])->name('funny');
Route::get('/content/notfun/{id}', [JokeController::class,'addNotFun'])->name('notfun');
// check
// Route::get('/detail', [JokeController::class,'detail'])->name('detail');