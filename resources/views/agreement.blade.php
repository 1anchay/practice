<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользовательское соглашение | Премиальные китайские автомобили</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            @apply text-gray-300 bg-gray-900 antialiased;
        }
        
        .terms-header {
            @apply bg-gradient-to-r from-gray-800 via-red-900 to-gray-800 text-white;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
            position: relative;
            overflow: hidden;
        }
        
        .terms-header::before {
            content: "协议";
            position: absolute;
            font-size: 20rem;
            font-weight: bold;
            opacity: 0.03;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
        }
        
        .section-divider {
            @apply border-t border-gray-700 my-12;
        }
        
        .highlight-box {
            @apply bg-gray-800 border-l-4 border-red-600 p-6 rounded-r-lg;
        }
        
        .back-to-top {
            @apply fixed bottom-8 right-8 bg-red-600 text-white p-3 rounded-full shadow-lg hover:bg-red-700 transition-colors;
        }
        
        .chinese-pattern {
            background-color: #111827;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23b91c1c' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="chinese-pattern">
    @include('header')

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-16 max-w-4xl">
       <!-- Main Content -->
    <main class="container mx-auto px-6 py-16 max-w-4xl">
        <!-- Header -->
       <header class="privacy-header py-20 mb-16 bg-gradient-to-r from-red-800 to-red-600 relative overflow-hidden">
    <!-- Декоративные китайские элементы -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0,0 L100,0 L100,100 L0,100 Z" fill="none" stroke="currentColor" stroke-width="2" stroke-dasharray="5,5"/>
            <!-- Китайские узоры -->
            <path d="M20,20 Q30,10 40,20 T60,20 T80,20" fill="none" stroke="#FECACA" stroke-width="1"/>
            <path d="M20,80 Q30,90 40,80 T60,80 T80,80" fill="none" stroke="#FECACA" stroke-width="1"/>
        </svg>
    </div>
    
    <!-- Иконки из Heroicons -->
    <div class="absolute top-10 left-10 opacity-20">
        <svg class="w-16 h-16 text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15l8-8m0 0l-8-8m8 8H4"/>
        </svg>
    </div>
    <div class="absolute bottom-10 right-10 opacity-20">
        <svg class="w-16 h-16 text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
        </svg>
    </div>

    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-3xl mx-auto">
            <!-- Китайский стиль шрифта -->
            <h1 class="text-4xl md:text-5xl font-bold mb-6 font-[ 'Noto Sans SC', sans-serif ] text-white tracking-wide">
                <span class="inline-block transform rotate-3">隐</span>
                <span class="inline-block transform -rotate-2">私</span>
                <span class="inline-block transform rotate-1">政</span>
                <span class="inline-block">策</span>
            </h1>
            
            <div class="flex justify-center items-center mb-6">
                <div class="h-1 w-16 bg-red-300 mx-4"></div>
                <svg class="w-8 h-8 text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <div class="h-1 w-16 bg-red-300 mx-4"></div>
            </div>
            
            <p class="text-xl text-red-200 font-light italic">
                Политика конфиденциальности
            </p>
            
            <!-- Декоративный элемент внизу -->
            <div class="mt-10">
                <svg class="w-24 h-6 mx-auto text-red-300" viewBox="0 0 100 20">
                    <path d="M0,10 Q25,20 50,10 T100,10" fill="none" stroke="currentColor" stroke-width="1"/>
                </svg>
            </div>
        </div>
    </div>
</header>

        <!-- Introduction -->
        <section class="mb-16 bg-gray-800 rounded-xl p-8 shadow-lg">
            <div class="flex items-center mb-8">
                <div class="w-12 h-12 bg-red-900 bg-opacity-30 rounded-full flex items-center justify-center mr-4">
                    <span class="text-xl text-red-400">&#x5408;</span>
                </div>
                <h2 class="text-2xl font-bold text-white">Общие положения</h2>
            </div>
            
            <p class="text-gray-400 mb-6">
                Настоящее Пользовательское соглашение (далее — "Соглашение") регулирует отношения между владельцем сайта (далее — "Компания") и пользователем (далее — "Пользователь") при использовании сайта и услуг по продаже китайских автомобилей.
            </p>
            
            <div class="highlight-box mb-6">
                <p class="text-red-300 font-medium">
                    <i class="fas fa-calendar-alt mr-2"></i> Действует с 1 января 2024 года
                </p>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Terms -->
        <section class="mb-16 bg-gray-800 rounded-xl p-8 shadow-lg">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                <span class="text-red-500 mr-3 text-3xl">&#x6761;</span>
                Основные условия
            </h2>
            
            <div class="space-y-8">
                <div class="flex">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-900 bg-opacity-30 text-red-400">
                            <span class="text-xl">&#x7BA1;</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-white">1. Использование сайта</h3>
                        <p class="mt-2 text-gray-400">
                            Пользователь соглашается использовать сайт только в законных целях. Запрещается размещение ложной информации, спама или материалов, нарушающих права третьих лиц.
                        </p>
                    </div>
                </div>
                
                <div class="flex">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-900 bg-opacity-30 text-red-400">
                            <span class="text-xl">&#x8D22;</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-white">2. Условия покупки</h3>
                        <p class="mt-2 text-gray-400">
                            Все цены на автомобили указаны с учетом НДС. Компания оставляет за собой право изменять цены без предварительного уведомления. Для оформления заказа требуется внесение предоплаты.
                        </p>
                    </div>
                </div>
                
                <div class="flex">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-900 bg-opacity-30 text-red-400">
                            <span class="text-xl">&#x8D23;</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-white">3. Ответственность</h3>
                        <p class="mt-2 text-gray-400">
                            Компания не несет ответственности за технические неполадки вне своего контроля. Характеристики автомобилей могут отличаться от представленных на сайте.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Obligations -->
        <section class="mb-16 bg-gray-800 rounded-xl p-8 shadow-lg">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                <span class="text-red-500 mr-3 text-3xl">&#x4E49;</span>
                Обязанности сторон
            </h2>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-gray-700 p-6 rounded-lg shadow-sm border border-gray-600">
                    <h3 class="font-semibold text-lg mb-3 flex items-center text-white">
                        <span class="text-red-400 mr-2 text-xl">&#x516C;</span>
                        Обязанности Компании
                    </h3>
                    <ul class="text-gray-400 space-y-2">
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2022;</span>
                            <span>Предоставлять достоверную информацию об автомобилях</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2022;</span>
                            <span>Обеспечивать конфиденциальность персональных данных</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2022;</span>
                            <span>Соблюдать условия договора купли-продажи</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-gray-700 p-6 rounded-lg shadow-sm border border-gray-600">
                    <h3 class="font-semibold text-lg mb-3 flex items-center text-white">
                        <span class="text-red-400 mr-2 text-xl">&#x5BA2;</span>
                        Обязанности Пользователя
                    </h3>
                    <ul class="text-gray-400 space-y-2">
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2022;</span>
                            <span>Предоставлять точные персональные данные</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2022;</span>
                            <span>Соблюдать условия оплаты и получения автомобиля</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2022;</span>
                            <span>Не передавать учетные данные третьим лицам</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Intellectual Property -->
        <section class="mb-16 bg-gray-800 rounded-xl p-8 shadow-lg">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                <span class="text-red-500 mr-3 text-3xl">&#x77E5;</span>
                Интеллектуальная собственность
            </h2>
            
            <div class="bg-gray-700 rounded-xl shadow-sm p-6 border border-gray-600">
                <p class="text-gray-400 mb-4">
                    Все материалы сайта, включая тексты, изображения, логотипы и дизайн, являются интеллектуальной собственностью Компании или ее партнеров.
                </p>
                <p class="text-gray-400">
                    Любое копирование, распространение или иное использование материалов без письменного разрешения запрещено. Фотографии автомобилей могут отличаться от реальных моделей.
                </p>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Changes and Disputes -->
        <section class="mb-16 bg-gray-800 rounded-xl p-8 shadow-lg">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                <span class="text-red-500 mr-3 text-3xl">&#x53D8;</span>
                Изменения и разрешение споров
            </h2>
            
            <div class="space-y-6">
                <div class="flex">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-900 bg-opacity-30 text-red-400">
                            <span class="text-xl">&#x66F4;</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-white">Изменение условий</h3>
                        <p class="mt-1 text-gray-400">
                            Компания оставляет за собой право изменять условия соглашения. Актуальная версия всегда доступна на сайте. Продолжение использования сайта означает согласие с новыми условиями.
                        </p>
                    </div>
                </div>
                
                <div class="flex">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-900 bg-opacity-30 text-red-400">
                            <span class="text-xl">&#x89C4;</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-white">Разрешение споров</h3>
                        <p class="mt-1 text-gray-400">
                            Все споры решаются путем переговоров. При невозможности достичь соглашения спор передается в суд по месту нахождения Компании.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Acceptance -->
        <section class="bg-gray-800 rounded-xl p-8 mb-16 border border-red-900 border-opacity-50">
            <div class="text-center">
                <h2 class="text-xl font-bold text-white mb-4">Принятие условий</h2>
                <p class="text-gray-400 mb-6">
                    Используя наш сайт и услуги, вы подтверждаете, что ознакомились с условиями данного соглашения, понимаете их и принимаете.
                </p>
                <div class="inline-flex items-center bg-gray-700 px-6 py-3 rounded-lg border border-gray-600">
                    <span class="text-red-400 mr-3 text-2xl">&#x540C;</span>
                    <span class="text-white">Дата последнего принятия: 01.01.2024</span>
                </div>
            </div>
        </section>
    </main>

    @include('footer')

    <!-- Back to top button -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="back-to-top hidden" id="backToTop">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <!-- Scripts -->
    <script>
        // Show back-to-top button when scrolling
        window.addEventListener('scroll', function() {
            var backToTopButton = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('hidden');
            } else {
                backToTopButton.classList.add('hidden');
            }
        });
    </script>
</body>
</html>