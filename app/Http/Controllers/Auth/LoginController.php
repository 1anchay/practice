<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Переопределяем редирект после успешной авторизации.
     */
    protected function redirectTo()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return route('admin.dashboard');
        }

        return route('home');
    }

    /**
     * Конструктор — определяем middleware.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Переопределяем метод для вывода сообщения при неудачной попытке входа.
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()
            ->withInput($request->only('email'))
            ->with('error', 'Неверный email или пароль.');
    }
}
