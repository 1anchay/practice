<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAX - Китайские автомобили нового поколения</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        .dragon-eye {
    transition: all 0.3s ease;
}
.logo:hover .dragon-eye {
    transform: scale(1.05);
}
@keyframes eyeGlow {
    0%, 100% { opacity: 0.9; filter: drop-shadow(0 0 8px rgba(168, 85, 247, 0.7)); }
    50% { opacity: 1; filter: drop-shadow(0 0 16px rgba(167, 139, 250, 0.9)); }
}
.dragon-eye {
    animation: eyeGlow 3s infinite;
}
        .text-gradient {
            background: linear-gradient(90deg, #7e22ce, #3b82f6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .logo-circle {
            box-shadow: 0 0 0 2px rgba(123, 59, 246, 0.5);
        }
        .logo-circle:hover {
            box-shadow: 0 0 0 4px rgba(123, 59, 246, 0.8);
        }
        .footer-link {
            position: relative;
        }
        .footer-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: #a855f7;
            transition: width 0.3s ease;
        }
        .footer-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body>
    <footer class="bg-slate-900 text-white relative overflow-hidden">
        <!-- Декоративные элементы -->
        <div class="absolute -top-20 -right-20 w-40 h-40 rounded-full bg-purple-500/10 blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-60 h-60 rounded-full bg-blue-500/10 blur-3xl"></div>
        
        <div class="container mx-auto px-4 py-12 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Логотип и соцсети -->
<div class="flex flex-col">
    <div class="flex items-center mb-6 group relative">
        <!-- Глаз дракона (логотип) -->
        <div class="logo-circle mr-3 w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 bg-slate-800 overflow-hidden">
            <svg class="w-8 h-8 dragon-eye" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Внешний круг глаза -->
                <circle cx="25" cy="25" r="18" fill="url(#eye-outer)" stroke="#a855f7" stroke-width="1.2"/>
                
                <!-- Средний круг глаза -->
                <circle cx="25" cy="25" r="12" fill="url(#eye-middle)"/>
                
                <!-- Зрачок -->
                <circle cx="25" cy="25" r="6" fill="#0f172a"/>
                
                <!-- Блики -->
                <circle cx="28" cy="22" r="1.5" fill="#ffffff"/>
                <circle cx="23" cy="19" r="0.8" fill="#ffffff" opacity="0.8"/>
                
                <!-- Чешуйки вокруг глаза -->
                <path d="M5 25Q10 10 25 5Q40 10 45 25Q40 40 25 45Q10 40 5 25Z" 
                      stroke="#a855f7" 
                      stroke-width="0.8" 
                      fill="none"
                      stroke-dasharray="0, 150"
                      class="group-hover:stroke-dasharray-150,0 transition-all duration-700"/>
                
                <defs>
                    <radialGradient id="eye-outer" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(25 25) rotate(90) scale(18)">
                        <stop offset="0.3" stop-color="#7e22ce"/>
                        <stop offset="1" stop-color="#4c1d95"/>
                    </radialGradient>
                    <radialGradient id="eye-middle" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(25 25) rotate(90) scale(12)">
                        <stop offset="0.4" stop-color="#8b5cf6"/>
                        <stop offset="1" stop-color="#5b21b6"/>
                    </radialGradient>
                </defs>
            </svg>
        </div>
        
        <!-- Название с градиентом -->
        <span class="text-2xl font-bold text-gradient font-exo">EMAX</span>
        
        <!-- Хвост дракона (декоративный элемент) -->
        <svg class="absolute -right-10 -bottom-2 w-20 h-20 text-purple-500 opacity-70 group-hover:opacity-90 transition-opacity duration-300" viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 20C30 10 60 15 90 20" 
                  stroke="currentColor" 
                  stroke-width="3" 
                  stroke-linecap="round"/>
            <path d="M10 25C35 15 65 20 95 25" 
                  stroke="currentColor" 
                  stroke-width="2" 
                  stroke-linecap="round"
                  stroke-opacity="0.7"/>
            <!-- Китайские узоры на кончике хвоста -->
            <path d="M90 20L95 18L100 20L95 22L90 20Z" fill="currentColor"/>
            <path d="M85 22L88 20L85 18L82 20L85 22Z" fill="currentColor" opacity="0.7"/>
        </svg>
    </div>
    
    <p class="text-slate-400 mb-6">Премиальные автомобили из Китая</p>
    
    <!-- Остальной код соцсетей и кнопок остается без изменений -->
    <div class="flex space-x-4 mb-6">
        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 hover:bg-purple-600 transition-all duration-300 flex items-center justify-center text-white hover:scale-110">
            <i class="fab fa-vk text-lg"></i>
        </a>
        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 hover:bg-pink-600 transition-all duration-300 flex items-center justify-center text-white hover:scale-110">
            <i class="fab fa-instagram text-lg"></i>
        </a>
        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 hover:bg-red-600 transition-all duration-300 flex items-center justify-center text-white hover:scale-110">
            <i class="fab fa-youtube text-lg"></i>
        </a>
    </div>
    
    <div class="space-y-3">
        <a href="https://wa.me/74951234567" class="flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 rounded-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <i class="fab fa-whatsapp mr-2 text-lg"></i>
            <span>WhatsApp</span>
        </a>
        <a href="https://t.me/emax_autoru" class="flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <i class="fab fa-telegram mr-2 text-lg"></i>
            <span>Telegram</span>
        </a>
    </div>
</div>

                <!-- Навигация -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-white">
                        Навигация
                    </h3>
                    <ul class="space-y-3">
                        <li><a href="/" class="footer-link text-slate-400 hover:text-white transition-colors duration-300">
                            Главная
                        </a></li>
                        <li><a href="/catalog" class="footer-link text-slate-400 hover:text-white transition-colors duration-300">
                            Каталог
                        </a></li>
                        <li><a href="/test-drive" class="footer-link text-slate-400 hover:text-white transition-colors duration-300">
                            Тест-драйв
                        </a></li>
                        <li><a href="/about" class="footer-link text-slate-400 hover:text-white transition-colors duration-300">
                            О компании
                        </a></li>
                        <li><a href="/contacts" class="footer-link text-slate-400 hover:text-white transition-colors duration-300">
                            Контакты
                        </a></li>
                    </ul>
                </div>

                <!-- Контакты -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-white">
                        Контакты
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-400 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>г. Москва, ул. Автодилерская, 12</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-400 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <a href="tel:+74951234567" class="footer-link hover:text-purple-400 transition-colors duration-300">+7 (495) 123-45-67</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-400 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <a href="mailto:info@emax-auto.ru" class="footer-link hover:text-purple-400 transition-colors duration-300">info@emax-auto.ru</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-400 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Ежедневно: 9:00-21:00</span>
                        </li>
                        <li class="mt-6">
                            <button onclick="window.open('https://yandex.ru/maps/?text=EMAX%20Москва%20ул.%20Автодилерская%2012', '_blank')" class="flex items-center px-4 py-2 bg-slate-800 hover:bg-slate-700 rounded-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                                <svg class="w-5 h-5 mr-2 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                                <span>Как добраться</span>
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Новости и акции -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-white">
                        Новости и акции
                    </h3>
                    <p class="text-slate-400 mb-4">Подпишитесь на рассылку, чтобы первыми узнавать о новых поступлениях и специальных предложениях</p>
                    
                    <form class="space-y-4">
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <input id="email" name="email" type="email" required class="block w-full pl-10 pr-3 py-2 bg-slate-800 border border-slate-700 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Ваш email">
                            </div>
                        </div>
                        <button type="submit" class="w-full flex items-center justify-center px-4 py-2 bg-gradient-to-r from-purple-600 to-blue-500 rounded-lg text-white font-medium hover:from-purple-700 hover:to-blue-600 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                            <span>Подписаться</span>
                            <svg class="w-5 h-5 ml-2 animate-float" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Нижняя часть -->
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="text-slate-400 text-sm mb-4 md:mb-0">
                    © 2025 EMAX. Все права защищены.
                </div>
                <div class="flex flex-wrap justify-center gap-4 md:gap-6">
                    <a href="/politika" class="footer-link text-slate-400 hover:text-white transition-colors duration-300 text-sm">Политика конфиденциальности</a>
                    <a href="/agreement" class="footer-link text-slate-400 hover:text-white transition-colors duration-300 text-sm">Пользовательское соглашение</a>
                    <a href="/sitemap" class="footer-link text-slate-400 hover:text-white transition-colors duration-300 text-sm">Карта сайта</a>
                </div>
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="hidden md:flex items-center justify-center w-10 h-10 bg-slate-800 hover:bg-purple-600 rounded-full transition-all duration-300 mt-4 md:mt-0 hover:shadow-lg hover:-translate-y-1">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                    </svg>
                </button>
            </div>
        </div>
    </footer>

    <script>
        // Показывать кнопку "Наверх" при прокрутке
        window.addEventListener('scroll', function() {
            const backToTop = document.querySelector('button[onclick="window.scrollTo({top: 0, behavior: \'smooth\'})"]');
            if (backToTop) {
                if (window.pageYOffset > 300) {
                    backToTop.classList.remove('hidden');
                    backToTop.classList.add('flex');
                } else {
                    backToTop.classList.add('hidden');
                    backToTop.classList.remove('flex');
                }
            }
        });
    </script>
</body>
</html>