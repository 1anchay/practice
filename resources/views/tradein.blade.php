<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('header')
    <title>Услуга Trade-In | Китайские автомобили</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-900 text-gray-100 font-sans">
    <!-- Hero Section -->
    <header class="relative bg-gray-800 overflow-hidden">
        <!-- Китайские декоративные элементы -->
        <div class="absolute inset-0 opacity-20">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0,0 L100,0 L100,100 L0,100 Z" fill="none" stroke="#b91c1c" stroke-width="2" stroke-dasharray="5,5"/>
                <!-- Китайские узоры -->
                <path d="M10,10 Q20,5 30,10 T50,10 T70,10" fill="none" stroke="#b91c1c" stroke-width="0.5"/>
                <path d="M10,90 Q20,95 30,90 T50,90 T70,90" fill="none" stroke="#b91c1c" stroke-width="0.5"/>
            </svg>
        </div>
        
        <!-- Иероглифы как декоративный элемент -->
        <div class="absolute top-10 right-10 text-6xl opacity-10 text-red-500">车</div>
        <div class="absolute bottom-10 left-10 text-6xl opacity-10 text-red-500">换</div>
        
        <div class="container mx-auto px-6 py-24 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-red-500">TRADE-IN</span> 您的汽车
                </h1>
                
                <div class="flex justify-center items-center mb-8">
                    <div class="h-1 w-16 bg-red-600 mx-4"></div>
                    <svg class="w-8 h-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <div class="h-1 w-16 bg-red-600 mx-4"></div>
                </div>
                
                <p class="text-xl text-gray-300 mb-8">
                    Обменяйте ваш текущий автомобиль на новый китайский автомобиль по выгодной цене
                </p>
                
                <a href="#form" class="inline-block px-8 py-3 bg-red-600 hover:bg-red-700 text-white font-medium rounded-md transition duration-300 transform hover:scale-105">
                    Оставить заявку
                </a>
            </div>
        </div>
    </header>

    <!-- What is Trade-In Section -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl font-bold mb-8 text-red-500 flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        Что такое Trade-In?
                    </h2>
                    
                    <div class="space-y-6 text-gray-300">
                        <p>
                            Trade-In - это программа обмена вашего текущего автомобиля на новый. Мы оценим ваше авто и предложим выгодные условия обмена на один из наших китайских автомобилей.
                        </p>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p>Быстрая и прозрачная оценка вашего автомобиля</p>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p>Выгодные условия обмена</p>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <p>Минимальные временные затраты с вашей стороны</p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 relative">
                    <div class="bg-gray-800 p-8 rounded-lg border-l-4 border-red-600 shadow-xl">
                        <h3 class="text-2xl font-bold mb-6 text-red-500">Как проходит Trade-In</h3>
                        
                        <div class="space-y-8">
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-red-600 text-white font-bold">1</div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2">Заявка на оценку</h4>
                                    <p class="text-gray-400">Заполните форму или позвоните нам</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-red-600 text-white font-bold">2</div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2">Осмотр автомобиля</h4>
                                    <p class="text-gray-400">Наши специалисты оценят состояние вашего авто</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-red-600 text-white font-bold">3</div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2">Выбор нового авто</h4>
                                    <p class="text-gray-400">Подберем оптимальный вариант для обмена</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-red-600 text-white font-bold">4</div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2">Оформление сделки</h4>
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
            <h2 class="text-3xl font-bold mb-16 text-center text-red-500">
                <svg class="w-8 h-8 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                </svg>
                Преимущества Trade-In у нас
            </h2>
            
            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-gray-900 p-8 rounded-lg border-t-4 border-red-600 transform transition duration-500 hover:scale-105">
                    <div class="text-red-500 mb-4">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Выгодная цена</h3>
                    <p class="text-gray-400">Мы предлагаем конкурентные цены за ваш автомобиль, часто выше рыночных</p>
                </div>
                
                <div class="bg-gray-900 p-8 rounded-lg border-t-4 border-red-600 transform transition duration-500 hover:scale-105">
                    <div class="text-red-500 mb-4">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Безопасность</h3>
                    <p class="text-gray-400">Все сделки полностью легальны и прозрачны</p>
                </div>
                
                <div class="bg-gray-900 p-8 rounded-lg border-t-4 border-red-600 transform transition duration-500 hover:scale-105">
                    <div class="text-red-500 mb-4">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Быстрота</h3>
                    <p class="text-gray-400">Весь процесс занимает от 1 до 3 дней</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="form" class="py-20 bg-gray-900">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-red-600 p-10 text-white">
                        <h2 class="text-2xl font-bold mb-6">Оставьте заявку</h2>
                        <p class="mb-8">Заполните форму, и наш менеджер свяжется с вами для уточнения деталей Trade-In</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span>+7 (XXX) XXX-XX-XX</span>
                            </div>
                            
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span>trade-in@china-cars.ru</span>
                            </div>
                            
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                                <input type="text" id="name" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-red-500 focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-300 mb-1">Телефон</label>
                                <input type="tel" id="phone" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-red-500 focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="car" class="block text-sm font-medium text-gray-300 mb-1">Марка и модель вашего авто</label>
                                <input type="text" id="car" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-red-500 focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="year" class="block text-sm font-medium text-gray-300 mb-1">Год выпуска</label>
                                <input type="number" id="year" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-red-500 focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Дополнительная информация</label>
                                <textarea id="message" rows="3" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-red-500 focus:border-transparent"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
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
            <h2 class="text-3xl font-bold mb-12 text-center text-red-500">
                <svg class="w-8 h-8 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Частые вопросы
            </h2>
            
            <div class="space-y-6">
                <div class="bg-gray-900 rounded-lg overflow-hidden">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none">
                        <span class="font-medium text-lg">Какие документы нужны для Trade-In?</span>
                        <svg class="w-6 h-6 text-red-500 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-400">
                        <p>Для оценки автомобиля вам потребуются: ПТС, свидетельство о регистрации, паспорт владельца. При оформлении сделки дополнительно потребуется ваш паспорт.</p>
                    </div>
                </div>
                
                <div class="bg-gray-900 rounded-lg overflow-hidden">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none">
                        <span class="font-medium text-lg">Как быстро можно оформить Trade-In?</span>
                        <svg class="w-6 h-6 text-red-500 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-400">
                        <p>При наличии всех документов и готовности автомобиля к осмотру, вся процедура может занять от 1 до 3 рабочих дней.</p>
                    </div>
                </div>
                
                <div class="bg-gray-900 rounded-lg overflow-hidden">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none">
                        <span class="font-medium text-lg">Можно ли обменять автомобиль с кредитом?</span>
                        <svg class="w-6 h-6 text-red-500 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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

    <!-- CTA Section -->
    <section class="py-16 bg-red-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6 text-white">Готовы обменять свой автомобиль?</h2>
            <p class="text-xl text-red-100 mb-8 max-w-2xl mx-auto">Оставьте заявку прямо сейчас и получите дополнительную скидку 5% на новый китайский автомобиль</p>
            <a href="#form" class="inline-block px-8 py-3 bg-white text-red-600 font-bold rounded-md hover:bg-gray-100 transition duration-300">
                Получить оценку авто
            </a>
        </div>
    </section>

    <footer class="bg-gray-900 py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <div class="text-2xl font-bold text-red-500 mb-2">中国汽车</div>
                    <p class="text-gray-400">Продажа китайских автомобилей с Trade-In</p>
                </div>
                
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.04.058h-.08c-2.597 0-2.917-.01-3.96-.058-.976-.045-1.505-.207-1.858-.344-.466-.182-.8-.398-1.15-.748-.35-.35-.566-.683-.748-1.15-.137-.353-.3-.882-.344-1.857-.048-1.023-.058-1.351-.058-3.807v-.468c0-2.456.011-2.784.058-3.807.045-.975.207-1.504.344-1.857.182-.466.399-.8.748-1.15.35-.35.683-.566 1.15-.748.353-.137.882-.3 1.857-.344 1.023-.047 1.351-.058 3.807-.058h.468c2.456 0 2.784.011 3.807.058.975.045 1.504.207 1.857.344.466.182.8.398 1.15.748.35.35.566.683.748 1.15.137.353.3.882.344 1.857.047 1.023.058 1.351.058 3.807v.468c0 2.456-.011 2.784-.058 3.807-.045.975-.207 1.504-.344 1.857-.182.466-.399.8-.748 1.15-.35.35-.683.566-1.15.748-.353.137-.882.3-1.857.344-1.057.048-1.37.058-4.041.058h-.08c-2.597 0-2.917-.01-3.96-.058-.976-.045-1.505-.207-1.858-.344-.466-.182-.8-.398-1.15-.748-.35-.35-.566-.683-.748-1.15-.137-.353-.3-.882-.344-1.857-.048-1.023-.058-1.351-.058-3.807v-.468c0-2.456.011-2.784.058-3.807.045-.975.207-1.504.344-1.857.182-.466.399-.8.748-1.15.35-.35.683-.566 1.15-.748.353-.137.882-.3 1.857-.344 1.054-.047 1.37-.058 4.04-.058h.08c2.597 0 2.917.01 3.96.058z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500 text-sm">
                <p>Все права защищены.</p>
            </div>
        </div>
    </footer>
    @include('footer')
</body>
</html>