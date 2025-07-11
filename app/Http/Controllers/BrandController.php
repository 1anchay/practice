<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        return view('brands.index', [
            'brands' => Brand::orderBy('name')->get()
        ]);
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:brands',
            'slug' => 'nullable|string|max:255|unique:brands'
        ]);

        // Генерируем slug автоматически, если он не указан
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
            
            // Проверяем уникальность сгенерированного slug
            $count = Brand::where('slug', $validated['slug'])->count();
            if ($count > 0) {
                $validated['slug'] = $validated['slug'] . '-' . ($count + 1);
            }
        }

        Brand::create($validated);
        return redirect()->route('brands.index')->with('success', 'Бренд добавлен');
    }

    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:brands,name,'.$brand->id,
            'slug' => 'nullable|string|max:255|unique:brands,slug,'.$brand->id
        ]);

        // Если slug пустой, генерируем его из имени
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
            
            // Проверяем уникальность сгенерированного slug
            $count = Brand::where('slug', $validated['slug'])
                         ->where('id', '!=', $brand->id)
                         ->count();
            if ($count > 0) {
                $validated['slug'] = $validated['slug'] . '-' . ($count + 1);
            }
        }

        $brand->update($validated);
        return redirect()->route('brands.index')->with('success', 'Бренд обновлён');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return back()->with('success', 'Бренд удалён');
    }
}