@auth
    @if(auth()->user()->is_admin)
        <a href="{{ route('admin.dashboard') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
            Админ-панель
        </a>
    @endif
@endauth