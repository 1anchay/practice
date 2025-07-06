<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\BodyType;
use App\Models\Brand;
use App\Models\EngineType;
use App\Models\DriveType;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        // Получаем минимальную и максимальную цены из базы данных
        $minPrice = Car::min('price') ?? 1000000;
        $maxPrice = Car::max('price') ?? 10000000;

        // Получаем данные для фильтров с подсчетом количества автомобилей
        $bodyTypes = BodyType::withCount('cars')->get();
        $brands = Brand::withCount('cars')->get();
        $engineTypes = EngineType::withCount('cars')->get();
        $driveTypes = DriveType::withCount('cars')->get();

        return view('catalog', [
            'bodyTypes' => $bodyTypes,
            'brands' => $brands,
            'engineTypes' => $engineTypes,
            'driveTypes' => $driveTypes,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice
        ]);
    }
}