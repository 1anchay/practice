<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Car;

Route::get('/cars', function (Request $request) {
    $query = Car::with(['brand', 'bodyType', 'engineType', 'driveType'])
        ->select('cars.*');
    
    if ($request->has('body_types')) {
        $bodyTypes = explode(',', $request->body_types);
        $query->whereIn('body_type_id', $bodyTypes);
    }
    
    if ($request->has('brands')) {
        $brands = explode(',', $request->brands);
        $query->whereIn('brand_id', $brands);
    }
    
    if ($request->has('engine_types')) {
        $engineTypes = explode(',', $request->engine_types);
        $query->whereIn('engine_type_id', $engineTypes);
    }
    
    if ($request->has('drive_types')) {
        $driveTypes = explode(',', $request->drive_types);
        $query->whereIn('drive_type_id', $driveTypes);
    }
    
    if ($request->has('status')) {
        $statuses = explode(',', $request->status);
        $query->whereIn('status', $statuses);
    }
    
    $minPrice = $request->min_price ?? 1000000;
    $maxPrice = $request->max_price ?? 10000000;
    $query->whereBetween('price', [$minPrice, $maxPrice]);
    
    switch ($request->sort) {
        case 'price_desc':
            $query->orderBy('price', 'desc');
            break;
        case 'year_desc':
            $query->orderBy('year', 'desc');
            break;
        case 'year_asc':
            $query->orderBy('year', 'asc');
            break;
        case 'popular':
            $query->orderBy('views', 'desc');
            break;
        default:
            $query->orderBy('price', 'asc');
    }
    
    $perPage = $request->per_page ?? 9;
    $cars = $query->paginate($perPage);
    
    return response()->json($cars);
});
