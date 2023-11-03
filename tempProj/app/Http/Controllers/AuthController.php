<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationCodeMailable;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Str;

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
            'username' => 'required|min:4|max:100',
            'email' => 'required|min:4|max:100',
            'pass' => 'required|min:4|max:100',
            'phone' => 'required|min:4|max:100'
        ]);

        $user = new UserModel();

        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('pass'));
        $user->phone = $request->input('phone');

        $confirmationCode = Str::random(6);
        $user->confiramtion_code = $confirmationCode;

        $user->save();

        Mail::to($user->email)->queue(new ConfirmationCodeMailable($confirmationCode));


        Auth::login($user);

        return redirect()->route('home');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

    public function login_api(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user = UserModel::where('email', $request->email)->first();
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }
}
