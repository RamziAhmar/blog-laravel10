<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\AuthorController;
use App\Http\Controllers\backend\DashboardController;

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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/author', [AuthorController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
