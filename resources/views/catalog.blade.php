<!DOCTYPE html>
<html lang="ru">
    @include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог китайских автомобилей | NeoAuto</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        :root {
            --primary: #1a1a1a;
            --secondary: #111827;
            --accent: #dc2626;
            --accent-hover: #b91c1c;
            --cta-color: #f59e0b;
            --cta-hover: #d97706;
            --text: #e5e7eb;
            --text-light: #f9fafb;
            --text-secondary: #9ca3af;
            --border: #374151;
            --card-bg: #1f2937;
            --card-hover: #1e40af;
            --bg-dark: #111827;
            --bg-darker: #0f172a;
        }

        body {
            background-color: var(--bg-darker);
            color: var(--text);
            font-family: 'Inter', sans-serif;
        }

        .chinese-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23dc2626' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .drag-handle {
            cursor: grab;
            touch-action: none;
        }

        .drag-handle:active {
            cursor: grabbing;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .fade-enter-active, .fade-leave-active {
            transition: opacity 0.3s;
        }
        .fade-enter, .fade-leave-to {
            opacity: 0;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Хедер страницы -->
    <header class="chinese-pattern bg-gradient-to-b from-gray-900 to-gray-800 border-b border-red-900/50">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
                        <span class="text-red-500">中国</span> 汽车
                    </h1>
                    <p class="text-gray-300 max-w-2xl">
                        Выберите подходящую модель из актуального ассортимента китайских автомобилей с гарантией, доставкой и тест-драйвом
                    </p>
                </div>
                <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 flex items-center gap-2 shadow-lg shadow-red-900/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                    </svg>
                    Получить консультацию
                </button>
            </div>
        </div>
    </header>

    <!-- Основной контент -->
    <main class="flex-grow container mx-auto px-4 py-8">
        <div x-data="catalog()" x-init="init()" class="flex flex-col lg:flex-row gap-8">
            <!-- Блок фильтров -->
            <aside class="w-full lg:w-80 flex-shrink-0">
                <div class="lg:hidden mb-4">
                    <button @click="mobileFiltersOpen = !mobileFiltersOpen" class="w-full flex justify-between items-center bg-gray-800 hover:bg-gray-700 px-4 py-3 rounded-lg border border-gray-700">
                        <span class="font-medium">Фильтры</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-200" :class="{'rotate-180': mobileFiltersOpen}" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                
                <div x-show="mobileFiltersOpen || !isMobile()" x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 -translate-y-1"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 -translate-y-1"
                     class="space-y-6 bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-lg">
                    <!-- Тип кузова -->
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold text-lg">Тип кузова</h3>
                            <button @click="resetFilter('body_types')" class="text-sm text-red-400 hover:text-red-300">Сбросить</button>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input x-model="filters.body_types" value="1" id="body-type-1" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-red-500 focus:ring-red-500 focus:ring-offset-gray-800">
                                <label for="body-type-1" class="ml-3 text-sm text-gray-300">Внедорожник</label>
                            </div>
                            <div class="flex items-center">
                                <input x-model="filters.body_types" value="2" id="body-type-2" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-red-500 focus:ring-red-500 focus:ring-offset-gray-800">
                                <label for="body-type-2" class="ml-3 text-sm text-gray-300">Кроссовер</label>
                            </div>
                        </div>
                    </div>

                    <!-- Бренд -->
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold text-lg">Бренд</h3>
                            <button @click="resetFilter('brands')" class="text-sm text-red-400 hover:text-red-300">Сбросить</button>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input x-model="filters.brands" value="1" id="brand-1" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-red-500 focus:ring-red-500 focus:ring-offset-gray-800">
                                <label for="brand-1" class="ml-3 text-sm text-gray-300">Zeekr</label>
                            </div>
                            <div class="flex items-center">
                                <input x-model="filters.brands" value="2" id="brand-2" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-red-500 focus:ring-red-500 focus:ring-offset-gray-800">
                                <label for="brand-2" class="ml-3 text-sm text-gray-300">Li Auto</label>
                            </div>
                        </div>
                    </div>

                    <!-- Тип двигателя -->
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold text-lg">Тип двигателя</h3>
                            <button @click="resetFilter('engine_types')" class="text-sm text-red-400 hover:text-red-300">Сбросить</button>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input x-model="filters.engine_types" value="1" id="engine-type-1" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-red-500 focus:ring-red-500 focus:ring-offset-gray-800">
                                <label for="engine-type-1" class="ml-3 text-sm text-gray-300">Электрический</label>
                            </div>
                            <div class="flex items-center">
                                <input x-model="filters.engine_types" value="2" id="engine-type-2" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-red-500 focus:ring-red-500 focus:ring-offset-gray-800">
                                <label for="engine-type-2" class="ml-3 text-sm text-gray-300">Гибридный</label>
                            </div>
                        </div>
                    </div>

                    <!-- Привод -->
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold text-lg">Привод</h3>
                            <button @click="resetFilter('drive_types')" class="text-sm text-red-400 hover:text-red-300">Сбросить</button>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input x-model="filters.drive_types" value="1" id="drive-type-1" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-red-500 focus:ring-red-500 focus:ring-offset-gray-800">
                                <label for="drive-type-1" class="ml-3 text-sm text-gray-300">Полный</label>
                            </div>
                        </div>
                    </div>

                    <!-- Цена -->
                    <div class="space-y-3">
                        <h3 class="font-semibold text-lg">Цена, ₽</h3>
                        <div class="px-2">
                            <div x-data="rangeSlider(minPrice, maxPrice)" x-init="init()" class="space-y-4">
                                <div class="relative h-1 bg-gray-700 rounded-full">
                                    <div class="absolute h-1 bg-red-500 rounded-full" :style="`left: ${minPercent}%; right: ${100 - maxPercent}%`"></div>
                                    <div class="absolute h-4 w-4 bg-red-500 rounded-full -mt-1.5 -ml-2 cursor-pointer drag-handle" 
                                         :style="`left: ${minPercent}%`"
                                         @mousedown="startDrag('min', $event)"></div>
                                    <div class="absolute h-4 w-4 bg-red-500 rounded-full -mt-1.5 -ml-2 cursor-pointer drag-handle" 
                                         :style="`left: ${maxPercent}%`"
                                         @mousedown="startDrag('max', $event)"></div>
                                </div>
                                <div class="flex justify-between items-center text-sm text-gray-300">
                                    <span x-text="formatPrice(minValue)"></span>
                                    <span x-text="formatPrice(maxValue)"></span>
                                </div>
                                <input type="hidden" x-model="minValue" @change="filters.min_price = minValue">
                                <input type="hidden" x-model="maxValue" @change="filters.max_price = maxValue">
                            </div>
                        </div>
                    </div>

                    <!-- Статус -->
                    <div class="space-y-3">
                        <h3 class="font-semibold text-lg">Статус</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input x-model="filters.status" value="new" id="status-new" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-red-500 focus:ring-red-500 focus:ring-offset-gray-800">
                                <label for="status-new" class="ml-3 text-sm text-gray-300">Новинка</label>
                            </div>
                            <div class="flex items-center">
                                <input x-model="filters.status" value="in_stock" id="status-instock" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-red-500 focus:ring-red-500 focus:ring-offset-gray-800">
                                <label for="status-instock" class="ml-3 text-sm text-gray-300">В наличии</label>
                            </div>
                            <div class="flex items-center">
                                <input x-model="filters.status" value="on_order" id="status-order" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-red-500 focus:ring-red-500 focus:ring-offset-gray-800">
                                <label for="status-order" class="ml-3 text-sm text-gray-300">Под заказ</label>
                            </div>
                        </div>
                    </div>

                    <button @click="applyFilters" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg font-medium transition-colors duration-300">
                        Применить фильтры
                    </button>
                </div>
            </aside>

            <!-- Основной каталог -->
            <div class="flex-grow">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                    <div class="text-gray-300">
                        Найдено <span x-text="totalCars" class="font-semibold text-white"></span> автомобилей
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-sm text-gray-400">Сортировка:</span>
                        <select x-model="sortBy" @change="applyFilters" class="bg-gray-800 border border-gray-700 text-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-red-500 focus:border-red-500">
                            <option value="price_asc">По цене (дешевые сначала)</option>
                            <option value="price_desc">По цене (дорогие сначала)</option>
                            <option value="year_desc">По году (новые сначала)</option>
                            <option value="year_asc">По году (старые сначала)</option>
                            <option value="popular">По популярности</option>
                        </select>
                    </div>
                </div>

                <!-- Карточки автомобилей -->
                <template x-if="loading">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="animate-pulse bg-gray-800 rounded-xl h-96"></div>
                        <div class="animate-pulse bg-gray-800 rounded-xl h-96"></div>
                        <div class="animate-pulse bg-gray-800 rounded-xl h-96"></div>
                    </div>
                </template>

                <template x-if="!loading && cars.length === 0">
                    <div class="bg-gray-800 rounded-xl p-8 text-center border border-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-300">Ничего не найдено</h3>
                        <p class="mt-2 text-gray-500">Попробуйте изменить параметры фильтрации</p>
                        <button @click="resetAllFilters" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Сбросить фильтры
                        </button>
                    </div>
                </template>

                <div x-show="!loading && cars.length > 0" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <template x-for="car in cars" :key="car.id">
                        <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-red-500/50 transition-all duration-300 hover:shadow-lg hover:shadow-red-900/10 group">
                            <div class="relative overflow-hidden">
                                <img :src="car.images[0] || 'https://via.placeholder.com/600x400/1f2937/9ca3af?text=' + car.brand.name + ' ' + car.model" :alt="car.brand.name + ' ' + car.model" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 p-4">
                                    <h3 class="text-xl font-bold text-white" x-text="car.brand.name + ' ' + car.model"></h3>
                                    <div class="text-red-400 font-semibold text-lg" x-text="formatPrice(car.price) + ' ₽'"></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="grid grid-cols-2 gap-3 mb-4">
                                    <div class="flex items-center text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                        <span x-text="car.engine_type.name"></span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <span x-text="car.drive_type.name"></span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                        </svg>
                                        <span x-text="car.body_type.name"></span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span x-text="car.year"></span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <a :href="'/cars/' + car.id" class="flex-1 bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded-lg text-sm font-medium text-center transition-colors duration-300">
                                        Подробности
                                    </a>
                                    <button @click="showTestDriveModal(car)" class="flex-1 bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg text-sm font-medium transition-colors duration-300">
                                        试驾
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Пагинация -->
                <template x-if="!loading && totalPages > 1">
                    <div class="flex justify-center mt-8">
                        <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <button @click="prevPage" :disabled="currentPage === 1" :class="{'opacity-50 cursor-not-allowed': currentPage === 1}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-700 bg-gray-800 text-sm font-medium text-gray-400 hover:bg-gray-700">
                                <span class="sr-only">Previous</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            
                            <template x-for="page in visiblePages" :key="page">
                                <button @click="goToPage(page)" :class="{'bg-red-600 text-white': currentPage === page, 'bg-gray-800 text-gray-400 hover:bg-gray-700': currentPage !== page}" class="relative inline-flex items-center px-4 py-2 border border-gray-700 text-sm font-medium">
                                    <span x-text="page"></span>
                                </button>
                            </template>
                            
                            <button @click="nextPage" :disabled="currentPage === totalPages" :class="{'opacity-50 cursor-not-allowed': currentPage === totalPages}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-700 bg-gray-800 text-sm font-medium text-gray-400 hover:bg-gray-700">
                                <span class="sr-only">Next</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </nav>
                    </div>
                </template>
            </div>
        </div>

        <!-- SEO блок -->
        <div class="mt-16 bg-gray-800 rounded-xl p-8 border border-gray-700">
            <h2 class="text-2xl font-bold text-white mb-4">中国汽车 - современный выбор</h2>
            <div class="prose prose-invert max-w-none">
                <p>В нашем каталоге представлены <span class="text-red-400 font-semibold">лучшие китайские автомобили 2023-2024 года</span> от ведущих производителей. Китайский автопром за последние годы совершил настоящий прорыв в качестве, технологиях и дизайне.</p>
                <p>Модели таких брендов как <span class="text-red-400 font-semibold">Zeekr, Li Auto</span> сочетают в себе передовые технологии, богатую комплектацию и привлекательную цену. В линейке представлены как экономичные городские автомобили, так и просторные семейные кроссоверы, мощные внедорожники и высокотехнологичные электромобили.</p>
                <p>Все автомобили проходят предпродажную подготовку и имеют <span class="text-red-400 font-semibold">официальную гарантию производителя</span>. Мы предлагаем удобные условия покупки: кредит, лизинг, trade-in. Для всех моделей доступен тест-драйв в Москве и других городах России.</p>
            </div>
        </div>

        <!-- CTA блок -->
        <div class="mt-8 bg-gradient-to-r from-gray-900 to-red-900/50 rounded-xl p-8 border border-red-900/30">
            <div class="max-w-3xl mx-auto text-center">
                <h3 class="text-2xl font-bold text-white mb-2">不确定选择？</h3>
                <p class="text-gray-300 mb-6">Получите консультацию — мы подберём авто под ваши задачи и бюджет, расскажем о специальных предложениях и условиях покупки</p>
                <button class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-yellow-500 hover:bg-yellow-600 shadow-lg shadow-yellow-900/30 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    Получить персональное предложение
                </button>
            </div>
        </div>

        <!-- Калькулятор комиссии -->
<div class="mt-8 bg-gray-800 rounded-xl p-6 border border-gray-700">
    <h3 class="text-xl font-bold text-white mb-4">Расчет стоимости с комиссией</h3>
    
    <div class="grid md:grid-cols-3 gap-6 mb-6">
        <div>
            <label for="commission" class="block text-sm font-medium text-gray-300 mb-2">Процент комиссии (%)</label>
            <div class="relative">
                <input type="number" id="commission" x-model="commissionRate" min="0" max="50" step="0.5" 
                       class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-red-500 focus:border-red-500 pr-12">
                <span class="absolute right-3 top-2 text-gray-400">%</span>
            </div>
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-300 mb-2">Тип расчета</label>
            <select x-model="commissionType" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-red-500 focus:border-red-500">
                <option value="percent">Процент от цены</option>
                <option value="fixed">Фиксированная сумма</option>
            </select>
        </div>
        
        <div class="flex items-end">
            <button @click="calculateCommission" class="w-full bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg font-medium transition-colors duration-300">
                Рассчитать
            </button>
        </div>
    </div>
    
    <div x-show="showCommissionResults" class="mt-6 space-y-4">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-gray-700">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Модель</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Цена</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Комиссия</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Итоговая цена</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800 divide-y divide-gray-700">
                    <template x-for="(car, index) in commissionCars" :key="car.id">
                        <tr :class="{'bg-gray-900/50': index % 2 === 0}">
                            <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-white" x-text="car.name"></td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-300" x-text="formatPrice(car.price) + ' ₽'"></td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-300" x-text="formatPrice(car.commission) + ' ₽'"></td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm font-medium" :class="{'text-red-400': car.total > car.price, 'text-green-400': car.total <= car.price}" 
                                x-text="formatPrice(car.total) + ' ₽'"></td>
                        </tr>
                    </template>
                </tbody>
                <tfoot class="bg-gray-900 font-semibold">
                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-white">Итого</td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-300" x-text="formatPrice(totalPrice) + ' ₽'"></td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-300" x-text="formatPrice(totalCommission) + ' ₽'"></td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm" :class="{'text-red-400': totalSum > totalPrice, 'text-green-400': totalSum <= totalPrice}" 
                            x-text="formatPrice(totalSum) + ' ₽'"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        <div class="flex flex-col sm:flex-row justify-between gap-4 pt-4">
            <button @click="resetCalculator" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-300">
                Сбросить расчет
            </button>
            <button @click="saveCalculation" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                </svg>
                Сохранить расчет
            </button>
        </div>
    </div>
</div>

        
    </main>

    <script>
       function catalog() {
    const staticCars = [
        {
             id: 1,
    brand: { id: 1, name: 'MAZDA' },
    model: 'MX-5',
    price: 3200000, 
    year: 2023,
    mileage: 0,
    body_type: { id: 3, name: 'Родстер' }, 
    engine_type: { id: 3, name: 'Бензиновый' },
    drive_type: { id: 2, name: 'Задний' }, 
    images: ['/images/mazda_mx-5.jpeg'],
    status: 'available',
        },
        {
            id: 2,
            brand: { id: 1, name: 'Zeekr' },
            model: 'MIX',
            price: 3800000,
            year: 2023,
            mileage: 0,
            body_type: { id: 2, name: 'Кроссовер' },
            engine_type: { id: 1, name: 'Электрический' },
            drive_type: { id: 1, name: 'Полный' },
            images: ['/images/zeekr-mix.jpg'],
            status: 'available'
        },
        {
            id: 3,
            brand: { id: 2, name: 'Li Auto' },
            model: 'L7',
            price: 5200000,
            year: 2023,
            mileage: 0,
            body_type: { id: 1, name: 'Внедорожник' },
            engine_type: { id: 2, name: 'Гибридный' },
            drive_type: { id: 1, name: 'Полный' },
            images: ['/images/Li_Auto_L7.jpg'],
            status: 'available'
        }
    ];
    
    return {
        // Состояние UI
        mobileFiltersOpen: false,
        loading: true,
        testDriveModalOpen: false,
        testDriveSubmitting: false,
        showCommissionResults: false,
        
        // Данные каталога
        cars: [],
        commissionCars: [
            { id: 1, name: 'Zeekr 001', price: 4500000, commission: 0, total: 0 },
            { id: 2, name: 'Zeekr X', price: 3800000, commission: 0, total: 0 },
            { id: 3, name: 'Li Auto L7', price: 5200000, commission: 0, total: 0 },
            { id: 4, name: 'Li Auto L8', price: 5800000, commission: 0, total: 0 },
            { id: 5, name: 'Li Auto L9', price: 6500000, commission: 0, total: 0 }
        ],
        
        // Настройки комиссии
        commissionRate: 5,
        commissionType: 'percent', // 'percent' или 'fixed'
        commissionFixedValue: 100000,
        
        // Итоговые значения
        totalPrice: 0,
        totalCommission: 0,
        totalSum: 0,
        
        // Пагинация
        currentPage: 1,
        perPage: 9,
        totalCars: 0,
        totalPages: 1,
        visiblePages: [],
        
        // Фильтры
        minPrice: 3000000,
        maxPrice: 7000000,
        filters: {
            body_types: [],
            brands: [],
            engine_types: [],
            drive_types: [],
            status: [],
            min_price: 3000000,
            max_price: 7000000,
        },
        sortBy: 'price_asc',
        
        // Формы
        selectedCar: null,
        testDriveForm: {
            name: '',
            phone: '',
            date: ''
        },
        
        // Инициализация
        init() {
            this.applyFilters();
            this.initFiltersFromURL();
            this.calculateTotals(); // Рассчитываем начальные итоги
        },
        
        // Методы для работы с комиссией
        calculateCommission() {
            if (this.commissionType === 'percent') {
                this.commissionCars = this.commissionCars.map(car => {
                    const commission = car.price * this.commissionRate / 100;
                    return {
                        ...car,
                        commission: commission,
                        total: car.price + commission
                    };
                });
            } else {
                // Фиксированная сумма комиссии
                const fixedCommission = parseFloat(this.commissionFixedValue) || 0;
                this.commissionCars = this.commissionCars.map(car => {
                    return {
                        ...car,
                        commission: fixedCommission,
                        total: car.price + fixedCommission
                    };
                });
            }
            
            this.calculateTotals();
            this.showCommissionResults = true;
        },
        
        calculateTotals() {
            this.totalPrice = this.commissionCars.reduce((sum, car) => sum + car.price, 0);
            this.totalCommission = this.commissionCars.reduce((sum, car) => sum + car.commission, 0);
            this.totalSum = this.totalPrice + this.totalCommission;
        },
        
        resetCalculator() {
            this.commissionRate = 5;
            this.commissionType = 'percent';
            this.commissionFixedValue = 100000;
            this.commissionCars = this.commissionCars.map(car => ({
                ...car,
                commission: 0,
                total: car.price
            }));
            this.calculateTotals();
            this.showCommissionResults = false;
        },
        
        saveCalculation() {
            // Здесь можно добавить логику сохранения расчета
            const calculationData = {
                date: new Date().toLocaleString(),
                type: this.commissionType,
                rate: this.commissionType === 'percent' ? this.commissionRate : this.commissionFixedValue,
                total: this.totalSum,
                cars: this.commissionCars.map(car => ({
                    name: car.name,
                    price: car.price,
                    commission: car.commission,
                    total: car.total
                }))
            };
            
            console.log('Сохраненный расчет:', calculationData);
            alert('Расчет успешно сохранен!');
            // В реальном приложении здесь может быть AJAX-запрос к серверу
        },
        
        // Методы фильтрации и сортировки
        applyFilters() {
            this.loading = true;
            this.currentPage = 1;
            this.updateURL();
            
            // Всегда используем статические данные
            this.cars = staticCars.filter(car => this.filterCar(car));
            this.sortCars();
            this.totalCars = this.cars.length;
            this.totalPages = Math.ceil(this.totalCars / this.perPage);
            this.loading = false;
            this.updateVisiblePages();
        },
        
        initFiltersFromURL() {
            const urlParams = new URLSearchParams(window.location.search);
            const filterMappings = {
                'body_types': { type: 'array', target: 'body_types', transform: Number },
                'brands': { type: 'array', target: 'brands', transform: Number },
                'engine_types': { type: 'array', target: 'engine_types', transform: Number },
                'drive_types': { type: 'array', target: 'drive_types', transform: Number },
                'status': { type: 'array', target: 'status' },
                'min_price': { type: 'value', target: 'min_price', transform: parseInt },
                'max_price': { type: 'value', target: 'max_price', transform: parseInt },
                'sort': { type: 'value', target: 'sortBy' }
            };
            
            for (const [param, config] of Object.entries(filterMappings)) {
                if (urlParams.has(param)) {
                    if (config.type === 'array') {
                        const value = urlParams.get(param).split(',');
                        this.filters[config.target] = config.transform 
                            ? value.map(config.transform) 
                            : value;
                    } else {
                        const value = urlParams.get(param);
                        this[config.target] = config.transform 
                            ? config.transform(value) 
                            : value;
                    }
                }
            }
            
            if (urlParams.has('page')) {
                this.currentPage = parseInt(urlParams.get('page'));
            }
        },
        
        updateURL() {
            const urlParams = new URLSearchParams();
            
            // Добавляем фильтры
            if (this.filters.body_types.length > 0) {
                urlParams.set('body_types', this.filters.body_types.join(','));
            }
            if (this.filters.brands.length > 0) {
                urlParams.set('brands', this.filters.brands.join(','));
            }
            if (this.filters.engine_types.length > 0) {
                urlParams.set('engine_types', this.filters.engine_types.join(','));
            }
            if (this.filters.drive_types.length > 0) {
                urlParams.set('drive_types', this.filters.drive_types.join(','));
            }
            if (this.filters.status.length > 0) {
                urlParams.set('status', this.filters.status.join(','));
            }
            if (this.filters.min_price !== this.minPrice) {
                urlParams.set('min_price', this.filters.min_price);
            }
            if (this.filters.max_price !== this.maxPrice) {
                urlParams.set('max_price', this.filters.max_price);
            }
            
            // Добавляем сортировку
            if (this.sortBy !== 'price_asc') {
                urlParams.set('sort', this.sortBy);
            }
            
            // Обновляем URL без перезагрузки страницы
            window.history.pushState({}, '', `${window.location.pathname}?${urlParams.toString()}`);
        },
        
        filterCar(car) {
            // Фильтрация по цене
            if (car.price < this.filters.min_price || car.price > this.filters.max_price) {
                return false;
            }
            
            // Фильтрация по типу кузова
            if (this.filters.body_types.length > 0 && !this.filters.body_types.includes(car.body_type.id)) {
                return false;
            }
            
            // Фильтрация по бренду
            if (this.filters.brands.length > 0 && !this.filters.brands.includes(car.brand.id)) {
                return false;
            }
            
            // Фильтрация по типу двигателя
            if (this.filters.engine_types.length > 0 && !this.filters.engine_types.includes(car.engine_type.id)) {
                return false;
            }
            
            // Фильтрация по типу привода
            if (this.filters.drive_types.length > 0 && !this.filters.drive_types.includes(car.drive_type.id)) {
                return false;
            }
            
            // Фильтрация по статусу
            if (this.filters.status.length > 0) {
                if (this.filters.status.includes('in_stock') && car.status !== 'available') {
                    return false;
                }
            }
            
            return true;
        },
        
        sortCars() {
            if (this.sortBy === 'price_asc') {
                this.cars.sort((a, b) => a.price - b.price);
            } else if (this.sortBy === 'price_desc') {
                this.cars.sort((a, b) => b.price - a.price);
            } else if (this.sortBy === 'year_asc') {
                this.cars.sort((a, b) => a.year - b.year);
            } else if (this.sortBy === 'year_desc') {
                this.cars.sort((a, b) => b.year - a.year);
            } else if (this.sortBy === 'popular') {
                this.cars.sort((a, b) => a.price - b.price);
            }
        },
        
        // Пагинация
        updateVisiblePages() {
            const range = 2;
            let start = Math.max(1, this.currentPage - range);
            let end = Math.min(this.totalPages, this.currentPage + range);
            
            if (this.currentPage - range <= 1) {
                end = Math.min(1 + range * 2, this.totalPages);
            }
            
            if (this.currentPage + range >= this.totalPages) {
                start = Math.max(this.totalPages - range * 2, 1);
            }
            
            this.visiblePages = Array.from(
                { length: end - start + 1 },
                (_, i) => start + i
            );
        },
        
        goToPage(page) {
            if (page < 1 || page > this.totalPages || page === this.currentPage) return;
            this.currentPage = page;
            this.applyFilters();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },
        
        prevPage() {
            this.goToPage(this.currentPage - 1);
        },
        
        nextPage() {
            this.goToPage(this.currentPage + 1);
        },
        
        // Вспомогательные методы
        resetFilter(filterType) {
            this.filters[filterType] = [];
            this.applyFilters();
        },
        
        resetAllFilters() {
            this.filters = {
                body_types: [],
                brands: [],
                engine_types: [],
                drive_types: [],
                status: [],
                min_price: this.minPrice,
                max_price: this.maxPrice,
            };
            this.sortBy = 'price_asc';
            this.applyFilters();
        },
        
        formatPrice(price) {
            return new Intl.NumberFormat('ru-RU').format(price);
        },
        
        isMobile() {
            return window.innerWidth < 1024;
        },
        
        // Методы для тест-драйва
        showTestDriveModal(car) {
            this.selectedCar = car;
            this.testDriveForm = {
                name: '',
                phone: '',
                date: ''
            };
            this.testDriveModalOpen = true;
        },
        
        submitTestDriveRequest() {
            this.testDriveSubmitting = true;
            
            // Здесь будет AJAX-запрос на сервер
            setTimeout(() => {
                this.testDriveSubmitting = false;
                this.testDriveModalOpen = false;
                alert('Ваша заявка на тест-драйв успешно отправлена! Мы свяжемся с вами для подтверждения.');
            }, 1500);
        }
    };
}
        
        function rangeSlider(min, max) {
            return {
                minValue: min,
                maxValue: max,
                minPercent: 0,
                maxPercent: 100,
                dragging: null,
                minLimit: min,
                maxLimit: max,
                
                init() {
                    this.minPercent = ((this.minValue - this.minLimit) / (this.maxLimit - this.minLimit)) * 100;
                    this.maxPercent = ((this.maxValue - this.minLimit) / (this.maxLimit - this.minLimit)) * 100;
                    
                    window.addEventListener('mousemove', this.handleDrag.bind(this));
                    window.addEventListener('mouseup', this.stopDrag.bind(this));
                    window.addEventListener('touchmove', this.handleDrag.bind(this));
                    window.addEventListener('touchend', this.stopDrag.bind(this));
                },
                
                startDrag(type, e) {
                    this.dragging = type;
                    e.preventDefault();
                },
                
                handleDrag(e) {
                    if (!this.dragging) return;
                    
                    const slider = this.$el.querySelector('.relative');
                    const rect = slider.getBoundingClientRect();
                    const clientX = e.clientX || (e.touches && e.touches[0].clientX);
                    let percent = ((clientX - rect.left) / rect.width) * 100;
                    percent = Math.max(0, Math.min(100, percent));
                    
                    if (this.dragging === 'min') {
                        this.minPercent = Math.min(percent, this.maxPercent - 1);
                        this.minValue = Math.round(this.minLimit + (this.maxLimit - this.minLimit) * this.minPercent / 100);
                    } else {
                        this.maxPercent = Math.max(percent, this.minPercent + 1);
                        this.maxValue = Math.round(this.minLimit + (this.maxLimit - this.minLimit) * this.maxPercent / 100);
                    }
                },
                
                stopDrag() {
                    this.dragging = null;
                },
                
                formatPrice(price) {
                    return new Intl.NumberFormat('ru-RU').format(price);
                }
            };
        }
    </script>
</body>
@include('footer')
</html>