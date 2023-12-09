<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/config', function () {
    return view('config');
});

Route::get('/forum', [PostController::class, 'showForum']);

Route::get('/branch', function () {
    return view('branch');
});

Route::get('/profile', [UserController::class, 'showUser']);

Route::get('/addPost', [PostController::class, 'show']);

Route::post('/addPost/create', [PostController::class, 'addPost']);

Route::post('/signUp', [AuthController::class, 'signUp']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/signIn', [AuthController::class, 'signIn']);
