<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signUp(Request $request)
    {
        $request->validate(
            [
                "email" => "required|unique:users|email",
                "login" => "required|unique:users",
                "password" => "required",
                "confirm_password" => "required|same:password",
            ],
            [
                "email.required" => "Поле обязательно для заполнения!",
                "email.email" => "Введите правильный адрес!",
                "email.unique" => "Данный адрес занят!",
                "login.unique" => "Данные логин занят!",
                "password.required" => "Поле обязательно для заполнения!",
                "confirm_password.required" => "Поле обязательно для заполнения!",
                "login.required" => "Поле обязательно для заполнения!",
                "confirm_password.same" => "Пароли должны совпадать!"
            ]
        );

        $user_data = $request->all();

        $user = User::create([
            "login" => $user_data['login'],
            "email" => $user_data['email'],
            "password" => $user_data['password'],
            "id_role" => 2,
        ]);
        Auth::login($user);
        return redirect()->back()->with('succes', "Успешная регистрация");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect("/");
    }

    public function signIn(Request $request)
    {
        $request->validate(
            [
                "login_log" => "required",
                "password_log" => "required",
            ],
            [
                "password_log.required" => "Поле обязательно для заполнения!",
                "login_log.required" => "Поле обязательно для заполнения!",
            ]
        );

        $user_login = $request->only("login_log", "password_log");

        if (Auth::attempt([
            "login" => $user_login['login_log'],
            "password" => $user_login['password_log']
        ])) {
            return redirect("/")->with("succes", "");
        } else {
            return redirect()->back()->with("error", "Неверный логин или пароль!!!");
        }
    }
}
