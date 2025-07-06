<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with(['brand', 'bodyType'])->paginate(10);
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        $brands = Brand::all();
        $bodyTypes = BodyType::all();
        $engineTypes = EngineType::all();
        $driveTypes = DriveType::all();
        
        return view('admin.cars.create', compact('brands', 'bodyTypes', 'engineTypes', 'driveTypes'));
    }

    public function store(StoreCarRequest $request)
    {
        $car = Car::create($request->validated());
        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $car->images()->create(['path' => $path]);
            }
        }
        
        return redirect()->route('admin.cars.index')->with('success', 'Автомобиль добавлен');
    }

    public function edit(Car $car)
    {
        $brands = Brand::all();
        $bodyTypes = BodyType::all();
        $engineTypes = EngineType::all();
        $driveTypes = DriveType::all();
        
        return view('admin.cars.edit', compact('car', 'brands', 'bodyTypes', 'engineTypes', 'driveTypes'));
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->update($request->validated());
        
        return redirect()->route('admin.cars.index')->with('success', 'Изменения сохранены');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Автомобиль удален');
    }
    
    public function uploadImage(Request $request, Car $car)
    {
        $request->validate(['image' => 'required|image']);
        
        $path = $request->file('image')->store('cars', 'public');
        $car->images()->create(['path' => $path]);
        
        return back()->with('success', 'Изображение загружено');
    }
    
    public function deleteImage(CarImage $image)
    {
        Storage::delete('public/' . $image->path);
        $image->delete();
        return back()->with('success', 'Изображение удалено');
    }
}