<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\{
    CatalogController,
    CarModelController,
    PageController,
    DashboardController,
    UserController,
    CarController,
    BrandController,
    BodyTypeController,
    DriveTypeController,
    EngineTypeController
};
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Public Routes (Доступны всем пользователям)
|--------------------------------------------------------------------------
*/

// Главная страница
Route::view('/', 'welcome')->name('home');

// Каталог автомобилей
Route::prefix('catalog')
    ->name('catalog.')
    ->group(function () {
        Route::get('/', [CatalogController::class, 'index'])->name('index');
        Route::get('/filters', [CatalogController::class, 'getFilters'])->name('filters');
        Route::get('/api/cars', [CatalogController::class, 'getCars'])->name('api');
    });

// Страницы моделей автомобилей
Route::view('/zeekr', 'car_model.zeekr')->name('zeekr');
Route::view('/byd_yangwang_u8', 'car_model.byd_yangwang_u8')->name('byd_yangwang_u8');

// Статические страницы
Route::controller(PageController::class)
    ->group(function () {
        Route::get('/about', 'about')->name('about');
        Route::get('/policy', 'policy')->name('policy');
        Route::get('/contacts', 'contacts')->name('contacts');
    });

/*
|--------------------------------------------------------------------------
| Authentication Routes (Аутентификация)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')
    ->group(function () {
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login']);
    });

Route::post('logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Resource Routes (Общедоступные ресурсы)
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Пользователи
Route::prefix('users')
    ->name('users.')
    ->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::put('/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
    });

// Автомобили
Route::prefix('cars')
    ->name('cars.')
    ->group(function () {
        Route::get('/', [CarController::class, 'index'])->name('index');
        Route::get('/create', [CarController::class, 'create'])->name('create');
        Route::post('/', [CarController::class, 'store'])->name('store');
        Route::get('/{car}/edit', [CarController::class, 'edit'])->name('edit');
        Route::put('/{car}', [CarController::class, 'update'])->name('update');
        Route::delete('/{car}', [CarController::class, 'destroy'])->name('destroy');
        
        // Изображения автомобилей
        Route::post('/{car}/images', [CarController::class, 'uploadImage'])->name('images.store');
        Route::delete('/{car}/images/{image}', [CarController::class, 'deleteImage'])->name('images.destroy');
    });

// Бренды
Route::prefix('brands')
    ->name('brands.')
    ->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('index');
        Route::post('/', [BrandController::class, 'store'])->name('store');
        Route::put('/{brand}', [BrandController::class, 'update'])->name('update');
        Route::delete('/{brand}', [BrandController::class, 'destroy'])->name('destroy');
    });

// Типы кузова
Route::prefix('body-types')
    ->name('body-types.')
    ->group(function () {
        Route::get('/', [BodyTypeController::class, 'index'])->name('index');
        Route::post('/', [BodyTypeController::class, 'store'])->name('store');
        Route::put('/{bodyType}', [BodyTypeController::class, 'update'])->name('update');
        Route::delete('/{bodyType}', [BodyTypeController::class, 'destroy'])->name('destroy');
    });

// Типы привода
Route::prefix('drive-types')
    ->name('drive-types.')
    ->group(function () {
        Route::get('/', [DriveTypeController::class, 'index'])->name('index');
        Route::post('/', [DriveTypeController::class, 'store'])->name('store');
        Route::put('/{driveType}', [DriveTypeController::class, 'update'])->name('update');
        Route::delete('/{driveType}', [DriveTypeController::class, 'destroy'])->name('destroy');
    });

// Типы двигателя
Route::prefix('engine-types')
    ->name('engine-types.')
    ->group(function () {
        Route::get('/', [EngineTypeController::class, 'index'])->name('index');
        Route::post('/', [EngineTypeController::class, 'store'])->name('store');
        Route::put('/{engineType}', [EngineTypeController::class, 'update'])->name('update');
        Route::delete('/{engineType}', [EngineTypeController::class, 'destroy'])->name('destroy');
    });

/*
|--------------------------------------------------------------------------
| Debug Routes (Для отладки)
|--------------------------------------------------------------------------
*/
Route::prefix('_debug')
    ->group(function () {
        Route::get('/session', function () {
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

        Route::get('/db', function () {
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

        Route::get('/auth', function () {
            return response()->json([
                'authenticated' => auth()->check(),
                'user' => auth()->user(),
                'is_admin' => optional(auth()->user())->is_admin
            ]);
        });
    });

/*
|--------------------------------------------------------------------------
| Fallback Route (Для несуществующих страниц)
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});