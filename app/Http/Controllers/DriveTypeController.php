<?php

namespace App\Http\Controllers;

use App\Models\DriveType;
use Illuminate\Http\Request;

class DriveTypeController extends Controller
{
    public function index()
    {
        return view('drive-types.index', [
            'driveTypes' => DriveType::orderBy('name')->get()
        ]);
    }

    public function create()
    {
        return view('drive-types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:drive_types'
        ]);
        
        DriveType::create($request->only('name'));
        return redirect()->route('drive-types.index')->with('success', 'Тип привода добавлен');
    }

    public function edit(DriveType $driveType)
    {
        return view('drive-types.edit', compact('driveType'));
    }

    public function update(Request $request, DriveType $driveType)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:drive_types,name,'.$driveType->id
        ]);
        
        $driveType->update($request->only('name'));
        return redirect()->route('drive-types.index')->with('success', 'Тип привода обновлён');
    }

    public function destroy(DriveType $driveType)
    {
        $driveType->delete();
        return back()->with('success', 'Тип привода удалён');
    }
}