<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->intended(route('admin.product'));
        }

        $fromField = $request->only(['email', 'password']);

        if (Auth::attempt($fromField)) {
            return redirect()->intended(route('admin.product'));
        }

        return redirect(route('user.login'))->withErrors([
            'email' => 'Авторизуватися не вдалося, перевірте пароль або пошту',
        ]);
    }
}
