<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Car;
use App\Models\Brand;
use App\Models\BodyType;
use App\Models\DriveType;
use App\Models\EngineType;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'usersCount' => User::count(),
            'carsCount' => Car::count(),
            'brandsCount' => Brand::count(),
            'bodyTypesCount' => BodyType::count(),
            'driveTypesCount' => DriveType::count(),
            'engineTypesCount' => EngineType::count(),
            'latestUsers' => User::latest()->take(5)->get(),
            'latestCars' => Car::with(['brand', 'bodyType'])->latest()->take(5)->get()
        ]);
    }
}