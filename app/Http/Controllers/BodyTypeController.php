<?php



namespace App\Http\Controllers;

use App\Models\BodyType;
use Illuminate\Http\Request;

class BodyTypeController extends Controller
{
    public function index()
    {
        return view('body-types.index', [
            'bodyTypes' => BodyType::orderBy('name')->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255|unique:body_types']);
        
        BodyType::create($request->only('name'));
        return back()->with('success', 'Тип кузова добавлен');
    }

    public function update(Request $request, BodyType $bodyType)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:body_types,name,'.$bodyType->id
        ]);
        
        $bodyType->update($request->only('name'));
        return back()->with('success', 'Тип кузова обновлён');
    }

    public function destroy(BodyType $bodyType)
    {
        $bodyType->delete();
        return back()->with('success', 'Тип кузова удалён');
    }
}