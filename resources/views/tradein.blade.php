<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('header')
    <title>Услуга Trade-In | Китайские автомобили</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#e11d48', // Темно-красный
                        secondary: '#1f2937', // Темно-серый
                        accent: '#059669', // Темно-зеленый
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #111827;
        }
    </style>
</head>
<body class="text-gray-200 font-sans">
    <!-- Hero Section -->
    <header class="relative bg-gradient-to-br from-gray-900 to-gray-800 overflow-hidden">
        <div class="container mx-auto px-6 py-24 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-primary">TRADE-IN</span> Вашего автомобиля
                </h1>
                
                <div class="flex justify-center items-center mb-8">
                    <div class="h-1 w-16 bg-gradient-to-r from-primary to-secondary mx-4"></div>
                    <svg class="w-8 h-8 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <div class="h-1 w-16 bg-gradient-to-r from-secondary to-primary mx-4"></div>
                </div>
                
                <p class="text-xl text-gray-300 mb-8">
                    Профессиональная оценка и выгодный обмен вашего автомобиля на новый китайский автомобиль
                </p>
                
                <a href="#form" class="inline-block px-8 py-3 bg-primary hover:bg-primary/90 text-white font-medium rounded-md transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl shadow-primary/20">
                    Оставить заявку
                </a>
            </div>
        </div>
    </header>

    <!-- What is Trade-In Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl font-bold mb-8 text-primary flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        Что такое Trade-In?
                    </h2>
                    
                    <div class="space-y-6 text-gray-300">
                        <p>
                            Программа Trade-In позволяет вам обменять текущий автомобиль на новый с минимальными временными затратами. Наши специалисты проведут профессиональную оценку вашего авто и предложат оптимальные условия обмена.
                        </p>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-accent mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p>Быстрая и объективная оценка вашего автомобиля</p>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-primary mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p>Честные и прозрачные условия сделки</p>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-gray-400 mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p>Минимальные временные затраты с вашей стороны</p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 relative">
                    <div class="bg-gray-800 p-8 rounded-lg border-l-4 border-primary shadow-xl">
                        <h3 class="text-2xl font-bold mb-6 text-white">Как проходит Trade-In</h3>
                        
                        <div class="space-y-8">
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white font-bold">1</div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-white">Заявка на оценку</h4>
                                    <p class="text-gray-400">Заполните форму или позвоните нам</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-700 text-white font-bold">2</div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-white">Осмотр автомобиля</h4>
                                    <p class="text-gray-400">Наши специалисты оценят состояние вашего авто</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white font-bold">3</div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-white">Выбор нового авто</h4>
                                    <p class="text-gray-400">Подберем оптимальный вариант для обмена</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-700 text-white font-bold">4</div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-white">Оформление сделки</h4>
                                    <p class="text-gray-400">Быстрое оформление всех документов</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-16 text-center text-primary">
                <svg class="w-8 h-8 inline-block mr-2 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                </svg>
                Преимущества Trade-In у нас
            </h2>
            
            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-gray-900 p-8 rounded-lg border-t-4 border-primary transform transition duration-500 hover:scale-[1.02] hover:shadow-lg">
                    <div class="text-primary mb-4">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-white">Выгодная цена</h3>
                    <p class="text-gray-400">Конкурентные рыночные цены за ваш автомобиль</p>
                </div>
                
                <div class="bg-gray-900 p-8 rounded-lg border-t-4 border-gray-700 transform transition duration-500 hover:scale-[1.02] hover:shadow-lg">
                    <div class="text-gray-400 mb-4">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-white">Безопасность</h3>
                    <p class="text-gray-400">Все сделки полностью легальны и прозрачны</p>
                </div>
                
                <div class="bg-gray-900 p-8 rounded-lg border-t-4 border-accent transform transition duration-500 hover:scale-[1.02] hover:shadow-lg">
                    <div class="text-accent mb-4">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-white">Быстрота</h3>
                    <p class="text-gray-400">Весь процесс занимает от 1 до 3 дней</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="form" class="py-20">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-gray-900 p-10 text-white">
                        <h2 class="text-2xl font-bold mb-6">Оставьте заявку</h2>
                        <p class="mb-8 text-gray-400">Заполните форму, и наш менеджер свяжется с вами для уточнения деталей Trade-In</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span>+7 (XXX) XXX-XX-XX</span>
                            </div>
                            
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span>trade-in@china-cars.ru</span>
                            </div>
                            
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span>г. Москва, ул. Автозаводская, д. 23</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="md:w-1/2 p-10">
                        <form class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Ваше имя</label>
                                <input type="text" id="name" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-300 mb-1">Телефон</label>
                                <input type="tel" id="phone" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="car" class="block text-sm font-medium text-gray-300 mb-1">Марка и модель вашего авто</label>
                                <input type="text" id="car" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="year" class="block text-sm font-medium text-gray-300 mb-1">Год выпуска</label>
                                <input type="number" id="year" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Дополнительная информация</label>
                                <textarea id="message" rows="3" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-medium py-3 px-4 rounded-md transition-all duration-300 shadow-md hover:shadow-lg">
                                Отправить заявку
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-3xl font-bold mb-12 text-center text-primary">
                <svg class="w-8 h-8 inline-block mr-2 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Частые вопросы
            </h2>
            
            <div class="space-y-6">
                <div class="bg-gray-900 rounded-lg overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group">
                        <span class="font-medium text-lg text-white group-hover:text-primary transition-colors duration-300">Какие документы нужны для Trade-In?</span>
                        <svg class="w-6 h-6 text-primary transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-400">
                        <p>Для оценки автомобиля вам потребуются: ПТС, свидетельство о регистрации, паспорт владельца. При оформлении сделки дополнительно потребуется ваш паспорт.</p>
                    </div>
                </div>
                
                <div class="bg-gray-900 rounded-lg overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group">
                        <span class="font-medium text-lg text-white group-hover:text-primary transition-colors duration-300">Как быстро можно оформить Trade-In?</span>
                        <svg class="w-6 h-6 text-primary transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-400">
                        <p>При наличии всех документов и готовности автомобиля к осмотру, вся процедура может занять от 1 до 3 рабочих дней.</p>
                    </div>
                </div>
                
                <div class="bg-gray-900 rounded-lg overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group">
                        <span class="font-medium text-lg text-white group-hover:text-primary transition-colors duration-300">Можно ли обменять автомобиль с кредитом?</span>
                        <svg class="w-6 h-6 text-primary transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-400">
                        <p>Да, мы работаем с автомобилями, находящимися в залоге у банка. В этом случае потребуется согласование с банком-кредитором.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
</body>
</html>