<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Разрешаем GET-запросы всем
        if ($request->isMethod('GET')) {
            return $next($request);
        }

        // Для всех остальных методов проверяем авторизацию
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Требуется авторизация');
        }

        // Проверка прав администратора
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Доступ запрещён. Требуются права администратора.');
        }

        return $next($request);
    }
}