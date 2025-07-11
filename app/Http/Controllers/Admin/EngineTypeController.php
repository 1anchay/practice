<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EngineType;
use Illuminate\Http\Request;

class EngineTypeController extends Controller
{
    public function index()
    {
        $engineTypes = EngineType::orderBy('name')->get();
        return view('admin.engine-types.index', compact('engineTypes'));
    }

    public function create()
    {
        return view('admin.engine-types.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255|unique:engine_types']);
        
        EngineType::create($request->only('name'));
        return redirect()->route('admin.engine-types.index')->with('success', 'Тип двигателя добавлен');
    }

    public function edit(EngineType $engineType)
    {
        return view('admin.engine-types.edit', compact('engineType'));
    }

    public function update(Request $request, EngineType $engineType)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:engine_types,name,'.$engineType->id
        ]);
        
        $engineType->update($request->only('name'));
        return redirect()->route('admin.engine-types.index')->with('success', 'Тип двигателя обновлён');
    }

    public function destroy(EngineType $engineType)
    {
        $engineType->delete();
        return redirect()->route('admin.engine-types.index')->with('success', 'Тип двигателя удалён');
    }
}
