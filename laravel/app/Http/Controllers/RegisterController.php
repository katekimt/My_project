<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request)
    {
        if (Auth::check()) {
            return redirect()->to(route('admin.product'));
        }

        $validateFields = $request->validate([
            'email' => 'required|email',
            'password' => ['nullable', 'confirmed', 'string', 'min:6', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/'],
        ]);

        if (User::where('email', $validateFields['email'])->exists()) {
            return redirect(route('user.registration'))->withErrors([
                'email' => 'Ця пошта вже зареєстровона',
            ]);
        }

        $user = User::create($validateFields);

        if ($user) {
            Auth::login($user);

            return redirect()->to(route('admin.product'));
        }

        return redirect(route('user.login'))->withErrors([
            'fromError' => 'Помилка при збережені користувача',
        ]);
    }
}
