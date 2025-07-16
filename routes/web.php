<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\{
    CatalogController,
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
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome')->name('home');

// Каталог
Route::prefix('catalog')->name('catalog.')->group(function () {
    Route::get('/', [CatalogController::class, 'index'])->name('index');
    Route::get('/filters', [CatalogController::class, 'getFilters'])->name('filters');
    Route::get('/api/cars', [CatalogController::class, 'getCars'])->name('api');
});

// Страницы моделей
Route::view('/zeekr', 'car_model.zeekr')->name('zeekr');
Route::view('/byd_yangwang_u8', 'car_model.byd_yangwang_u8')->name('byd_yangwang_u8');

// Статические страницы
Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/policy', 'policy')->name('policy');
    Route::get('/agreement', 'agreement')->name('agreement');
    Route::get('/contacts', 'contacts')->name('contacts');
    Route::get('/tradein', 'tradein')->name('tradein');
});

// Аутентификация
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::post('logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Пользователи (разрешаем все методы)
Route::resource('users', UserController::class);

// Автомобили
Route::resource('cars', CarController::class);

// Бренды
Route::resource('brands', BrandController::class);

// Типы кузова
Route::resource('body-types', BodyTypeController::class)
    ->parameters(['body-types' => 'bodyType']);

// Типы привода
Route::resource('drive-types', DriveTypeController::class)
    ->parameters(['drive-types' => 'driveType']);

// Типы двигателя
Route::resource('engine-types', EngineTypeController::class)
    ->parameters(['engine-types' => 'engineType']);

// Изображения автомобилей
Route::post('cars/{car}/images', [CarController::class, 'uploadImage'])
    ->name('cars.images.store');
Route::delete('cars/{car}/images/{image}', [CarController::class, 'deleteImage'])
    ->name('cars.images.destroy');
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