@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Админ-панель</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-2">Управление автомобилями</h3>
            <a href="{{ route('admin.cars.index') }}" class="text-blue-500 hover:text-blue-700">
                Перейти к списку →
            </a>
        </div>
        <!-- Другие блоки... -->
    </div>
</div>
@endsection