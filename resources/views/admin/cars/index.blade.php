@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Список автомобилей</h1>
        <a href="{{ route('admin.cars.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Добавить автомобиль
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <!-- Заголовки таблицы -->
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Модель</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Бренд</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Цена</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Статус</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Действия</th>
                </tr>
            </thead>
            <!-- Данные -->
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($cars as $car)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $car->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $car->brand->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ number_format($car->price, 0, ',', ' ') }} ₽</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs rounded-full 
                            {{ $car->status === 'in_stock' ? 'bg-green-100 text-green-800' : 
                               ($car->status === 'new' ? 'bg-blue-100 text-blue-800' : 'bg-yellow-100 text-yellow-800') }}">
                            {{ $car->status === 'in_stock' ? 'В наличии' : 
                               ($car->status === 'new' ? 'Новинка' : 'Под заказ') }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('admin.cars.edit', $car) }}" class="text-blue-500 hover:text-blue-700 mr-3">Редактировать</a>
                        <form action="{{ route('admin.cars.destroy', $car) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Удалить автомобиль?')">Удалить</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $cars->links() }}
    </div>
</div>
@endsection