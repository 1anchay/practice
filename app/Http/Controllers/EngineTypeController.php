<?php

namespace App\Http\Controllers;

use App\Models\EngineType;
use Illuminate\Http\Request;

class EngineTypeController extends Controller
{
    public function index()
    {
        $engineTypes = EngineType::orderBy('name')->get();
        return view('engine-types.index', compact('engineTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:engine_types'
        ]);
        
        EngineType::create($request->only('name'));
        
        return back()
            ->with('success', 'Тип двигателя успешно добавлен');
    }

    public function update(Request $request, EngineType $engineType)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:engine_types,name,'.$engineType->id
        ]);
        
        $engineType->update($request->only('name'));
        
        return back()
            ->with('success', 'Тип двигателя успешно обновлён');
    }

    public function destroy(EngineType $engineType)
    {
        $engineType->delete();
        
        return back()
            ->with('success', 'Тип двигателя успешно удалён');
    }
}