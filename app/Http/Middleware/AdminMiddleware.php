<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
  public function handle(Request $request, Closure $next): Response
{
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'Требуется авторизация');
    }

    $user = auth()->user();
    
    \Log::info('Admin access check', [
        'user_id' => $user->id,
        'email' => $user->email,
        'is_admin' => $user->is_admin
    ]);

    if (!$user->isAdmin()) {
        \Log::warning('Admin access denied', ['user' => $user]);
        abort(403, 'Доступ запрещён. Требуются права администратора.');
    }

    return $next($request);
}
}