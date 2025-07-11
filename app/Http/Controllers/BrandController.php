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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:brands',
            'slug' => 'nullable|string|max:255|unique:brands'
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        Brand::create($validated);
        return back()->with('success', 'Бренд добавлен');
    }

    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:brands,name,'.$brand->id,
            'slug' => 'nullable|string|max:255|unique:brands,slug,'.$brand->id
        ]);

        $brand->update($validated);
        return back()->with('success', 'Бренд обновлён');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return back()->with('success', 'Бренд удалён');
    }
}