<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Car;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'usersCount' => User::count(),
            'postsCount' => Post::count(),
            'carsCount' => Car::count(),
            'recentActivities' => ActivityLog::latest()->take(5)->get()
        ];

        return view('admin.dashboard', $stats);
    }
}