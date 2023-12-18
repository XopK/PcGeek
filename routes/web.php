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

Route::get('/forum/sort/{sort}', [PostController::class, 'SortForum']);

Route::post('/forum/search', [PostController::class, 'searchTags']);

Route::middleware('checkRole:user')->group(function () {

    Route::get('/profile', [UserController::class, 'showUser']);

    Route::get('/addPost', [PostController::class, 'show']);

    Route::post('/addPost/create', [PostController::class, 'addPost']);

    Route::post('/branch/comment/{branch}', [PostController::class, 'addComment']);

    Route::get('/like/{like}', [PostController::class, 'likePost']);

    Route::get('/disslike/{disslike}', [PostController::class, 'disslikePost']);

    Route::get('/likeComment/{like}', [PostController::class, 'likeComment']);

    Route::get('/disslikeComment/{disslike}', [PostController::class, 'disslikeComment']);

    Route::get('/favorite/{favorite}', [PostController::class, 'FavoriteAdd']);

    Route::get('/removeFavorite/{favorite}', [PostController::class, 'FavoriteRemove']);

    Route::delete('/deleteBranch/{delete}', [PostController::class, 'deleteBranch']);

    Route::patch('/update/{update}', [PostController::class, 'updatePost']);

    Route::get('/editPost/{edit}', [PostController::class, 'editPost']);

    Route::get('/editPost/deleteTag/{tagid}', [PostController::class, 'deleteTag']);

    Route::patch('/editProfile/{userid}', [UserController::class, 'editProfile']);
});

Route::middleware('checkRole:admin')->group(function () {

    Route::get("/admin", [PostController::class, 'showPostAdmin']);

    Route::get('/admin/components', [ComponentController::class, 'showComponents']);

    Route::get('/admin/components/edit/{edit}', [ComponentController::class, 'editComponent']);

    Route::patch('/admin/components/update/{component}', [ComponentController::class, 'updateComponent']);

    Route::delete('/admin/components/delete/{component}', [ComponentController::class, 'deleteComponent']);

    Route::post('/admin/addComponent/create', [ComponentController::class, 'addComponent']);

    Route::get('/admin/addComponent', [ComponentController::class, 'showAddComponent']);

    Route::get('/admin/editAdminProfile', [UserController::class, 'AdminEdit']);

    Route::patch('/editProfileAdmin/{userid}', [UserController::class, 'AdminUpdate']);
});

// Route::get('/config', function () {
    //     return view('config');
    // });