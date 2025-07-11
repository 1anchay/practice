@extends('admin.layouts.app')

@section('title', 'Главная')
@section('header', 'Панель управления')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Welcome Banner -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6 bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="text-2xl font-bold mb-2">Добро пожаловать, {{ auth()->user()->name }}!</h2>
                <p class="opacity-90">Здесь вы можете управлять содержимым сайта и отслеживать активность.</p>
            </div>
            <div class="mt-4 md:mt-0">
                <span class="inline-block bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm font-medium">
                    {{ now()->format('d F Y, H:i') }}
                </span>
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        @foreach([
            [
                'title' => 'Пользователи',
                'count' => $usersCount,
                'icon' => 'users',
                'color' => 'blue',
                'route' => 'admin.users.index',
                'can' => auth()->user()->isAdmin()
            ],
            [
                'title' => 'Автомобили',
                'count' => $carsCount,
                'icon' => 'car',
                'color' => 'purple',
                'route' => 'admin.cars.index',
                'can' => true
            ],
            [
                'title' => 'Бренды',
                'count' => $brandsCount,
                'icon' => 'tag',
                'color' => 'red',
                'route' => 'admin.brands.index',
                'can' => true
            ],
            [
                'title' => 'Типы кузова',
                'count' => $bodyTypesCount,
                'icon' => 'car-side',
                'color' => 'yellow',
                'route' => 'admin.body-types.index',
                'can' => true
            ],
            [
                'title' => 'Типы привода',
                'count' => $driveTypesCount,
                'icon' => 'cogs',
                'color' => 'green',
                'route' => 'admin.drive-types.index',
                'can' => true
            ],
            [
                'title' => 'Типы двигателя',
                'count' => $engineTypesCount,
                'icon' => 'oil-can',
                'color' => 'indigo',
                'route' => 'admin.engine-types.index',
                'can' => true
            ]
        ] as $stat)
            @if($stat['can'])
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-{{ $stat['color'] }}-100 text-{{ $stat['color'] }-600 mr-4">
                                <i class="fas fa-{{ $stat['icon'] }} fa-lg"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">{{ $stat['title'] }}</p>
                                <p class="text-2xl font-semibold text-gray-900">{{ number_format($stat['count'], 0, ',', ' ') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center">
                        <a href="{{ route($stat['route']) }}" class="text-sm font-medium text-{{ $stat['color'] }-600 hover:text-{{ $stat['color'] }-500">
                            Подробнее →
                        </a>
                        @if($stat['route'] !== 'admin.users.index' || auth()->user()->isAdmin())
                            <a href="{{ route(str_replace('.index', '.create', $stat['route'])) }}" 
                               class="text-sm font-medium text-green-600 hover:text-green-500">
                                <i class="fas fa-plus mr-1"></i> Добавить
                            </a>
                        @endif
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Latest Cars -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-900">Последние автомобили</h3>
                <a href="{{ route('admin.cars.create') }}" class="text-sm text-indigo-600 hover:text-indigo-500">
                    <i class="fas fa-plus mr-1"></i> Добавить
                </a>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse($latestCars as $car)
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-12 w-12 rounded-md bg-gray-200 overflow-hidden">
                                @if($car->images->count() > 0)
                                    <img src="{{ Storage::url($car->images->first()->path) }}" alt="{{ $car->model }}" class="h-full w-full object-cover">
                                @else
                                    <div class="h-full w-full bg-gray-300 flex items-center justify-center text-gray-500">
                                        <i class="fas fa-car"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="ml-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <a href="{{ route('admin.cars.edit', $car->id) }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                        {{ $car->brand->name ?? 'Без бренда' }} {{ $car->model }}
                                    </a>
                                    <span class="text-xs font-semibold bg-green-100 text-green-800 px-2 py-1 rounded-full">
                                        {{ number_format($car->price, 0, ',', ' ') }} ₽
                                    </span>
                                </div>
                                <div class="mt-1 text-sm text-gray-500">
                                    <span class="mr-2">{{ $car->year }} г.</span>
                                    <span class="mr-2">{{ $car->bodyType->name ?? '-' }}</span>
                                    <span>{{ $car->engineType->name ?? '-' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="px-6 py-4 text-center text-gray-500">
                        Нет добавленных автомобилей
                    </div>
                @endforelse
            </div>
            <div class="bg-gray-50 px-6 py-3 text-right">
                <a href="{{ route('admin.cars.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                    Все автомобили →
                </a>
            </div>
        </div>

        <!-- Latest Users -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Последние пользователи</h3>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse($latestUsers as $user)
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold">
                                {{ strtoupper(substr($user->name, 0, 1)) }}
                            </div>
                            <div class="ml-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                        {{ $user->name }}
                                    </a>
                                    <span class="text-xs font-semibold {{ $user->isAdmin() ? 'bg-purple-100 text-purple-800' : 'bg-blue-100 text-blue-800' }} px-2 py-1 rounded-full">
                                        {{ $user->isAdmin() ? 'Администратор' : 'Пользователь' }}
                                    </span>
                                </div>
                                <div class="mt-1 text-sm text-gray-500">
                                    {{ $user->email }}
                                </div>
                                <div class="mt-1 text-xs text-gray-400">
                                    Зарегистрирован: {{ $user->created_at->format('d.m.Y H:i') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="px-6 py-4 text-center text-gray-500">
                        Нет зарегистрированных пользователей
                    </div>
                @endforelse
            </div>
            @if(auth()->user()->isAdmin())
                <div class="bg-gray-50 px-6 py-3 text-right">
                    <a href="{{ route('admin.users.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                        Все пользователи →
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection