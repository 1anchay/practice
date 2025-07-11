<?php

namespace App\Http\Controllers;

use App\Models\{User, Car, Brand, BodyType, DriveType, EngineType};

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'usersCount' => User::count(),
            'carsCount' => Car::count(),
            'brandsCount' => Brand::count(),
            'bodyTypesCount' => BodyType::count(),
            'driveTypesCount' => DriveType::count(),
            'engineTypesCount' => EngineType::count(),
            'latestUsers' => User::latest()->take(5)->get(),
            'latestCars' => Car::with(['brand', 'bodyType', 'images'])->latest()->take(5)->get(),
            'isAdmin' => auth()->check() && auth()->user()->is_admin
        ]);
    }
}