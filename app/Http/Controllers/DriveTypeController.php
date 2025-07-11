<?php

namespace App\Http\Controllers;

use App\Models\DriveType;
use Illuminate\Http\Request;

class DriveTypeController extends Controller
{
    public function index()
    {
        $driveTypes = DriveType::orderBy('name')->get();
        return view('drive-types.index', compact('driveTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:drive_types'
        ]);
        
        DriveType::create($request->only('name'));
        
        return back()
            ->with('success', 'Тип привода успешно добавлен');
    }

    public function update(Request $request, DriveType $driveType)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:drive_types,name,'.$driveType->id
        ]);
        
        $driveType->update($request->only('name'));
        
        return back()
            ->with('success', 'Тип привода успешно обновлён');
    }

    public function destroy(DriveType $driveType)
    {
        $driveType->delete();
        
        return back()
            ->with('success', 'Тип привода успешно удалён');
    }
}