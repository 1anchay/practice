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
            'latestCars' => Car::with('brand')->latest()->take(5)->get()
        ]);
    }
}