<?php

namespace App\Http\Controllers;

use App\Models\{Car, Brand, BodyType, EngineType, DriveType};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        return view('cars.index', [
            'cars' => Car::with(['brand', 'images'])->latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('cars.create', [
            'brands' => Brand::orderBy('name')->get(),
            'bodyTypes' => BodyType::orderBy('name')->get(),
            'engineTypes' => EngineType::orderBy('name')->get(),
            'driveTypes' => DriveType::orderBy('name')->get()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:'.(date('Y')+1),
            'price' => 'required|numeric|min:0',
            'body_type_id' => 'required|exists:body_types,id',
            'engine_type_id' => 'required|exists:engine_types,id',
            'drive_type_id' => 'required|exists:drive_types,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $car = Car::create($validated);
        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $car->images()->create(['path' => $path]);
            }
        }
        
        return redirect()->route('cars.index')->with('success', 'Автомобиль добавлен');
    }

    public function edit(Car $car)
    {
        return view('cars.edit', [
            'car' => $car,
            'brands' => Brand::orderBy('name')->get(),
            'bodyTypes' => BodyType::orderBy('name')->get(),
            'engineTypes' => EngineType::orderBy('name')->get(),
            'driveTypes' => DriveType::orderBy('name')->get()
        ]);
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:'.(date('Y')+1),
            'price' => 'required|numeric|min:0',
            'body_type_id' => 'required|exists:body_types,id',
            'engine_type_id' => 'required|exists:engine_types,id',
            'drive_type_id' => 'required|exists:drive_types,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $car->update($validated);
        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $car->images()->create(['path' => $path]);
            }
        }
        
        return redirect()->route('cars.index')->with('success', 'Автомобиль обновлён');
    }

    public function destroy(Car $car)
    {
        foreach ($car->images as $image) {
            Storage::delete('public/' . $image->path);
            $image->delete();
        }
        
        $car->delete();
        return back()->with('success', 'Автомобиль удалён');
    }
}