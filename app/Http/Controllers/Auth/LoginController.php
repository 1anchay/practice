<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // Включим подробное логирование
        Log::info('Attempting login', ['email' => $request->email]);
        
        try {
            // Упрощенная валидация
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            // Попытка аутентификации с явным указанием полей
            if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ], $request->remember)) {
                Log::info('Login successful', ['email' => $request->email]);
                return $this->sendLoginResponse($request);
            }

            Log::warning('Login failed', ['email' => $request->email]);
            return $this->sendFailedLoginResponse($request);

        } catch (\Exception $e) {
            Log::error('Login error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return back()->with('error', 'Временная ошибка сервера. Попробуйте позже.');
        }
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->is_admin) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('home');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors(['email' => 'Неверные учетные данные']);
    }
}