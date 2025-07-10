<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
   public function login(Request $request)
{
    \Log::info('Login attempt started', ['ip' => $request->ip()]);

    try {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            \Log::info('Login successful', ['user_id' => Auth::id()]);
            return redirect()->intended('/');
        }

        \Log::warning('Login failed: invalid credentials');
        return back()->withErrors(['email' => 'Неверные учетные данные']);

    } catch (\Exception $e) {
        \Log::error('Login system error', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
        return back()->with('error', 'Ошибка сервера: '.$e->getMessage());
    }
}
}