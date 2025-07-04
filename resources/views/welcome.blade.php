<!DOCTYPE html>
<html lang="ru">
@include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAX - Премиальные китайские автомобили</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        .clip-path-hero {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
        .clip-path-section {
            clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%);
        }
        .bg-gradient-radial {
            background: radial-gradient(circle at center, rgba(251, 113, 133, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
        }
        
        /* Стили для модального окна */
        .car-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8);
            z-index: 1000;
            overflow-y: auto;
        }
        .modal-content {
            background: white;
            margin: 5% auto;
            width: 80%;
            max-width: 900px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 30px rgba(0,0,0,0.3);
        }
        .modal-header {
            padding: 20px;
            background: linear-gradient(to right, #3b82f6, #8b5cf6);
            color: white;
            position: relative;
        }
        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
        }
        .modal-body {
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .car-gallery {
            display: flex;
            flex-direction: column;
        }
        .main-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .thumbnails {
            display: flex;
            gap: 10px;
        }
        .thumbnail {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            cursor: pointer;
            border: 2px solid transparent;
        }
        .thumbnail.active {
            border-color: #3b82f6;
        }
        .car-specs h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #1f2937;
        }
        .price {
            font-size: 28px;
            font-weight: bold;
            color: #3b82f6;
            margin-bottom: 15px;
        }
        .specs-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 20px;
        }
        .spec-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .spec-icon {
            color: #3b82f6;
        }
        .description {
            margin-bottom: 20px;
            color: #4b5563;
        }
        .modal-footer {
            padding: 20px;
            background: #f9fafb;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        .btn-primary {
            background: linear-gradient(to right, #3b82f6, #8b5cf6);
            color: white;
            border: none;
        }
        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        .btn-secondary {
            background: white;
            border: 1px solid #d1d5db;
            color: #4b5563;
        }
        .btn-secondary:hover {
            background: #f3f4f6;
        }
        
        @media (max-width: 768px) {
            .modal-body {
                grid-template-columns: 1fr;
            }
            .modal-content {
                width: 95%;
                margin: 10px auto;
            }
        }
    </style>
</head>
<body class="font-inter antialiased text-gray-900">
    <!-- Hero Section -->
    <section class="relative clip-path-hero bg-gray-900 h-screen flex items-center justify-center overflow-hidden">
        <!-- Background elements -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" 
                 alt="Luxury car" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/70 to-transparent"></div>
        </div>
        
        <!-- Floating car image -->
        <img src="https://www.freepnglogos.com/uploads/tesla-car-logo-png-28.png" 
             alt="Floating car" 
             class="absolute right-10 bottom-1/4 w-1/3 max-w-xl float-animation opacity-90 transform -rotate-12">
        
        <!-- Vector shapes -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-radial"></div>
            <div class="absolute top-1/2 left-1/4 w-64 h-64 rounded-full bg-pink-600 opacity-20 mix-blend-overlay filter blur-3xl"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 rounded-full bg-indigo-600 opacity-15 mix-blend-overlay filter blur-3xl"></div>
        </div>
        
        <!-- Hero content -->
        <div class="relative z-10 px-4 sm:px-6 lg:px-8 text-center max-w-4xl">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-indigo-500">EMAX</span> — 
                <span class="block sm:inline">Премиальные автомобили</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-10 max-w-3xl mx-auto">
                Откройте для себя элитные китайские автомобили нового поколения. Идеальное сочетание технологий, комфорта и стиля.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#models" class="px-8 py-4 bg-gradient-to-r from-pink-500 to-indigo-600 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 hover:from-pink-600 hover:to-indigo-700">
                    Каталог моделей
                </a>
                <a href="#testimonials" class="px-8 py-4 bg-white/10 text-white font-semibold rounded-full border border-white/20 backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
                    Отзывы клиентов
                </a>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10">
            <div class="animate-bounce w-8 h-14 rounded-full border-2 border-white/50 flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2"></div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute -top-32 -left-32 w-64 h-64 rounded-full bg-pink-100 opacity-30"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-indigo-100 opacity-30"></div>
        
        <div class="container mx-auto px-6 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Наши бренды</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-indigo-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                <!-- Brand 1 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-pink-500/20 transition-all duration-300"></div>
                    <img src="images/geely.png" alt="Geely" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">Geely</h3>
                </div>
                
                <!-- Brand 2 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-indigo-500/20 transition-all duration-300"></div>
                    <img src="images/changan.jpg" alt="Changan" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">Changan</h3>
                </div>
                
                <!-- Brand 3 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-pink-500/20 transition-all duration-300"></div>
                    <img src="images/chery.png" alt="Chery" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">Chery</h3>
                </div>
                
                <!-- Brand 4 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-indigo-500/20 transition-all duration-300"></div>
                    <img src="images/greatwall.png" alt="Great Wall" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">Great Wall</h3>
                </div>
                
                <!-- Brand 5 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-pink-500/20 transition-all duration-300"></div>
                    <img src="https://www.carlogos.org/logo/SAIC-Motor-logo-1920x1080.png" alt="SAIC" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">SAIC</h3>
                </div>
                
                <!-- Brand 6 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-indigo-500/20 transition-all duration-300"></div>
                    <img src="images/faw.jpg" alt="FAW" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">FAW</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cars Section -->
    <section id="models" class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-white via-transparent to-transparent opacity-50"></div>
        <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-indigo-100 opacity-20"></div>
        
        <div class="container mx-auto px-6 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Популярные модели</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-indigo-600 mx-auto"></div>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Откройте для себя наши самые востребованные модели премиум-класса
                </p>
            </div>
            
            <!-- Cars grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Zeekr 7X 2025 -->
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-64">
                        <img src="images/zeekr7x.jpg" alt="Zeekr 7X 2025" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-pink-500 text-white text-xs font-semibold rounded-full">НОВИНКА 2025</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Zeekr 7X</h3>
                                <p class="text-gray-600">Электрокроссовер</p>
                            </div>
                            <div class="text-right">
                                <p class="text-xl font-bold text-pink-600">4 200 000 ₽</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">544 л.с.</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">0-100 за 3.8с</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">615 км запас</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <button class="text-pink-600 font-medium hover:text-pink-700 flex items-center view-details" data-car="zeekr-7x">
                                Подробнее
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                            <button class="p-2 rounded-full bg-gray-100 text-gray-700 hover:bg-pink-100 hover:text-pink-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- BYD Yangwang U8 -->
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-64">
                        <img src="images/BYDYangwangU8.jpg" alt="BYD Yangwang U8" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-indigo-500 text-white text-xs font-semibold rounded-full">LUXURY</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">BYD Yangwang U8</h3>
                                <p class="text-gray-600">Гибридный внедорожник</p>
                            </div>
                            <div class="text-right">
                                <p class="text-xl font-bold text-indigo-600">15 990 000 ₽</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">1184 л.с.</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">0-100 за 3.6с</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">Плавающий</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <button class="text-indigo-600 font-medium hover:text-indigo-700 flex items-center view-details" data-car="byd-yangwang-u8">
                                Подробнее
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                            <button class="p-2 rounded-full bg-gray-100 text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Changan UNI-K -->
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-64">
                        <img src="images/ChanganUNI-K.jpg" alt="Changan UNI-K" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-pink-500 text-white text-xs font-semibold rounded-full">ХИТ ПРОДАЖ</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Changan UNI-K</h3>
                                <p class="text-gray-600">Флагманский кроссовер</p>
                            </div>
                            <div class="text-right">
                                <span class="text-sm text-gray-500 line-through">2 850 000 ₽</span>
                                <p class="text-xl font-bold text-pink-600">2 650 000 ₽</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">2.0L Turbo</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">233 л.с.</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">Полный привод</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <button class="text-pink-600 font-medium hover:text-pink-700 flex items-center view-details" data-car="changan-uni-k">
                                Подробнее
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                            <button class="p-2 rounded-full bg-gray-100 text-gray-700 hover:bg-pink-100 hover:text-pink-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-gradient-to-r from-pink-500 to-indigo-600 shadow-sm hover:from-pink-600 hover:to-indigo-700 transition-colors">
                    Показать все модели
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Модальные окна для автомобилей -->
    <!-- Zeekr 7X -->
    <div id="zeekr-7x-modal" class="car-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Zeekr 7X 2025</h2>
                <span class="close-modal">&times;</span>
            </div>
            <div class="modal-body">
                <div class="car-gallery">
                    <img src="https://cdn.motor1.com/images/mgl/6ZZv2O/s1/zeekr-7x.webp" alt="Zeekr 7X" class="main-image">
                    <div class="thumbnails">
                        <img src="https://cdn.motor1.com/images/mgl/6ZZv2O/s1/zeekr-7x.webp" alt="Zeekr 7X" class="thumbnail active">
                        <img src="https://cdn.motor1.com/images/mgl/6ZZv2O/s3/zeekr-7x-interior.webp" alt="Zeekr 7X Interior" class="thumbnail">
                        <img src="https://cdn.motor1.com/images/mgl/6ZZv2O/s2/zeekr-7x-rear.webp" alt="Zeekr 7X Rear" class="thumbnail">
                    </div>
                </div>
                <div class="car-specs">
                    <h3>Zeekr 7X 2025</h3>
                    <div class="price">4 200 000 ₽</div>
                    <div class="specs-grid">
                        <div class="spec-item">
                            <i class="fas fa-bolt spec-icon"></i>
                            <span>544 л.с.</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-tachometer-alt spec-icon"></i>
                            <span>0-100 км/ч за 3.8с</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-road spec-icon"></i>
                            <span>615 км запас хода</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-car spec-icon"></i>
                            <span>Полный привод</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-battery-three-quarters spec-icon"></i>
                            <span>100 кВт·ч батарея</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-users spec-icon"></i>
                            <span>5 мест</span>
                        </div>
                    </div>
                    <div class="description">
                        <p>Zeekr 7X - это флагманский электрический кроссовер от премиального подразделения Geely. Модель 2025 года получила обновлённый дизайн, увеличенный запас хода и улучшенную производительность.</p>
                        <p>Автомобиль оснащён инновационной платформой SEA-M с 800-вольтовой архитектурой, что позволяет заряжать батарею от 10% до 80% всего за 15 минут.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <a href="{{ route('zeekr') }}" class="btn btn-secondary">Посмотреть модель</a>
                <button class="btn btn-primary">Записаться на тест-драйв</button>
            </div>
        </div>
    </div>

    <!-- BYD Yangwang U8 -->
    <div id="byd-yangwang-u8-modal" class="car-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>BYD Yangwang U8</h2>
                <span class="close-modal">&times;</span>
            </div>
            <div class="modal-body">
                <div class="car-gallery">
                    <img src="https://cdn.motor1.com/images/mgl/4MqAe/s1/byd-yangwang-u8.webp" alt="BYD Yangwang U8" class="main-image">
                    <div class="thumbnails">
                        <img src="https://cdn.motor1.com/images/mgl/4MqAe/s1/byd-yangwang-u8.webp" alt="BYD Yangwang U8" class="thumbnail active">
                        <img src="https://cdn.motor1.com/images/mgl/4MqAe/s3/byd-yangwang-u8-interior.webp" alt="BYD Yangwang U8 Interior" class="thumbnail">
                        <img src="https://cdn.motor1.com/images/mgl/4MqAe/s2/byd-yangwang-u8-rear.webp" alt="BYD Yangwang U8 Rear" class="thumbnail">
                    </div>
                </div>
                <div class="car-specs">
                    <h3>BYD Yangwang U8</h3>
                    <div class="price">15 990 000 ₽</div>
                    <div class="specs-grid">
                        <div class="spec-item">
                            <i class="fas fa-bolt spec-icon"></i>
                            <span>1184 л.с.</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-tachometer-alt spec-icon"></i>
                            <span>0-100 км/ч за 3.6с</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-water spec-icon"></i>
                            <span>Плавающий</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-car spec-icon"></i>
                            <span>Полный привод</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-gas-pump spec-icon"></i>
                            <span>Гибридная силовая установка</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-users spec-icon"></i>
                            <span>5 мест</span>
                        </div>
                    </div>
                    <div class="description">
                        <p>BYD Yangwang U8 - это роскошный внедорожник с уникальной способностью передвигаться по воде. Модель сочетает в себе передовые технологии и непревзойдённый комфорт.</p>
                        <p>Автомобиль оснащён системой "танкового разворота", которая позволяет вращаться на месте, и гидроизолированным салоном для передвижения по воде.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
               <a href="{{ route('byd_yangwang_u8') }}" class="btn btn-secondary">Посмотреть модель</a>
                <button class="btn btn-primary">Записаться на тест-драйв</button>
            </div>
        </div>
    </div>

    <!-- Changan UNI-K -->
    <div id="changan-uni-k-modal" class="car-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Changan UNI-K</h2>
                <span class="close-modal">&times;</span>
            </div>
            <div class="modal-body">
                <div class="car-gallery">
                    <img src="https://cdn.motor1.com/images/mgl/6ZZv2O/s1/zeekr-7x.webp" alt="Changan UNI-K" class="main-image">
                    <div class="thumbnails">
                        <img src="https://cdn.motor1.com/images/mgl/6ZZv2O/s1/zeekr-7x.webp" alt="Changan UNI-K" class="thumbnail active">
                        <img src="https://cdn.motor1.com/images/mgl/6ZZv2O/s3/zeekr-7x-interior.webp" alt="Changan UNI-K Interior" class="thumbnail">
                        <img src="https://cdn.motor1.com/images/mgl/6ZZv2O/s2/zeekr-7x-rear.webp" alt="Changan UNI-K Rear" class="thumbnail">
                    </div>
                </div>
                <div class="car-specs">
                    <h3>Changan UNI-K</h3>
                    <div class="price">2 650 000 ₽</div>
                    <div class="specs-grid">
                        <div class="spec-item">
                            <i class="fas fa-gas-pump spec-icon"></i>
                            <span>2.0L Turbo, 233 л.с.</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-tachometer-alt spec-icon"></i>
                            <span>8-ступенчатый автомат</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-car spec-icon"></i>
                            <span>Полный привод</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-users spec-icon"></i>
                            <span>5 мест</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-ruler-combined spec-icon"></i>
                            <span>Длина 4865 мм</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-shield-alt spec-icon"></i>
                            <span>5 звезд безопасности</span>
                        </div>
                    </div>
                    <div class="description">
                        <p>Changan UNI-K - это флагманский кроссовер китайского автопроизводителя, сочетающий в себе динамичный дизайн, просторный салон и передовые технологии.</p>
                        <p>Модель оснащена цифровой приборной панелью с 3D-эффектом, системой голосового управления и полуавтономным вождением уровня 2+.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary">Заказать звонок</button>
                <button class="btn btn-primary">Записаться на тест-драйв</button>
            </div>
        </div>
    </div>

    <script>
        // Обработка модальных окон
        document.addEventListener('DOMContentLoaded', function() {
            // Открытие модального окна
            document.querySelectorAll('.view-details').forEach(button => {
                button.addEventListener('click', function() {
                    const carId = this.getAttribute('data-car');
                    const modal = document.getElementById(`${carId}-modal`);
                    modal.style.display = 'block';
                    document.body.style.overflow = 'hidden';
                });
            });
            
            // Закрытие модального окна
            document.querySelectorAll('.close-modal').forEach(button => {
                button.addEventListener('click', function() {
                    const modal = this.closest('.car-modal');
                    modal.style.display = 'none';
                    document.body.style.overflow = '';
                });
            });
            
            // Закрытие при клике вне модального окна
            window.addEventListener('click', function(event) {
                if (event.target.classList.contains('car-modal')) {
                    event.target.style.display = 'none';
                    document.body.style.overflow = '';
                }
            });
            
            // Переключение изображений в галерее
            document.querySelectorAll('.thumbnail').forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    const mainImage = this.closest('.car-gallery').querySelector('.main-image');
                    const thumbnails = this.closest('.thumbnails').querySelectorAll('.thumbnail');
                    
                    thumbnails.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    mainImage.src = this.src;
                });
            });
        });
    </script>
</body>
<section class="cta-section" id="cta-section">
    <div class="cta-container">
        <!-- Текстовый контент -->
        <div class="cta-content">
            <h2 class="cta-title">Испытай будущее за рулём уже сегодня!</h2>
            <p class="cta-text">Запишитесь на <strong>бесплатный тест-драйв</strong> понравившейся модели или получите персональное предложение от нашего менеджера</p>
            
            <div class="cta-buttons">
                <a href="#test-drive-form" class="cta-button cta-button-primary" data-modal="test-drive">
                    <svg class="cta-icon" viewBox="0 0 24 24" width="20" height="20">
                        <path fill="currentColor" d="M5,11L6.5,6.5H17.5L19,11M17.5,16A1.5,1.5 0 0,1 16,14.5A1.5,1.5 0 0,1 17.5,13A1.5,1.5 0 0,1 19,14.5A1.5,1.5 0 0,1 17.5,16M6.5,16A1.5,1.5 0 0,1 5,14.5A1.5,1.5 0 0,1 6.5,13A1.5,1.5 0 0,1 8,14.5A1.5,1.5 0 0,1 6.5,16M18.92,6C18.72,5.42 18.16,5 17.5,5H6.5C5.84,5 5.28,5.42 5.08,6L3,12V20A1,1 0 0,0 4,21H5A1,1 0 0,0 6,20V19H18V20A1,1 0 0,0 19,21H20A1,1 0 0,0 21,20V12L18.92,6Z"/>
                    </svg>
                    Записаться на тест-драйв
                </a>
                
                <a href="#consultation" class="cta-button cta-button-secondary" data-modal="consultation">
                    <svg class="cta-icon" viewBox="0 0 24 24" width="20" height="20">
                        <path fill="currentColor" d="M20,2H4A2,2 0 0,0 2,4V22L6,18H20A2,2 0 0,0 22,16V4A2,2 0 0,0 20,2M6,9H18V11H6M14,14H6V12H14M18,8H6V6H18"/>
                    </svg>
                    Получить консультацию
                </a>
            </div>
        </div>
        
        <!-- Контейнер для 3D модели автомобиля -->
        <div class="cta-3d-container" id="cta-3d-container">
            <!-- Model-viewer для 3D модели -->
            <model-viewer 
                src="models/byd_fast.glb"
                alt="Загрузка модели"
                ar
                ar-modes="webxr scene-viewer quick-look"
                environment-image="neutral"
                auto-rotate
                camera-controls
                style="width: 100%; height: 100%;"
                id="car-model-viewer">
                <div class="placeholder-3d" slot="poster">
                    <svg class="car-illustration" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
                        <!-- Фон города -->
                        <rect x="0" y="250" width="600" height="150" fill="#1a2a3a"/>
                        <!-- Здания -->
                        <rect x="50" y="150" width="40" height="100" fill="#2d3e50"/>
                        <rect x="120" y="100" width="60" height="150" fill="#34495e"/>
                        <rect x="220" y="180" width="50" height="70" fill="#2d3e50"/>
                        <rect x="300" y="120" width="70" height="130" fill="#34495e"/>
                        <rect x="400" y="160" width="40" height="90" fill="#2d3e50"/>
                        <rect x="470" y="200" width="60" height="50" fill="#34495e"/>
                    </svg>
                    <div class="3d-placeholder-text">Загрузка 3D модели...</div>
                </div>
            </model-viewer>
        </div>
    </div>
    
    <!-- Разделительная линия -->
    <div class="section-divider"></div>
</section>

<!-- Добавляем скрипт model-viewer -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

<style>
    /* Существующие стили остаются без изменений */
    :root {
        --cta-primary: #00ff88;
        --cta-primary-hover: #00e676;
        --cta-secondary: #00a8ff;
        --cta-secondary-hover: #0095e0;
        --cta-text: #ffffff;
        --cta-dark: #1a1a1a;
    }
    
    /* Основные стили секции */
    .cta-section {
        position: relative;
        padding: 80px 0 60px;
        background: linear-gradient(135deg, #1a2a3a 0%, #0f172a 100%);
        overflow: hidden;
        color: var(--cta-text);
    }
    
    .cta-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        z-index: 2;
    }
    
    .cta-content {
        flex: 1;
        max-width: 600px;
        padding-right: 40px;
    }
    
    .cta-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.2;
        background: linear-gradient(to right, var(--cta-primary), var(--cta-secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }
    
    .cta-text {
        font-size: 1.2rem;
        margin-bottom: 30px;
        line-height: 1.6;
        opacity: 0.9;
    }
    
    .cta-text strong {
        color: var(--cta-primary);
        font-weight: 600;
    }
    
    .cta-buttons {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }
    
    .cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 15px 30px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        text-align: center;
    }
    
    .cta-icon {
        margin-right: 10px;
        transition: transform 0.3s ease;
    }
    
    .cta-button-primary {
        background-color: var(--cta-primary);
        color: var(--cta-dark);
        box-shadow: 0 4px 15px rgba(0, 255, 136, 0.3);
    }
    
    .cta-button-primary:hover {
        background-color: var(--cta-primary-hover);
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 255, 136, 0.4);
    }
    
    .cta-button-primary:hover .cta-icon {
        transform: translateX(5px);
    }
    
    .cta-button-secondary {
        background-color: transparent;
        color: var(--cta-text);
        border: 2px solid var(--cta-secondary);
    }
    
    .cta-button-secondary:hover {
        background-color: rgba(0, 168, 255, 0.1);
        transform: translateY(-3px);
        border-color: var(--cta-secondary-hover);
    }
    
    .cta-button-secondary:hover .cta-icon {
        transform: translateX(5px);
    }
    
    /* Контейнер для 3D модели */
    .cta-3d-container {
        flex: 1;
        max-width: 600px;
        height: 400px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        overflow: hidden;
    }
    
    model-viewer {
        --progress-bar-color: var(--cta-primary);
        --progress-bar-height: 5px;
        --poster-color: transparent;
    }
    
    .placeholder-3d {
        width: 100%;
        height: 100%;
        background: rgba(0, 168, 255, 0.05);
        border: 2px dashed rgba(0, 168, 255, 0.3);
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    
    .3d-placeholder-text {
        margin-top: 20px;
        color: rgba(255, 255, 255, 0.7);
        font-size: 1.2rem;
    }
    
    .car-illustration {
        width: 100%;
        height: auto;
        opacity: 0.3;
    }
    
    /* Разделительная линия */
    .section-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        margin: 60px auto 0;
        max-width: 1200px;
        position: relative;
    }
    
    .section-divider::after {
        content: '';
        position: absolute;
        top: -3px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 7px;
        background: var(--cta-primary);
        border-radius: 5px;
    }
    
    /* Эффекты фона */
    .cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(0,168,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z"><animate attributeName="opacity" values="0.05;0.1;0.05" dur="10s" repeatCount="indefinite"/></path></svg>');
        background-size: 200px 200px;
        opacity: 0.5;
        z-index: 1;
    }
    
    /* Анимация появления */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .cta-section {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
        animation-delay: 0.3s;
    }
    
    /* Адаптивность */
    @media (max-width: 992px) {
        .cta-container {
            flex-direction: column;
            text-align: center;
        }
        
        .cta-content {
            padding-right: 0;
            margin-bottom: 40px;
            max-width: 100%;
        }
        
        .cta-buttons {
            justify-content: center;
        }
        
        .cta-3d-container {
            max-width: 100%;
            height: 350px;
            margin-top: 30px;
        }
    }
    
    @media (max-width: 768px) {
        .cta-section {
            padding: 60px 0 40px;
        }
        
        .cta-title {
            font-size: 2rem;
        }
        
        .cta-text {
            font-size: 1.1rem;
        }
        
        .cta-buttons {
            flex-direction: column;
            gap: 15px;
        }
        
        .cta-button {
            width: 100%;
            padding: 12px 20px;
        }
        
        .cta-3d-container {
            height: 300px;
        }
    }
    
    @media (max-width: 480px) {
        .cta-title {
            font-size: 1.8rem;
        }
        
        .cta-3d-container {
            height: 250px;
        }
        
        .3d-placeholder-text {
            font-size: 1rem;
        }
    }
</style>

<script>
    // Инициализация анимации при скролле
    document.addEventListener('DOMContentLoaded', function() {
        const ctaSection = document.getElementById('cta-section');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                }
            });
        }, { threshold: 0.1 });
        
        observer.observe(ctaSection);
        
        // Обработчики для кнопок
        document.querySelectorAll('[data-modal]').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const modalType = this.getAttribute('data-modal');
                alert(`Открывается модальное окно: ${modalType}`);
            });
        });
        
        // Инициализация модели (пример)
        const modelViewer = document.getElementById('car-model-viewer');
        // Здесь вы можете установить источник модели, например:
        // modelViewer.src = 'path/to/your/model.glb';
    });
</script>
@include('footer')
</html>