@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6 ml-64">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Админ-панель</h1>
        <div class="text-sm text-gray-500">
            {{ now()->format('d.m.Y H:i') }}
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Users Card -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold mb-2">Пользователи</h3>
                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    {{ $usersCount ?? 0 }} всего
                </span>
            </div>
            <p class="text-gray-600 mb-4">Управление пользователями системы</p>
            <div class="flex space-x-2">
                <a href="{{ route('admin.users.index') }}" class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                    Список пользователей →
                </a>
            </div>
        </div>

        <!-- Posts Card -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold mb-2">Посты</h3>
                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    {{ $postsCount ?? 0 }} всего
                </span>
            </div>
            <p class="text-gray-600 mb-4">Управление статьями и публикациями</p>
            <div class="flex space-x-4">
                <a href="{{ route('admin.posts.index') }}" class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                    Все посты →
                </a>
                <a href="{{ route('admin.posts.create') }}" class="text-green-500 hover:text-green-700 text-sm font-medium">
                    + Новый пост
                </a>
            </div>
        </div>

        <!-- Cars Card -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold mb-2">Автомобили</h3>
                <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    {{ $carsCount ?? 0 }} всего
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

        <!-- Recent Activity Card -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow md:col-span-2 lg:col-span-3">
            <h3 class="text-lg font-semibold mb-4">Последняя активность</h3>
            <div class="space-y-4">
                @forelse($recentActivities as $activity)
                    <div class="flex items-start border-b border-gray-100 pb-3">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium">{{ $activity->description }}</p>
                            <p class="text-xs text-gray-500">{{ $activity->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-sm">Нет последних активностей</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection