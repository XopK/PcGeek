<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComponentController;
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

Route::get('/', [PostController::class, 'index']);

Route::post('/signUp', [AuthController::class, 'signUp']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/signIn', [AuthController::class, 'signIn']);

Route::get('/forum', [PostController::class, 'showForum']);

Route::get('/branch/{id}', [PostController::class, 'branchShow']);

Route::middleware('checkRole:user')->group(function () {

    Route::get('/profile', [UserController::class, 'showUser']);

    Route::get('/addPost', [PostController::class, 'show']);

    Route::post('/addPost/create', [PostController::class, 'addPost']);
});

Route::middleware('checkRole:admin')->group(function () {

    Route::get("/admin", function () {
        return view('admin.index');
    });

    Route::get('/admin/components', [ComponentController::class, 'showComponents']);

    Route::get('/admin/components/edit/{edit}', [ComponentController::class, 'editComponent']);

    Route::patch('/admin/components/update/{component}', [ComponentController::class, 'updateComponent']);

    Route::delete('/admin/components/delete/{component}', [ComponentController::class, 'deleteComponent']);

    Route::post('/admin/addComponent/create', [ComponentController::class, 'addComponent']);

    Route::get('/admin/addComponent', [ComponentController::class, 'showAddComponent']);
});

// Route::get('/config', function () {
    //     return view('config');
    // });