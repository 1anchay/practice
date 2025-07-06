@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Добавить новый автомобиль</h1>
    
    <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        @include('admin.cars._form')
        
        <div class="mt-6">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Сохранить
            </button>
            <a href="{{ route('admin.cars.index') }}" class="ml-2 text-gray-500 hover:text-gray-700">
                Отмена
            </a>
        </div>
    </form>
</div>
@endsection