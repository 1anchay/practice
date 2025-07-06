<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Главная страница
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Аутентификация
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    
    // Маршруты регистрации (если нужно оставить)
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

// Выход (только для аутентифицированных)
Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

// Группа маршрутов для каталога
Route::prefix('catalog')->group(function () {
    Route::get('/', [CatalogController::class, 'index'])->name('catalog');
    Route::get('/filters', [CatalogController::class, 'getFilters'])->name('catalog.filters');
    Route::get('/api/cars', [CatalogController::class, 'getCars'])->name('catalog.api');
});

// Страница модели Lisan (из папки car_model)
Route::get('/zeekr', function () {
    return view('car_model.zeekr');
})->name('zeekr');
Route::get('/byd_yangwang_u8', function () {
    return view('car_model.byd_yangwang_u8');
})->name('byd_yangwang_u8');
// Статические страницы
Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/policy', 'policy')->name('policy');
    Route::get('/contacts', 'contacts')->name('contacts');
});

// Админ-панель (только для админов)
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // Дополнительные админ-маршруты можно добавить здесь
});

// Fallback route для 404 страницы
Route::fallback(function () {
    return view('errors.404', [], 404);
});