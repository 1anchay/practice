<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\{
    CatalogController,
    CarModelController,
    PageController
};
use App\Http\Controllers\Auth\{
    LoginController
};
use App\Http\Controllers\Admin\{
    DashboardController,
    UserController,
    PostController,
    SettingsController,
    CarController
};

// Главная
Route::view('/', 'welcome')->name('home');

// Аутентификация
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::post('logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Каталог
Route::prefix('catalog')->name('catalog.')->group(function () {
    Route::get('/', [CatalogController::class, 'index'])->name('index');
    Route::get('/filters', [CatalogController::class, 'getFilters'])->name('filters');
    Route::get('/api/cars', [CatalogController::class, 'getCars'])->name('api');
});

// Модели авто
Route::view('/zeekr', 'car_model.zeekr')->name('zeekr');
Route::view('/byd_yangwang_u8', 'car_model.byd_yangwang_u8')->name('byd_yangwang_u8');

// Статические страницы
Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/policy', 'policy')->name('policy');
    Route::get('/contacts', 'contacts')->name('contacts');
});

// Админ-панель
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
        
        Route::resource('users', UserController::class)
            ->only(['index', 'show', 'edit', 'update', 'destroy']);
            
        Route::resource('posts', PostController::class)
            ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
            
        Route::resource('cars', CarController::class)
            ->except(['show']);
            
        Route::get('settings', [SettingsController::class, 'index'])->name('settings');
        Route::post('settings', [SettingsController::class, 'update'])->name('settings.update');
    });

// Диагностические маршруты
Route::prefix('_debug')->group(function () {
    Route::get('/session', function() {
        try {
            session(['debug_time' => now()]);
            return response()->json([
                'session_id' => session()->getId(),
                'session_data' => session()->all(),
                'user' => auth()->user(),
                'session_status' => 'active'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    });

    Route::get('/db', function() {
        try {
            return response()->json([
                'db_status' => 'connected',
                'session_table' => Schema::hasTable('sessions'),
                'users_table' => Schema::hasTable('users'),
                'users_count' => DB::table('users')->count(),
                'last_user' => DB::table('users')->latest()->first(['id', 'name', 'email', 'is_admin']),
                'sessions_count' => DB::table('sessions')->count()
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    });

    Route::get('/auth', function() {
        return response()->json([
            'authenticated' => auth()->check(),
            'user' => auth()->user(),
            'is_admin' => optional(auth()->user())->is_admin
        ]);
    });
});

// Обработка 404
Route::fallback(fn () => response()->view('errors.404', [], 404));