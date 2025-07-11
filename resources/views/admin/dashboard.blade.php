@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6 ml-64">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Админ-панель</h1>
        <div class="text-sm text-gray-500">
            {{ now()->format('d.m.Y H:i') }}
        </div>
    </div>
    
    <!-- Статистика -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <!-- Пользователи -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold mb-2">Пользователи</h3>
                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    {{ $usersCount }} всего
                </span>
            </div>
            <p class="text-gray-600 mb-4">Управление пользователями системы</p>
            <a href="{{ route('admin.users.index') }}" class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                Управление пользователями →
            </a>
        </div>

        <!-- Автомобили -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold mb-2">Автомобили</h3>
                <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    {{ $carsCount }} всего
                </span>
            </div>
            <p class="text-gray-600 mb-4">Управление автомобилями в каталоге</p>
            <div class="flex space-x-4">
                <a href="{{ route('admin.cars.index') }}" class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                    Все автомобили →
                </a>
                <a href="{{ route('admin.cars.create') }}" class="text-green-500 hover:text-green-700 text-sm font-medium">
                    + Добавить авто
                </a>
            </div>
        </div>

        <!-- Бренды -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold mb-2">Бренды</h3>
                <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    {{ $brandsCount }} всего
                </span>
            </div>
            <p class="text-gray-600 mb-4">Управление автомобильными брендами</p>
            <a href="{{ route('admin.brands.index') }}" class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                Управление брендами →
            </a>
        </div>

        <!-- Типы кузова -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold mb-2">Типы кузова</h3>
                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    {{ $bodyTypesCount }} всего
                </span>
            </div>
            <p class="text-gray-600 mb-4">Управление типами кузова автомобилей</p>
            <a href="{{ route('admin.body-types.index') }}" class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                Управление типами кузова →
            </a>
        </div>

        <!-- Типы привода -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold mb-2">Типы привода</h3>
                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    {{ $driveTypesCount }} всего
                </span>
            </div>
            <p class="text-gray-600 mb-4">Управление типами привода автомобилей</p>
            <a href="{{ route('admin.drive-types.index') }}" class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                Управление типами привода →
            </a>
        </div>

        <!-- Типы двигателя -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold mb-2">Типы двигателя</h3>
                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    {{ $engineTypesCount }} всего
                </span>
            </div>
            <p class="text-gray-600 mb-4">Управление типами двигателей</p>
            <a href="{{ route('admin.engine-types.index') }}" class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                Управление типами двигателей →
            </a>
        </div>
    </div>

    <!-- Последние добавленные автомобили -->
    <div class="bg-white p-6 rounded-lg shadow mb-6">
        <h3 class="text-lg font-semibold mb-4">Последние добавленные автомобили</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Модель</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Бренд</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Тип кузова</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Год</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Цена</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($latestCars as $car)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('admin.cars.edit', $car->id) }}" class="text-blue-500 hover:text-blue-700">
                                    {{ $car->model }}
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->brand->name ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->bodyType->name ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $car->year }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ number_format($car->price, 0, ',', ' ') }} ₽</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">Нет добавленных автомобилей</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Последние зарегистрированные пользователи -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-4">Последние зарегистрированные пользователи</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Имя</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Дата регистрации</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Статус</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($latestUsers as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700">
                                    {{ $user->name }}
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->created_at->format('d.m.Y H:i') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $user->isAdmin() ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                                    {{ $user->isAdmin() ? 'Администратор' : 'Пользователь' }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">Нет зарегистрированных пользователей</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection