<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{
    Car,
    Brand,
    BodyType,
    EngineType,
    DriveType,
    CarImage
};
use App\Http\Requests\{
    StoreCarRequest,
    UpdateCarRequest
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with(['brand', 'bodyType', 'engineType', 'driveType'])
                 ->latest()
                 ->paginate(10);
        
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        $brands = Brand::orderBy('name')->get();
        $bodyTypes = BodyType::orderBy('name')->get();
        $engineTypes = EngineType::orderBy('name')->get();
        $driveTypes = DriveType::orderBy('name')->get();
        
        return view('admin.cars.create', compact(
            'brands', 
            'bodyTypes', 
            'engineTypes', 
            'driveTypes'
        ));
    }

    public function store(StoreCarRequest $request)
    {
        $validated = $request->validated();
        $car = Car::create($validated);
        
        // Обработка изображений
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $car->images()->create(['path' => $path]);
            }
        }
        
        return redirect()
            ->route('admin.cars.index')
            ->with('success', 'Автомобиль успешно добавлен');
    }

    public function edit(Car $car)
    {
        $brands = Brand::orderBy('name')->get();
        $bodyTypes = BodyType::orderBy('name')->get();
        $engineTypes = EngineType::orderBy('name')->get();
        $driveTypes = DriveType::orderBy('name')->get();
        
        return view('admin.cars.edit', compact(
            'car',
            'brands',
            'bodyTypes',
            'engineTypes',
            'driveTypes'
        ));
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->update($request->validated());
        
        return redirect()
            ->route('admin.cars.index')
            ->with('success', 'Данные автомобиля обновлены');
    }

    public function destroy(Car $car)
    {
        // Удаляем связанные изображения
        foreach ($car->images as $image) {
            Storage::delete('public/' . $image->path);
            $image->delete();
        }
        
        $car->delete();
        
        return redirect()
            ->route('admin.cars.index')
            ->with('success', 'Автомобиль удален');
    }
    
    public function uploadImage(Request $request, Car $car)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
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