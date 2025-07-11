@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Редактировать автомобиль</h1>
    
    <form action="{{ route('cars.update', $car) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        @include('cars._form')
        
        <div class="mt-6 flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Обновить
            </button>
            <a href="{{ route('cars.index') }}" class="ml-2 bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded">
                Отмена
            </a>
        </div>
    </form>
</div>
@endsection