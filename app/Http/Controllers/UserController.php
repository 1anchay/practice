<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::orderBy('name')->get()
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id
        ]);

        $user->update($validated);
        return back()->with('success', 'Профиль обновлён');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Пользователь удалён');
    }
}
