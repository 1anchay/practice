<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена | NeoAuto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <style>
        .chinese-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23dc2626' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .car-animate {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(1deg); }
            50% { transform: translateY(-20px) rotate(-1deg); }
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 font-sans min-h-screen flex flex-col">
    <!-- Main Content -->
    <main class="flex-grow chinese-pattern flex items-center">
        <div class="container mx-auto px-4 py-16 text-center relative">
            <!-- Floating Chinese characters -->
            <div class="absolute inset-0 overflow-hidden opacity-10">
                <div class="absolute top-1/4 left-1/4 text-9xl">车</div>
                <div class="absolute top-1/3 right-1/4 text-8xl">汽</div>
                <div class="absolute bottom-1/4 left-1/3 text-7xl">龙</div>
                <div class="absolute bottom-1/3 right-1/3 text-6xl">福</div>
            </div>

            <div class="relative z-10 max-w-3xl mx-auto">
                <!-- Animated car -->
                <div class="car-animate mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 mx-auto text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                    </svg>
                </div>

                <!-- 404 Text -->
                <h1 class="text-9xl font-bold text-red-500 mb-4">404</h1>
                <h2 class="text-3xl font-bold mb-6">页面未找到 - Страница не найдена</h2>
                
                <!-- Decorative divider -->
                <div class="flex items-center justify-center mb-8">
                    <div class="h-1 w-16 bg-red-500"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-4 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <div class="h-1 w-16 bg-red-500"></div>
                </div>

                <p class="text-lg text-gray-300 mb-8">
                    Кажется, вы свернули не на ту дорогу. Эта страница, как редкий китайский автомобиль,<br>
                    которую мы пока не смогли найти в нашем каталоге.
                </p>

                <!-- Car image grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12 max-w-2xl mx-auto">
                    <div class="bg-gray-800 p-4 rounded-lg border border-gray-700 hover:border-red-500 transition-colors">
                        <img src="images/geely.png" alt="Geely" class="w-full h-20 object-cover rounded">
                    </div>
                    <div class="bg-gray-800 p-4 rounded-lg border border-gray-700 hover:border-red-500 transition-colors">
                        <img src="images/chery.png" alt="Chery" class="w-full h-20 object-cover rounded">
                    </div>
                    <div class="bg-gray-800 p-4 rounded-lg border border-gray-700 hover:border-red-500 transition-colors">
                        <img src="images/jac.png" alt="JAC" class="w-full h-20 object-cover rounded">
                    </div>
                    <div class="bg-gray-800 p-4 rounded-lg border border-gray-700 hover:border-red-500 transition-colors">
                        <img src="images/haval.png" alt="Haval" class="w-full h-20 object-cover rounded">
                    </div>
                </div>

                <!-- Action buttons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition-colors flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        Вернуться на главную
                    </a>
                    <a href="/catalog" class="bg-gray-800 hover:bg-gray-700 border border-gray-700 text-white px-6 py-3 rounded-lg font-medium transition-colors flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1v-1h.05a2.5 2.5 0 014.9 0H19a1 1 0 001-1v-2a1 1 0 00-.293-.707l-3-3A1 1 0 0016 7h-1V5a1 1 0 00-1-1H3z" />
                        </svg>
                        Перейти в каталог
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 border-t border-gray-700 py-6">
        <div class="container mx-auto px-4 text-center text-gray-400">
            <p>© 2025 EMAX. Все права защищены. 中国汽车</p>
        </div>
    </footer>

    <!-- Floating decoration elements -->
    <div class="fixed bottom-4 right-4 text-red-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
        </svg>
    </div>
    <div class="fixed top-4 left-4 text-red-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
        </svg>
    </div>
</body>
</html>