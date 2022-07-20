<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function save(Request $request) {
        if(Auth::check()) {
            return redirect(route('user.private'));
        }
        $validateFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(user::where('email', $validateFields['email'])->exists()) {
            return redirect(route('user.reg'))->withErrors([
                'email' => 'Пользователь уже существует'
            ]);
        }

        $user = User::create($validateFields);
        if($user) {
            Auth::login($user);
            // auth()->login($user); // можно через helper, эквивалент
            return redirect(route('user.private'));
        }
        return redirect(route('user.login'))->withErrors([
            'formError' => 'Ошибка создания пользователя'
        ]);
    }
}
