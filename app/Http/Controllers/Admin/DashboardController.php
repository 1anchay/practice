<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{User, Car, Brand, BodyType, DriveType, EngineType};

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'usersCount' => User::count(),
            'carsCount' => Car::count(),
            'brandsCount' => Brand::count(),
            'bodyTypesCount' => BodyType::count(),
            'driveTypesCount' => DriveType::count(),
            'engineTypesCount' => EngineType::count(),
            'latestUsers' => User::latest()->take(5)->get(),
            'latestCars' => Car::with(['brand', 'bodyType'])->latest()->take(5)->get(),
            'isAdmin' => auth()->check() && auth()->user()->isAdmin()
        ];

        return view('admin.dashboard', $data);
    }
}