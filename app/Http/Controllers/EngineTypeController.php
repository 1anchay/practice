<?php

namespace App\Http\Controllers;

use App\Models\EngineType;
use Illuminate\Http\Request;

class EngineTypeController extends Controller
{
    public function index()
    {
        return view('engine-types.index', [
            'engineTypes' => EngineType::orderBy('name')->get()
        ]);
    }

    public function create()
    {
        return view('engine-types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:engine_types'
        ]);
        
        EngineType::create($request->only('name'));
        return redirect()->route('engine-types.index')->with('success', 'Тип двигателя добавлен');
    }

    public function edit(EngineType $engineType)
    {
        return view('engine-types.edit', compact('engineType'));
    }

    public function update(Request $request, EngineType $engineType)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:engine_types,name,'.$engineType->id
        ]);
        
        $engineType->update($request->only('name'));
        return redirect()->route('engine-types.index')->with('success', 'Тип двигателя обновлён');
    }

    public function destroy(EngineType $engineType)
    {
        $engineType->delete();
        return back()->with('success', 'Тип двигателя удалён');
    }
}