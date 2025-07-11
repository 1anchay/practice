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
    BrandController,
    BodyTypeController,
    DriveTypeController,
    EngineTypeController,
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



Route::prefix('admin')
    ->middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])
    ->name('admin.')
    ->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        
        // Users
        Route::resource('users', UserController::class)->except(['create', 'store']);
        
        // Cars
        Route::resource('cars', CarController::class);
        
        // Brands
        Route::resource('brands', BrandController::class)->except(['show']);
        
        // Body Types
        Route::resource('body-types', BodyTypeController::class)
            ->except(['show'])
            ->parameters(['body-types' => 'bodyType']);
        
        // Drive Types
        Route::resource('drive-types', DriveTypeController::class)
            ->except(['show'])
            ->parameters(['drive-types' => 'driveType']);
        
        // Engine Types
        Route::resource('engine-types', EngineTypeController::class)
            ->except(['show'])
            ->parameters(['engine-types' => 'engineType']);
              
        // Для работы с изображениями
        Route::post('cars/{car}/images', [CarController::class, 'uploadImage'])
            ->name('cars.images.store');
        Route::delete('cars/{car}/images/{image}', [CarController::class, 'deleteImage'])
            ->name('cars.images.destroy');
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