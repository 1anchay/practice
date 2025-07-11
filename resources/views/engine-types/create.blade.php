@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6 ml-64">
    <h1 class="text-2xl font-bold mb-6">Добавить новый тип двигателя</h1>

    <form action="{{ route('admin.engine-types.store') }}" method="POST">
        @csrf
        <div class="bg-white shadow rounded-lg p-6">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Название типа двигателя</label>
                <input type="text" name="name" id="name" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex items-center justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Сохранить
                </button>
            </div>
        </div>
    </form>
</div>
@endsection