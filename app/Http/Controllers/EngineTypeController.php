<?php

namespace App\Http\Controllers;

use App\Models\EngineType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EngineTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('engine-types.index', [
            'engineTypes' => EngineType::orderBy('name')->paginate(10) // Добавил пагинацию
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('engine-types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('engine_types')->whereNull('deleted_at') // Учитываем мягкое удаление
            ]
        ]);
        
        EngineType::create($validated);
        
        return redirect()
            ->route('engine-types.index')
            ->with('success', 'Тип двигателя успешно добавлен');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EngineType $engineType)
    {
        return view('engine-types.edit', compact('engineType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EngineType $engineType)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('engine_types')
                    ->ignore($engineType->id)
                    ->whereNull('deleted_at')
            ]
        ]);
        
        $engineType->update($validated);
        
        return redirect()
            ->route('engine-types.index')
            ->with('success', 'Тип двигателя успешно обновлён');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EngineType $engineType)
    {
        try {
            $engineType->delete();
            return back()->with('success', 'Тип двигателя успешно удалён');
        } catch (\Exception $e) {
            return back()->with('error', 'Не удалось удалить тип двигателя');
        }
    }
}