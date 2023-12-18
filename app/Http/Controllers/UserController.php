<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showUser()
    {
        $user_posts = Auth::user()->posts()->with('tags')->get();
        $user_favorite = Auth::user()->favorites()->with('post.tags')->get();

        return view('profile', ['user_posts' => $user_posts, 'user_favorite' => $user_favorite]);
    }

    public function editProfile(Request $request, User $userid)
    {
        $request->validate(
            [
                "login" => "unique:users",
                "email" => "unique:users",
                "confirm_password" => "nullable|same:password",
            ],
            [
                "login.unique" => "Данный логин занят!",
                "email.unique" => "Данная почта занята!",
                "confirm_password.same" => "Пароли должны совпадать!"
            ]
        );

        $user_data = $request->except('password'); 
        

        $userid->fill([
            'login' => $user_data['login'],
            'email' => $user_data['email'],
        ]);

        if ($request->filled('password')) {
            $userid->password = Hash::make($request->input('password'));
        }

        $userid->save();
        return redirect()->back()->with('succes', 'Данные обновлены!');
        
    }

    public function AdminEdit(){

        return view('admin.editAdmin');
    }

    public function AdminUpdate(Request $request, User $userid)
    {
        $request->validate(
            [
                "login" => "unique:users",
                "email" => "unique:users",
                "confirm_password" => "nullable|same:password",
            ],
            [
                "login.unique" => "Данный логин занят!",
                "email.unique" => "Данная почта занята!",
                "confirm_password.same" => "Пароли должны совпадать!"
            ]
        );

        $user_data = $request->except('password'); 
        

        $userid->fill([
            'login' => $user_data['login'],
            'email' => $user_data['email'],
        ]);

        if ($request->filled('password')) {
            $userid->password = Hash::make($request->input('password'));
        }

        $userid->save();
        return redirect()->back()->with('succes', 'Данные обновлены!');
        
    }
}
