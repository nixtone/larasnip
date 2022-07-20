<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        if(Auth::check()) {
            return redirect()->intended(route('user.private'));
        }

        $formFields = $request->only(['email', 'password']); // only() заберает только указанные поля

        if(Auth::attempt($formFields)) {
            // редирект-helper сначала кидает на стр откуда пришли, если нет то на 'user.private'
            return redirect()->intended(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'Не удалось аутентифицироваться'
        ]);
    }
}
