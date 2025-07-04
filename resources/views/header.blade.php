<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAX - Премиальные автомобили из Китая</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        emax: {
                            purple: '#7e22ce',
                            lightpurple: '#a855f7',
                            dark: '#0f172a',
                            blue: '#3b82f6',
                            white: '#ffffff',
                            light: '#f8fafc'
                        }
                    },
                    fontFamily: {
                        'exo': ['"Exo 2"', 'sans-serif'],
                        'montserrat': ['Montserrat', 'sans-serif']
                    },
                    animation: {
                        'eye-glow': 'eyeGlow 3s infinite',
                        'pulse-light': 'pulseLight 4s infinite',
                        'float': 'float 6s infinite ease-in-out'
                    },
                    keyframes: {
                        eyeGlow: {
                            '0%, 100%': { opacity: '0.9', filter: 'drop-shadow(0 0 8px rgba(124, 58, 237, 0.7))' },
                            '50%': { opacity: '1', filter: 'drop-shadow(0 0 16px rgba(167, 139, 250, 0.9))' }
                        },
                        pulseLight: {
                            '0%, 100%': { opacity: '0.95' },
                            '50%': { opacity: '1' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600;700;800&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --emax-purple: #7e22ce;
            --emax-lightpurple: #a855f7;
            --emax-dark: #0f172a;
            --emax-blue: #3b82f6;
            --emax-white: #ffffff;
            --emax-light: #f8fafc;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            @apply bg-slate-50 text-slate-800 dark:bg-slate-900 dark:text-slate-100;
            padding-top: 84px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        .text-gradient {
            background: linear-gradient(90deg, var(--emax-purple), var(--emax-blue));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .glass-effect {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background: rgba(15, 23, 42, 0.85);
        }
        
        .glass-effect-light {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background: rgba(248, 250, 252, 0.85);
        }
        
        .dragon-eye {
            transition: all 0.3s ease;
        }
        
        .logo:hover .dragon-eye {
            transform: scale(1.05);
        }
        
        .nav-item {
            position: relative;
        }
        
        .nav-item::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--emax-lightpurple);
            transition: width 0.3s ease;
        }
        
        .nav-item:hover::after {
            width: 100%;
        }
        
        .dragon-tail {
            position: absolute;
            right: -60px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0;
            transition: all 0.5s ease;
            z-index: -1;
        }
        
        .scrolled .dragon-tail {
            opacity: 0.9;
            right: -40px;
        }
        
        @keyframes tailWave {
            0%, 100% { transform: translateY(-50%) rotate(0deg); }
            25% { transform: translateY(-50%) rotate(-5deg); }
            75% { transform: translateY(-50%) rotate(5deg); }
        }
        
        .animate-tail-wave {
            animation: tailWave 8s infinite ease-in-out;
        }
        
        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.6);
        }
        
        .mobile-menu-item {
            @apply py-3 px-6 rounded-lg transition-colors duration-300;
        }
        
        .mobile-menu-item:hover {
            @apply bg-emax-purple/10 text-emax-lightpurple;
        }
        
        .theme-switcher {
            @apply p-2 rounded-full bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-200 hover:bg-slate-300 dark:hover:bg-slate-600 transition-colors;
        }
    </style>
</head>
<body x-data="{ 
            mobileMenuOpen: false, 
            searchOpen: false, 
            catalogOpen: false,
            darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)
        }" 
      x-init="
        window.addEventListener('scroll', () => {
            $refs.header.classList.toggle('scrolled', window.scrollY > 50);
        });
        $watch('darkMode', value => {
            localStorage.setItem('darkMode', value);
            if (value) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });
        if (darkMode) document.documentElement.classList.add('dark');
      "
      :class="{ 'dark': darkMode }">
    <!-- Хедер -->
    <header x-ref="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 glass-effect dark:glass-effect border-b border-slate-800 dark:border-slate-700 h-21">
        <!-- Хвост дракона -->
        <div class="dragon-tail animate-tail-wave">
            <svg width="140" height="40" viewBox="0 0 140 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 20C30 10 60 15 90 20C110 25 130 30 140 20" 
                      stroke="url(#tail-gradient)" 
                      stroke-width="3" 
                      stroke-linecap="round"/>
                <path d="M10 25C35 15 65 20 95 25C115 30 135 35 140 25" 
                      stroke="url(#tail-gradient)" 
                      stroke-width="2" 
                      stroke-linecap="round"
                      stroke-opacity="0.7"/>
                <defs>
                    <linearGradient id="tail-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="var(--emax-purple)"/>
                        <stop offset="50%" stop-color="var(--emax-blue)"/>
                        <stop offset="100%" stop-color="var(--emax-purple)"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        
        <div class="container mx-auto px-6 h-full flex items-center justify-between">
            <!-- Логотип - глаз дракона -->
            <a href="/" class="logo flex items-center group" aria-label="EMAX - Премиальные автомобили из Китая">
                <div class="logo-mark mr-3 relative">
                    <svg class="w-10 h-10 dragon-eye animate-eye-glow" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Внешний круг глаза -->
                        <circle cx="25" cy="25" r="18" fill="url(#eye-outer)" stroke="var(--emax-blue)" stroke-width="1.2"/>
                        
                        <!-- Средний круг глаза -->
                        <circle cx="25" cy="25" r="12" fill="url(#eye-middle)"/>
                        
                        <!-- Зрачок -->
                        <circle cx="25" cy="25" r="6" fill="var(--emax-dark)" class="dark:fill-emax-light"/>
                        
                        <!-- Блики -->
                        <circle cx="28" cy="22" r="1.5" fill="var(--emax-white)"/>
                        <circle cx="23" cy="19" r="0.8" fill="var(--emax-white)" opacity="0.8"/>
                        
                        <!-- Эффект сияния -->
                        <circle cx="25" cy="25" r="18" fill="none" stroke="url(#eye-glow)" stroke-width="2" stroke-opacity="0.3" stroke-dasharray="0, 200" class="group-hover:stroke-dasharray-200,0 transition-all duration-1000"/>
                        
                        <!-- Чешуйки вокруг глаза -->
                        <path d="M5 25Q10 10 25 5Q40 10 45 25Q40 40 25 45Q10 40 5 25Z" 
                              stroke="var(--emax-blue)" 
                              stroke-width="0.8" 
                              fill="none"
                              stroke-dasharray="0, 150"
                              class="group-hover:stroke-dasharray-150,0 transition-all duration-700"/>
                        
                        <defs>
                            <radialGradient id="eye-outer" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(25 25) rotate(90) scale(18)">
                                <stop offset="0.3" stop-color="var(--emax-purple)"/>
                                <stop offset="1" stop-color="#4c1d95"/>
                            </radialGradient>
                            <radialGradient id="eye-middle" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(25 25) rotate(90) scale(12)">
                                <stop offset="0.4" stop-color="#8b5cf6"/>
                                <stop offset="1" stop-color="#5b21b6"/>
                            </radialGradient>
                            <radialGradient id="eye-glow" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(25 25) rotate(90) scale(18)">
                                <stop offset="0.5" stop-color="var(--emax-blue)"/>
                                <stop offset="1" stop-color="var(--emax-purple)"/>
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
                <span class="text-2xl md:text-3xl font-bold font-exo">
                    <span class="text-gradient">EMAX</span>
                </span>
            </a>

            <!-- Основная навигация (десктоп) -->
            <nav class="hidden lg:flex items-center space-x-8">
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button @click="open = !open" class="nav-item flex items-center space-x-1 text-white hover:text-emax-lightpurple transition-colors">
                        <span>Автомобили</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute left-0 mt-2 w-56 origin-top-left rounded-lg shadow-lg bg-slate-800 dark:bg-slate-700 ring-1 ring-slate-700 dark:ring-slate-600 focus:outline-none z-50">
                        <div class="py-1">
                            <a href="/catalog/sedans" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-700 dark:hover:bg-slate-600 hover:text-emax-lightpurple transition-colors">Седаны</a>
                            <a href="/catalog/crossovers" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-700 dark:hover:bg-slate-600 hover:text-emax-lightpurple transition-colors">Кроссоверы</a>
                            <a href="/catalog/suv" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-700 dark:hover:bg-slate-600 hover:text-emax-lightpurple transition-colors">Внедорожники</a>
                            <a href="/catalog/electro" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-700 dark:hover:bg-slate-600 hover:text-emax-lightpurple transition-colors">Электромобили</a>
                            <div class="border-t border-slate-700 dark:border-slate-600 my-1"></div>
                            <a href="/catalog" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-700 dark:hover:bg-slate-600 hover:text-emax-lightpurple transition-colors">Новые поступления</a>
                        </div>
                    </div>
                </div>
                
                <a href="/test-drive" class="nav-item text-white hover:text-emax-lightpurple transition-colors">Тест-драйв</a>
                <a href="/tradein" class="nav-item text-white hover:text-emax-lightpurple transition-colors">Trade-In</a>
                <a href="/onas" class="nav-item text-white hover:text-emax-lightpurple transition-colors">О компании</a>
            </nav>

            <!-- Правая часть хедера -->
            <div class="flex items-center space-x-4 md:space-x-6">
                <div class="hidden lg:flex items-center space-x-6">
                    <!-- Переключатель темы -->
                    <button @click="darkMode = !darkMode" class="theme-switcher" aria-label="Переключить тему">
                        <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                        <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </button>
                    
                    <a href="tel:+78005001234" class="flex items-center space-x-2 group">
                        <div class="p-1.5 rounded-full bg-emax-purple/10 group-hover:bg-emax-purple/20 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emax-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <span class="text-white font-medium hidden xl:inline">8 (800) 500-12-34</span>
                        <span class="text-white font-medium xl:hidden">Позвонить</span>
                    </a>
                    
                    <div class="flex space-x-3">
                        <a href="https://t.me/emax_autoru" class="p-1.5 rounded-full bg-slate-700 dark:bg-slate-600 hover:bg-emax-purple transition-colors text-white" aria-label="Telegram">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/78005001234" class="p-1.5 rounded-full bg-slate-700 dark:bg-slate-600 hover:bg-emax-purple transition-colors text-white" aria-label="WhatsApp">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.612-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Кнопка записи на тест-драйв -->
                <a href="/test-drive" class="hidden md:flex items-center space-x-2 bg-gradient-to-r from-emax-purple to-emax-blue hover:from-emax-lightpurple hover:to-emax-blue text-white px-4 py-2 rounded-lg font-medium transition-all whitespace-nowrap animate-pulse-light btn-glow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                    </svg>
                    <span class="hidden lg:inline">Запись на тест-драйв</span>
                    <span class="lg:hidden">Тест-драйв</span>
                </a>
                
                <!-- Кнопка мобильного меню -->
                <button @click="mobileMenuOpen = true" class="lg:hidden p-2 rounded-full hover:bg-slate-700 dark:hover:bg-slate-600 transition-colors text-white" aria-label="Меню">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Мобильное меню -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-in-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in-out duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-40 overflow-y-auto bg-slate-900/95 dark:bg-slate-800/95 backdrop-blur pt-24 pb-12 px-6"
         style="display: none;"
         @click.away="mobileMenuOpen = false">
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center space-x-4">
                <button @click="darkMode = !darkMode" class="theme-switcher" aria-label="Переключить тему">
                    <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                    <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>
            </div>
            <button @click="mobileMenuOpen = false" class="p-2 rounded-full hover:bg-slate-800 transition-colors text-white" aria-label="Закрыть меню">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <nav class="flex flex-col space-y-2 mb-8">
            <a href="/catalog" class="mobile-menu-item text-xl font-medium text-white hover:text-emax-lightpurple">
                <div class="flex items-center justify-between">
                    <span>Автомобили</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
            <a href="/test-drive" class="mobile-menu-item text-xl font-medium text-white hover:text-emax-lightpurple">
                <div class="flex items-center justify-between">
                    <span>Тест-драйв</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
            <a href="/credit" class="mobile-menu-item text-xl font-medium text-white hover:text-emax-lightpurple">
                <div class="flex items-center justify-between">
                    <span>Кредит и лизинг</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
            <a href="/tradein" class="mobile-menu-item text-xl font-medium text-white hover:text-emax-lightpurple">
                <div class="flex items-center justify-between">
                    <span>Trade-In</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
            <a href="/about" class="mobile-menu-item text-xl font-medium text-white hover:text-emax-lightpurple">
                <div class="flex items-center justify-between">
                    <span>О компании</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
        </nav>
        
        <div class="mb-8">
            <a href="tel:+78005001234" class="flex items-center space-x-4 mb-6">
                <div class="p-3 rounded-full bg-emax-purple/10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emax-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <span class="text-xl font-medium text-white">8 (800) 500-12-34</span>
            </a>
            
            <div class="grid grid-cols-2 gap-3">
                <a href="https://t.me/emax_autoru" class="flex items-center justify-center space-x-2 px-4 py-3 rounded-lg bg-slate-800 hover:bg-emax-purple transition-colors text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
                    </svg>
                    <span>Telegram</span>
                </a>
                <a href="https://wa.me/78005001234" class="flex items-center justify-center space-x-2 px-4 py-3 rounded-lg bg-slate-800 hover:bg-emax-purple transition-colors text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.612-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
        
        <a href="/test-drive" class="w-full flex items-center justify-center space-x-2 bg-gradient-to-r from-emax-purple to-emax-blue hover:from-emax-lightpurple hover:to-emax-blue text-white px-6 py-4 rounded-lg font-medium transition-all animate-pulse-light btn-glow">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
            </svg>
            <span class="font-semibold">Записаться на тест-драйв</span>
        </a>
    </div>

    <!-- Основной контент страницы -->
    <main>
        <!-- Здесь будет основной контент страницы -->
    </main>
</body>
</html>