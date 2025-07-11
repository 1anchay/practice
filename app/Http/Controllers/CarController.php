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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price' => 'required|numeric',
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
        
        return back()->with('success', 'Автомобиль добавлен');
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $car->update($validated);
        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $car->images()->create(['path' => $path]);
            }
        }
        
        return back()->with('success', 'Автомобиль обновлён');
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