<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\PageController;

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

// Группа маршрутов для каталога
Route::prefix('catalog')->group(function () {
    Route::get('/', [CatalogController::class, 'index'])->name('catalog');
    Route::get('/filters', [CatalogController::class, 'getFilters'])->name('catalog.filters');
    Route::get('/api/cars', [CatalogController::class, 'getCars'])->name('catalog.api');
});

// Группа маршрутов для моделей автомобилей
Route::prefix('models')->name('models.')->group(function () {
    Route::get('/zeekr', [CarModelController::class, 'zeekr'])->name('zeekr');
    Route::get('/byd-yangwang-u8', [CarModelController::class, 'bydYangwangU8'])->name('byd_yangwang_u8');
    // Добавьте другие модели по аналогии
});

// Группа маршрутов для страниц
Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/policy', 'policy')->name('policy');
    Route::get('/contacts', 'contacts')->name('contacts');
});

// Авторизация (если потребуется)
Auth::routes();

// Панель администратора (если потребуется)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // Другие админ-маршруты...
});

// Fallback route для 404 страницы
Route::fallback(function () {
    return view('errors.404');
});