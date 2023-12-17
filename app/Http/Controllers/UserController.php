<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showUser()
    {
        $user_posts = Auth::user()->posts()->with('tags')->get();
        $user_favorite = Auth::user()->favorites()->with('post.tags')->get();

        return view('profile', ['user_posts' => $user_posts, 'user_favorite' => $user_favorite]);
    }
}
