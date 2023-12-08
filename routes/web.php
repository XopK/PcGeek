<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/branch', function () {
    return view('branch');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/addPost', [PostController::class, 'show']);

Route::post('/addPost/create', [PostController::class, 'addPost']);

Route::post('/signUp', [AuthController::class, 'signUp']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/signIn', [AuthController::class, 'signIn']);
