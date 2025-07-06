<?php
namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\BodyType;
use App\Models\EngineType;
use App\Models\DriveType;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with(['brand', 'bodyType', 'engineType', 'driveType'])
            ->filter(request(['brand', 'bodyType', 'engineType', 'driveType', 'minPrice', 'maxPrice', 'status']))
            ->paginate(10);
            
        $brands = Brand::all();
        $bodyTypes = BodyType::all();
        $engineTypes = EngineType::all();
        $driveTypes = DriveType::all();
        
        return view('cars.index', compact('cars', 'brands', 'bodyTypes', 'engineTypes', 'driveTypes'));
    }
    
    public function create()
    {
        return view('cars.create', [
            'brands' => Brand::all(),
            'bodyTypes' => BodyType::all(),
            'engineTypes' => EngineType::all(),
            'driveTypes' => DriveType::all()
        ]);
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'body_type_id' => 'required|exists:body_types,id',
            'engine_type_id' => 'required|exists:engine_types,id',
            'drive_type_id' => 'required|exists:drive_types,id',
            'price' => 'required|numeric|min:1000000|max:10000000',
            'status' => 'required|in:new,in_stock,on_order',
            'description' => 'nullable|string'
        ]);
        
        Car::create($validated);
        
        return redirect()->route('cars.index')->with('success', 'Автомобиль добавлен');
    }
}