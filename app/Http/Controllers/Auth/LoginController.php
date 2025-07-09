<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        Log::info('Login attempt', ['ip' => $request->ip(), 'email' => $request->email]);
        
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|min:8',
            ]);

            if (Auth::attempt($credentials)) {
                Log::info('Login successful', ['user_id' => Auth::id()]);
                return redirect()->intended('/');
            }

            Log::warning('Login failed', ['email' => $request->email]);
            return back()->withErrors(['email' => 'Неверные учетные данные']);

        } catch (\Exception $e) {
            Log::error('Login error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return back()->with('error', 'Временная ошибка сервера');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}