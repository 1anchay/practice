<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Политика конфиденциальности | Премиальные китайские автомобили</title>
    
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
        
        .privacy-header {
            @apply bg-gradient-to-r from-gray-800 via-red-900 to-gray-800 text-white;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
            position: relative;
            overflow: hidden;
        }
        
        .privacy-header::before {
            content: "保密";
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
                我们如何保护和利用您的数据
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-white">Ваша конфиденциальность важна для нас</h2>
            </div>
            
            <p class="text-gray-400 mb-6">
                В нашем автосалоне мы серьезно относимся к защите ваших персональных данных. Настоящая Политика конфиденциальности объясняет, как мы собираем, используем, защищаем и раскрываем информацию, которую вы предоставляете при использовании нашего веб-сайта и услуг.
            </p>
            
            <div class="highlight-box mb-6">
                <p class="text-red-300 font-medium">
                    <i class="fas fa-calendar-alt mr-2"></i> Последнее обновление: 1 января 2024 года
                </p>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Data Collection -->
        <section class="mb-16 bg-gray-800 rounded-xl p-8 shadow-lg">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                <span class="text-red-500 mr-3 text-3xl">&#x56FE;</span>
                Какие данные мы собираем
            </h2>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-gray-700 p-6 rounded-lg shadow-sm border border-gray-600">
                    <h3 class="font-semibold text-lg mb-3 flex items-center text-white">
                        <span class="text-red-400 mr-2 text-xl">&#x4EBA;</span>
                        Персональная информация
                    </h3>
                    <ul class="text-gray-400 space-y-2">
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2713;</span>
                            <span>Имя, фамилия, отчество</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2713;</span>
                            <span>Контактные данные (телефон, email)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2713;</span>
                            <span>Данные о предпочтениях в автомобилях</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-gray-700 p-6 rounded-lg shadow-sm border border-gray-600">
                    <h3 class="font-semibold text-lg mb-3 flex items-center text-white">
                        <span class="text-red-400 mr-2 text-xl">&#x6280;</span>
                        Технические данные
                    </h3>
                    <ul class="text-gray-400 space-y-2">
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2713;</span>
                            <span>IP-адрес и данные браузера</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2713;</span>
                            <span>Cookie и аналогичные технологии</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">&#x2713;</span>
                            <span>Данные о посещенных страницах</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Data Usage -->
        <section class="mb-16 bg-gray-800 rounded-xl p-8 shadow-lg">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                <span class="text-red-500 mr-3 text-3xl">&#x7528;</span>
                Как мы используем ваши данные
            </h2>
            
            <div class="space-y-6">
                <div class="flex">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-900 bg-opacity-30 text-red-400">
                            <span class="text-xl">&#x7BA1;</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-white">Предоставление услуг</h3>
                        <p class="mt-1 text-gray-400">
                            Для обработки ваших запросов на тест-драйв, консультации, покупку автомобиля и сервисное обслуживание.
                        </p>
                    </div>
                </div>
                
                <div class="flex">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-900 bg-opacity-30 text-red-400">
                            <span class="text-xl">&#x5B9A;</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-white">Персонализация опыта</h3>
                        <p class="mt-1 text-gray-400">
                            Чтобы предлагать вам автомобили и услуги, которые соответствуют вашим предпочтениям.
                        </p>
                    </div>
                </div>
                
                <div class="flex">
                    <div class="flex-shrink-0 mr-4">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-900 bg-opacity-30 text-red-400">
                            <span class="text-xl">&#x4F18;</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-white">Специальные предложения</h3>
                        <p class="mt-1 text-gray-400">
                            Для информирования о специальных акциях, новых моделях и сервисных кампаниях.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Data Protection -->
        <section class="mb-16 bg-gray-800 rounded-xl p-8 shadow-lg">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                <span class="text-red-500 mr-3 text-3xl">&#x5B89;</span>
                Как мы защищаем ваши данные
            </h2>
            
            <div class="bg-gray-700 rounded-xl shadow-sm overflow-hidden border border-gray-600">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row">
                        <div class="flex-1">
                            <h3 class="text-lg font-medium text-white mb-4">Меры безопасности</h3>
                            <ul class="space-y-3 text-gray-400">
                                <li class="flex items-start">
                                    <span class="text-red-400 mr-2">&#x2713;</span>
                                    <span>Шифрование передаваемых данных</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-400 mr-2">&#x2713;</span>
                                    <span>Регулярные аудиты безопасности</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-400 mr-2">&#x2713;</span>
                                    <span>Ограниченный доступ к данным</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 mt-6 md:mt-0">
                            <h3 class="text-lg font-medium text-white mb-4">Ваши права</h3>
                            <ul class="space-y-3 text-gray-400">
                                <li class="flex items-start">
                                    <span class="text-red-400 mr-2">&#x2713;</span>
                                    <span>Право на доступ к вашим данным</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-400 mr-2">&#x2713;</span>
                                    <span>Право на исправление данных</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-400 mr-2">&#x2713;</span>
                                    <span>Право на удаление данных</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-800 px-6 py-4 border-t border-gray-600">
                    <p class="text-sm text-gray-400">
                        Для реализации ваших прав или вопросов о защите данных свяжитесь с нашим офицером по защите данных: <a href="mailto:privacy@example.com" class="text-red-400 hover:underline">privacy@example.com</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- Cookies -->
        <section class="mb-16 bg-gray-800 rounded-xl p-8 shadow-lg">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                <span class="text-red-500 mr-3 text-3xl">&#x5370;</span>
                Использование Cookie
            </h2>
            
            <div class="bg-gray-700 rounded-xl shadow-sm p-6 border border-gray-600">
                <p class="text-gray-400 mb-6">
                    Наш веб-сайт использует файлы cookie и аналогичные технологии для улучшения работы сайта и персонализации вашего опыта. Вы можете управлять настройками cookie в вашем браузере.
                </p>
                
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-medium text-white mb-2 flex items-center">
                            <span class="text-red-400 mr-2">&#x5FC5;</span>
                            Обязательные
                        </h3>
                        <p class="text-sm text-gray-400">
                            Необходимы для работы основных функций сайта
                        </p>
                    </div>
                    
                    <div class="bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-medium text-white mb-2 flex items-center">
                            <span class="text-red-400 mr-2">&#x5206;</span>
                            Аналитические
                        </h3>
                        <p class="text-sm text-gray-400">
                            Помогают нам улучшать наш сайт
                        </p>
                    </div>
                    
                    <div class="bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-medium text-white mb-2 flex items-center">
                            <span class="text-red-400 mr-2">&#x5E02;</span>
                            Маркетинговые
                        </h3>
                        <p class="text-sm text-gray-400">
                            Используются для персонализации рекламы
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="bg-gray-800 rounded-xl p-8 mb-16 border border-red-900 border-opacity-50">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-2/3 mb-6 md:mb-0">
                    <h2 class="text-xl font-bold text-white mb-2">Остались вопросы?</h2>
                    <p class="text-gray-400">
                        Свяжитесь с нашим отделом по работе с персональными данными для получения дополнительной информации.
                    </p>
                </div>
                <div class="md:w-1/3">
                    <a href="mailto:privacy@example.com" class="block w-full text-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 shadow-sm transition-colors">
                        <i class="fas fa-envelope mr-2"></i> Написать нам
                    </a>
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