<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function sign() {
        return view('sign');
    }

    public function login_check(Request $request) {
        $valid = $request->validate([
          'email' => 'required|min:4|max:100',
          'pass' => 'required|min:4|max:100'
        ]);

        $user = UserModel::whereEmail($valid['email'])->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Пользователь с таким email не найден.']);
        }

        if (!Hash::check($valid['pass'], $user->password)) {
            return redirect()->back()->withErrors(['pass' => 'Неверный пароль.']);
        }

        Auth::login($user);

        return redirect()->route('home');
    }

    public function sign_check(Request $request) {
        $valid = $request->validate([
            'username' => 'required|min:4|max:100|unique:user_models',
            'email' => 'required|min:4|max:100|unique:user_models',
            'pass' => 'required|min:4|max:100',
            'phone' => 'required|min:4|max:100'
        ]);

        $user = new UserModel();

        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('pass'));
        $user->phone = $request->input('phone');

        $user->save();

        Auth::login($user);

        return redirect()->route('home');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home'); // Или куда бы вы ни хотели перенаправить пользователя после выхода
    }
}
