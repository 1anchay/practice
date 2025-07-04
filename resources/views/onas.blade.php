<!DOCTYPE html>
<html lang="ru">
       @include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAX - О компании | Китайские автомобили нового поколения</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1a1a1a;
            --secondary: #252525;
            --accent: #00a8ff;
            --accent-hover: #0095e0;
            --cta-color: rgba(0, 255, 136, 0.15);
            --cta-hover: rgba(0, 255, 136, 0.25);
            --text: #ffffff;
            --text-secondary: #cccccc;
            --section-bg: #121212;
            --card-bg: rgba(30, 30, 30, 0.7);
            --header-bg: rgba(26, 26, 26, 0.98);
            --glass-effect: rgba(30, 30, 30, 0.7);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Exo 2', sans-serif;
            background-color: var(--primary);
            color: var(--text);
            line-height: 1.6;
        }

        /* Общие стили */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 80px 0;
            position: relative;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--accent), #00ffaa);
            border-radius: 3px;
        }

        .btn {
            display: inline-block;
            background-color: var(--cta-color);
            color: var(--text);
            border: 1px solid rgba(0, 255, 136, 0.3);
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            backdrop-filter: blur(5px);
        }

        .btn:hover {
            background-color: var(--cta-hover);
            border-color: rgba(0, 255, 136, 0.5);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 255, 136, 0.2);
        }

        .btn-accent {
            background: linear-gradient(90deg, var(--accent), #00ffaa);
            color: #000;
            font-weight: 700;
        }

        .btn-accent:hover {
            background: linear-gradient(90deg, #0095e0, #00e676);
        }

        /* Hero секция */
        .hero-about {
            height: 70vh;
            min-height: 500px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-about::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5));
            z-index: 1;
        }

        .hero-about-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.2;
            background: linear-gradient(90deg, #fff, #ddd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        /* О компании */
        .about-company {
            background-color: var(--section-bg);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .stat-card {
            background-color: var(--card-bg);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            border-color: rgba(0, 168, 255, 0.3);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--accent), #00ffaa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .stat-text {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .brands {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .brand-item {
            height: 60px;
            opacity: 0.7;
            transition: opacity 0.3s ease;
            filter: grayscale(100%) brightness(2);
        }

        .brand-item:hover {
            opacity: 1;
            filter: none;
        }

        /* Преимущества */
        .advantages {
            position: relative;
            overflow: hidden;
        }

        .advantages::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1593941707882-a5bbbfd5a1a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') center/cover no-repeat;
            opacity: 0.1;
            z-index: -1;
        }

        .advantages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .advantage-card {
            background-color: var(--card-bg);
            border-radius: 10px;
            padding: 30px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .advantage-card:hover {
            transform: translateY(-5px);
            border-color: rgba(0, 168, 255, 0.3);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .advantage-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--accent);
        }

        .advantage-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* Команда */
        .team {
            background-color: var(--section-bg);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .team-member {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-photo {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }

        .team-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(0deg, rgba(0,0,0,0.9), transparent);
            padding: 20px;
            padding-top: 40px;
        }

        .team-name {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .team-position {
            color: var(--accent);
            font-size: 0.9rem;
        }

        /* Процесс работы */
        .process-steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 50px;
            position: relative;
        }

        .process-steps::before {
            content: '';
            position: absolute;
            top: 50px;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent), transparent);
            z-index: 0;
        }

        .step {
            flex: 1;
            min-width: 200px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--accent), #00ffaa);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: #000;
            margin: 0 auto 20px;
        }

        .step-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Отзывы */
        .reviews {
            background-color: var(--section-bg);
        }

        .reviews-slider {
            display: flex;
            gap: 30px;
            overflow-x: auto;
            padding: 20px 0;
            scroll-snap-type: x mandatory;
        }

        .review-card {
            min-width: 350px;
            background-color: var(--card-bg);
            border-radius: 10px;
            padding: 30px;
            scroll-snap-align: start;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .review-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
        }

        .review-text::before {
            content: '"';
            font-size: 4rem;
            position: absolute;
            top: -20px;
            left: -15px;
            opacity: 0.1;
            line-height: 1;
        }

        .review-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-photo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .author-name {
            font-weight: 600;
        }

        /* Галерея */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 40px;
        }

        .gallery-item {
            height: 200px;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.03);
        }

        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.1);
        }

        /* Контакты */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .contact-card {
            background-color: var(--card-bg);
            border-radius: 10px;
            padding: 30px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .contact-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--accent);
        }

        .contact-list {
            list-style: none;
        }

        .contact-item {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Адаптивность */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .section {
                padding: 60px 0;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .process-steps {
                flex-direction: column;
                align-items: center;
                gap: 40px;
            }
            
            .process-steps::before {
                display: none;
            }
            
            .step {
                max-width: 300px;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .stat-card, .advantage-card, .review-card {
                padding: 20px;
            }
        }

        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 1s ease forwards;
        }

        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }
    </style>
</head>
<body>
    <!-- Здесь будет хедер (вставьте код из предыдущего ответа) -->

    <!-- Hero секция -->
    <section class="hero-about">
        <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1583&q=80" alt="Шоурум EMAX" class="hero-about-bg">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title fade-in">EMAX — ваш проводник в мир китайского автопрома</h1>
                <p class="hero-subtitle fade-in delay-1">Мы работаем прозрачно. С 2018 года доставили более 1000 авто по России.</p>
                <a href="#catalog" class="btn btn-accent fade-in delay-2">Перейти в каталог</a>
            </div>
        </div>
    </section>

   <!-- О компании -->
<section class="bg-gray-900 py-20 px-4 relative overflow-hidden">
    <!-- Китайские декоративные элементы -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <div class="absolute top-20 right-10 text-red-500 text-6xl">誠</div>
        <div class="absolute bottom-20 left-20 text-red-500 text-6xl">信</div>
    </div>
    
    <div class="container mx-auto max-w-7xl relative z-10">
        <!-- Заголовок с анимацией -->
        <div x-data="{ title: 'О компании', displayedTitle: '', index: 0 }" 
             x-init="() => {
                 const animateTitle = () => {
                     if (this.index < this.title.length) {
                         this.displayedTitle += this.title.charAt(this.index);
                         this.index++;
                         setTimeout(animateTitle, 100);
                     }
                 }
                 animateTitle();
             }" 
             class="mb-12 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4" x-text="displayedTitle"></h2>
            <div class="w-24 h-1 bg-red-500 rounded-full mx-auto"></div>
            
            <p class="mt-6 text-gray-300 text-lg max-w-3xl mx-auto">
                EMAX — это команда профессионалов, которая уже более 5 лет помогает клиентам приобретать качественные китайские автомобили по выгодным ценам. 
                Мы напрямую сотрудничаем с ведущими заводами Китая, что позволяет предлагать лучшие условия на рынке.
            </p>
        </div>

        <!-- Статистика -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16" x-data="{
            stats: [
                { number: 5, suffix: '+', text: 'Лет на рынке', color: 'bg-red-500' },
                { number: 1000, suffix: '+', text: 'Проданных авто', color: 'bg-blue-500' },
                { number: 24, suffix: '/10', text: 'Поддержка клиентов', color: 'bg-green-500' },
                { number: 15, suffix: '+', text: 'Брендов в каталоге', color: 'bg-yellow-500' }
            ],
            animatedNumbers: [5, 589, 9, 42],
            animate() {
                this.stats.forEach((stat, index) => {
                    const target = stat.number;
                    const step = target / 30;
                    let current = 0;
                    
                    const interval = setInterval(() => {
                        current += step;
                        if (current >= target) {
                            current = target;
                            clearInterval(interval);
                        }
                        this.animatedNumbers[index] = Math.floor(current);
                    }, 20);
                });
            }
        }" x-intersect.once="animate">
            <template x-for="(stat, index) in stats" :key="index">
                <div class="bg-gray-800 rounded-xl p-6 text-center transform transition-all duration-500 hover:scale-105 hover:shadow-lg"
                     :class="'hover:shadow-' + stat.color.split('-')[1] + '/20'">
                    <div class="text-4xl font-bold text-white mb-2" x-text="animatedNumbers[index] + stat.suffix"></div>
                    <div class="text-gray-400" x-text="stat.text"></div>
                    <div class="w-12 h-1 rounded-full mx-auto mt-4" :class="stat.color"></div>
                </div>
            </template>
        </div>
        
        <!-- Бренды -->
        <h3 class="text-center mt-20 text-xl text-gray-300 font-medium">Мы официальные дилеры ведущих китайских брендов:</h3>
        <div class="mt-8 flex flex-wrap justify-center gap-8 md:gap-12" x-data="{
            brands: [
                { name: 'Chery', logo: 'images/chery.png' },
                { name: 'Geely', logo: 'images/geely.png' },
                { name: 'Haval', logo: 'images/haval.png' },
                { name: 'JAC', logo: 'images/jac.png' },
                { name: 'Changan', logo: 'images/changan.jpg' }
            ]
        }">
            <template x-for="brand in brands" :key="brand.name">
                <div class="relative group">
                    <img :src="brand.logo" :alt="brand.name" 
                         class="h-12 md:h-16 opacity-80 grayscale group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap" x-text="brand.name"></div>
                </div>
            </template>
        </div>
    </div>
</section>

<!-- Преимущества -->
<section class="bg-gray-800 py-20 px-4 relative">
    <!-- Фоновые элементы -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <div class="absolute top-1/3 left-10 text-red-500 text-6xl">优</div>
        <div class="absolute bottom-1/4 right-20 text-red-500 text-6xl">势</div>
    </div>
    
    <div class="container mx-auto max-w-7xl relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Почему выбирают нас</h2>
            <div class="w-24 h-1 bg-red-500 rounded-full mx-auto"></div>
            <p class="mt-6 text-gray-300 text-lg max-w-3xl mx-auto">
                Мы создали сервис, который делает покупку китайского автомобиля простой, безопасной и выгодной.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data="{
            advantages: [
                { 
                    icon: 'handshake', 
                    title: 'Работаем без посредников', 
                    text: 'Прямые поставки с заводов позволяют нам предлагать лучшие цены без переплат.' 
                },
                { 
                    icon: 'user-circle', 
                    title: 'Индивидуальный подход', 
                    text: 'Персональный менеджер сопровождает вас на всех этапах покупки.' 
                },
                { 
                    icon: 'document-text', 
                    title: 'Юридически чистая сделка', 
                    text: 'Полный пакет документов, официальная гарантия и страхование.' 
                },
                { 
                    icon: 'support', 
                    title: 'Поддержка на всех этапах', 
                    text: 'Консультации, помощь с оформлением, сервисное обслуживание.' 
                },
                { 
                    icon: 'shield-check', 
                    title: 'Гарантия 3 года', 
                    text: 'Официальная гарантия производителя и расширенные сервисные программы.' 
                },
                { 
                    icon: 'truck', 
                    title: 'Доставка по всей России', 
                    text: 'Собственный логистический центр и проверенные транспортные компании.' 
                }
            ]
        }">
            <template x-for="(advantage, index) in advantages" :key="index">
                <div class="bg-gray-700 rounded-xl p-6 relative overflow-hidden group transition-all duration-500 hover:bg-gray-600 hover:shadow-lg hover:shadow-red-500/10"
                     x-intersect="$el.classList.add('animate-fadeIn')">
                    <!-- Анимированный фон при наведении -->
                    <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Иконка -->
                    <div class="w-14 h-14 bg-red-500 rounded-lg flex items-center justify-center text-white mb-4 group-hover:bg-red-600 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="advantage.icon === 'handshake'" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                            <path x-show="advantage.icon === 'user-circle'" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            <path x-show="advantage.icon === 'document-text'" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            <path x-show="advantage.icon === 'support'" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            <path x-show="advantage.icon === 'shield-check'" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            <path x-show="advantage.icon === 'truck'" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0zM12 16h4m-8-4V4m0 0H5m2 0h5m0 0v12" />
                        </svg>
                    </div>
                    
                    <!-- Контент -->
                    <h3 class="text-xl font-bold text-white mb-2" x-text="advantage.title"></h3>
                    <p class="text-gray-300" x-text="advantage.text"></p>
                    
                    <!-- Кнопка при наведении -->
                    <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>

<!-- Команда -->
<section class="bg-gray-900 py-20 px-4 relative">
    <!-- Фоновые элементы -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <div class="absolute top-1/4 right-10 text-red-500 text-6xl">团</div>
        <div class="absolute bottom-1/3 left-20 text-red-500 text-6xl">队</div>
    </div>
    
    <div class="container mx-auto max-w-7xl relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Наша команда</h2>
            <div class="w-24 h-1 bg-red-500 rounded-full mx-auto"></div>
            <p class="mt-6 text-gray-300 text-lg max-w-3xl mx-auto">
                Профессионалы с многолетним опытом работы с китайскими автомобилями. Мы знаем все тонкости и готовы поделиться знаниями с вами.
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8" x-data="{
            team: [
                { 
                    name: 'Гринченко Евгений', 
                    position: 'Основатель, генеральный директор', 
                    photo: 'images/person/evgen.jpg',
                    social: ['facebook', 'twitter', 'linkedin']
                },
                { 
                    name: 'Живоглядов Иван', 
                    position: 'Финансовый директор', 
                    photo: 'images/person/ivan.jfif',
                    social: ['instagram', 'twitter', 'linkedin']
                },
                { 
                    name: 'Максим ', 
                    position: 'Технический специалист', 
                    photo: 'images/person/max.jpg',
                    social: ['github', 'twitter', 'linkedin']
                },
                { 
                    name: 'Евгений Белоконов', 
                    position: 'Менеджер по продажам', 
                    photo: 'images/person/evgen2.jpg',
                    social: ['instagram', 'facebook', 'linkedin']
                }
            ],
            activeMember: null,
            showBio(member) {
                this.activeMember = member;
                this.$nextTick(() => {
                    this.$refs.modal.classList.remove('opacity-0');
                    this.$refs.modal.classList.remove('scale-95');
                });
            },
            closeBio() {
                this.$refs.modal.classList.add('opacity-0');
                this.$refs.modal.classList.add('scale-95');
                setTimeout(() => {
                    this.activeMember = null;
                }, 300);
            }
        }">
            <template x-for="member in team" :key="member.name">
                <div class="bg-gray-800 rounded-xl overflow-hidden group transition-all duration-500 hover:shadow-lg hover:shadow-red-500/10">
                    <div class="relative overflow-hidden">
                        <img :src="member.photo" :alt="member.name" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <button @click="showBio(member)" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors duration-300">
                                Подробнее
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white" x-text="member.name"></h3>
                        <p class="text-gray-400" x-text="member.position"></p>
                        <div class="flex mt-4 space-x-3">
                            <template x-for="social in member.social" :key="social">
                                <a href="#" class="text-gray-500 hover:text-red-500 transition-colors duration-300">
                                    <svg x-show="social === 'facebook'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                    </svg>
                                    <svg x-show="social === 'twitter'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                    <svg x-show="social === 'linkedin'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                    <svg x-show="social === 'instagram'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                    <svg x-show="social === 'github'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                            </template>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        
        <!-- Модальное окно с биографией -->
        <div x-show="activeMember" x-ref="modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 opacity-0 scale-95 transition-all duration-300" style="display: none;">
            <div class="bg-gray-800 rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto" @click.away="closeBio">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-white" x-text="activeMember?.name"></h3>
                            <p class="text-red-500" x-text="activeMember?.position"></p>
                        </div>
                        <button @click="closeBio" class="text-gray-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="md:col-span-1">
                            <img :src="activeMember?.photo" :alt="activeMember?.name" class="w-full rounded-lg">
                            <div class="flex justify-center mt-4 space-x-4">
                                <template x-for="social in activeMember?.social" :key="social">
                                    <a href="#" class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                        <svg x-show="social === 'facebook'" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                        </svg>
                                        <svg x-show="social === 'twitter'" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                        </svg>
                                        <svg x-show="social === 'linkedin'" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                        <svg x-show="social === 'instagram'" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                        <svg x-show="social === 'github'" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </a>
                                </template>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <div class="prose prose-invert max-w-none">
                                <template x-if="activeMember?.name === 'Алексей Петров'">
                                    <div>
                                        <p>Основатель компании EMAX с более чем 10-летним опытом работы в автомобильном бизнесе. Специализируется на китайском авторынке с 2015 года.</p>
                                        <p class="mt-4">Лично посещал заводы Chery, Geely и Haval, знает все тонкости производства и логистики. Отвечает за стратегическое развитие компании и партнерские отношения.</p>
                                        <div class="mt-6 border-t border-gray-700 pt-4">
                                            <h4 class="text-lg font-semibold text-white">Ключевые навыки:</h4>
                                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                                <li>Переговоры с производителями</li>
                                                <li>Стратегическое планирование</li>
                                                <li>Анализ рынка</li>
                                            </ul>
                                        </div>
                                    </div>
                                </template>
                                <template x-if="activeMember?.name === 'Елена Смирнова'">
                                    <div>
                                        <p>Финансовый директор с 8-летним опытом работы в автомобильной отрасли. Ранее работала в крупном автохолдинге.</p>
                                        <p class="mt-4">Разработала уникальную систему финансирования покупок, которая позволяет нашим клиентам получать лучшие условия кредитования.</p>
                                        <div class="mt-6 border-t border-gray-700 pt-4">
                                            <h4 class="text-lg font-semibold text-white">Ключевые навыки:</h4>
                                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                                <li>Финансовый анализ</li>
                                                <li>Кредитные программы</li>
                                                <li>Бюджетирование</li>
                                            </ul>
                                        </div>
                                    </div>
                                </template>
                                <template x-if="activeMember?.name === 'Дмитрий Иванов'">
                                    <div>
                                        <p>Главный технический специалист с 12-летним опытом работы с китайскими автомобилями. Прошел обучение на заводах Geely и Chery.</p>
                                        <p class="mt-4">Контролирует качество всех поставляемых автомобилей, проводит предпродажную подготовку и обучение сервисных центров.</p>
                                        <div class="mt-6 border-t border-gray-700 pt-4">
                                            <h4 class="text-lg font-semibold text-white">Ключевые навыки:</h4>
                                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                                <li>Диагностика автомобилей</li>
                                                <li>Техническая экспертиза</li>
                                                <li>Обучение персонала</li>
                                            </ul>
                                        </div>
                                    </div>
                                </template>
                                <template x-if="activeMember?.name === 'Ольга Кузнецова'">
                                    <div>
                                        <p>Топ-менеджер по продажам с 7-летним опытом. В команде EMAX с основания компании.</p>
                                        <p class="mt-4">Разработала систему индивидуального сопровождения клиентов, которая обеспечивает 95% удовлетворенности покупателей.</p>
                                        <div class="mt-6 border-t border-gray-700 pt-4">
                                            <h4 class="text-lg font-semibold text-white">Ключевые навыки:</h4>
                                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                                <li>Продажи премиум-класса</li>
                                                <li>Клиентский сервис</li>
                                                <li>Управление командой</li>
                                            </ul>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Процесс работы -->
<section class="bg-gray-800 py-20 px-4 relative">
    <!-- Фоновые элементы -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <div class="absolute top-1/3 right-20 text-red-500 text-6xl">流</div>
        <div class="absolute bottom-1/4 left-10 text-red-500 text-6xl">程</div>
    </div>
    
    <div class="container mx-auto max-w-7xl relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Как мы работаем</h2>
            <div class="w-24 h-1 bg-red-500 rounded-full mx-auto"></div>
            <p class="mt-6 text-gray-300 text-lg max-w-3xl mx-auto">
                Всего 4 простых шага от заявки до получения вашего нового автомобиля.
            </p>
        </div>
        
        <div class="relative">
            <!-- Линия процесса -->
            <div class="absolute left-1/2 top-0 h-full w-1 bg-gray-700 transform -translate-x-1/2 hidden md:block"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8" x-data="{
                steps: [
                    { 
                        number: '1', 
                        title: 'Заявка', 
                        text: 'Оставьте заявку на сайте или по телефону',
                        icon: 'document-text'
                    },
                    { 
                        number: '2', 
                        title: 'Подбор авто', 
                        text: 'Мы подберем оптимальный вариант под ваш бюджет',
                        icon: 'search-circle'
                    },
                    { 
                        number: '3', 
                        title: 'Оплата и договор', 
                        text: 'Заключаем договор с прозрачными условиями',
                        icon: 'currency-dollar'
                    },
                    { 
                        number: '4', 
                        title: 'Доставка и передача', 
                        text: 'Доставляем авто и передаем вам с полным пакетом документов',
                        icon: 'truck'
                    }
                ],
                activeStep: 0,
                nextStep() {
                    this.activeStep = (this.activeStep + 1) % this.steps.length;
                },
                prevStep() {
                    this.activeStep = (this.activeStep - 1 + this.steps.length) % this.steps.length;
                }
            }">
                <template x-for="(step, index) in steps" :key="index">
                    <div class="relative" :class="{ 
                        'md:mt-0': index === 0 || index === 1,
                        'md:mt-20': index === 2 || index === 3,
                        'md:ml-auto': index % 2 !== 0
                    }">
                        <!-- Точка на линии для десктопа -->
                        <div class="absolute left-1/2 top-1/2 w-4 h-4 bg-red-500 rounded-full transform -translate-x-1/2 -translate-y-1/2 hidden md:block"></div>
                        
                        <div class="bg-gray-700 rounded-xl p-6 h-full transform transition-all duration-500 hover:scale-105 hover:shadow-lg hover:shadow-red-500/10"
                             :class="{ 'ring-2 ring-red-500': activeStep === index }"
                             @mouseenter="activeStep = index">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center text-white font-bold text-xl mb-4 mx-auto md:mx-0" x-text="step.number"></div>
                            <div class="text-center md:text-left">
                                <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center text-red-500 mb-4 mx-auto md:mx-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path x-show="step.icon === 'document-text'" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        <path x-show="step.icon === 'search-circle'" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        <path x-show="step.icon === 'currency-dollar'" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        <path x-show="step.icon === 'truck'" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0zM12 16h4m-8-4V4m0 0H5m2 0h5m0 0v12" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-2" x-text="step.title"></h3>
                                <p class="text-gray-300" x-text="step.text"></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            
            <!-- Навигация для мобильных -->
            <div class="flex justify-center mt-8 space-x-4 md:hidden">
                <button @click="prevStep" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center text-white hover:bg-gray-600 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="flex space-x-2">
                    <template x-for="(step, index) in steps" :key="index">
                        <button @click="activeStep = index" class="w-3 h-3 rounded-full transition-all duration-300"
                                :class="activeStep === index ? 'bg-red-500 w-6' : 'bg-gray-600'"></button>
                    </template>
                </div>
                <button @click="nextStep" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center text-white hover:bg-gray-600 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Кнопка CTA -->
        <div class="mt-16 text-center">
            <button class="relative px-8 py-4 bg-red-600 text-white font-medium rounded-full overflow-hidden group transform transition-all duration-500 hover:scale-105">
                <span class="relative z-10 flex items-center">
                    <span>Оставить заявку</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </span>
                <span class="absolute inset-0 bg-red-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                <span class="absolute inset-0 border-2 border-red-500 rounded-full transform scale-110 opacity-0 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300"></span>
            </button>
        </div>
    </div>
</section>

<!-- Анимации -->
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
    animation: fadeIn 0.6s ease-out forwards;
}

.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }
</style>

    <section class="bg-gray-900 py-20 px-4 relative overflow-hidden">
    <!-- Китайские декоративные элементы -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <div class="absolute top-10 left-10 text-red-500 text-6xl">龍</div>
        <div class="absolute bottom-20 right-20 text-red-500 text-6xl">福</div>
        <div class="absolute top-1/2 left-1/4 text-red-500 text-8xl">車</div>
    </div>
    
    <div class="container mx-auto max-w-7xl relative z-10">
        <!-- Заголовок с анимацией -->
        <div x-data="{ title: 'Отзывы клиентов', displayedTitle: '', index: 0 }" 
             x-init="() => {
                 const animateTitle = () => {
                     if (this.index < this.title.length) {
                         this.displayedTitle += this.title.charAt(this.index);
                         this.index++;
                         setTimeout(animateTitle, 100);
                     }
                 }
                 animateTitle();
             }" 
             class="mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4" x-text="displayedTitle"></h2>
            <div class="w-24 h-1 bg-red-500 rounded-full"></div>
            
            <p class="mt-6 text-gray-300 text-lg max-w-3xl">
                Более 500 довольных клиентов по всей России. Вот что они говорят о нас.
            </p>
        </div>

        <!-- Карусель отзывов -->
        <div x-data="{
            activeReview: 0,
            reviews: [
                {
                    text: 'Покупал Chery Tiggo 8 Pro через EMAX. Отличный сервис, все четко по договору. Машина приехала даже раньше обещанного срока. Отдельное спасибо менеджеру Ольге за терпение и ответы на все мои вопросы.',
                    author: 'Игорь С.',
                    car: 'Chery Tiggo 8 Pro',
                    photo: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80'
                },
                {
                    text: 'Долго сомневался насчет китайских авто, но команда EMAX подробно все объяснила, помогла с выбором. Взяли Geely Coolray - не нарадуемся! Качество на уровне, сервис отличный. Теперь только к ним!',
                    author: 'Антон М.',
                    car: 'Geely Coolray',
                    photo: 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80'
                },
                {
                    text: 'Работаем с EMAX уже третий год. Закупаем авто для нашего таксопарка. Ни разу не подвели, все машины в идеальном состоянии, документы чистые. Цены ниже, чем у официальных дилеров. Рекомендую!',
                    author: 'Елена К.',
                    car: 'Haval Jolion',
                    photo: 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80'
                }
            ],
            next() {
                this.activeReview = (this.activeReview + 1) % this.reviews.length;
            },
            prev() {
                this.activeReview = (this.activeReview - 1 + this.reviews.length) % this.reviews.length;
            }
        }" class="relative">
            <!-- Основной отзыв -->
            <div class="bg-gray-800 rounded-xl p-8 shadow-2xl transform transition-all duration-500 hover:scale-[1.02] hover:shadow-red-500/20 relative overflow-hidden">
                <!-- Китайский узор -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-red-500 opacity-10 -rotate-45 translate-x-16 -translate-y-16"></div>
                
                <div x-show.transition.opacity="activeReview === 0" class="flex flex-col h-full">
                    <div class="flex-1">
                        <div class="text-white text-lg mb-6" x-text="reviews[0].text"></div>
                    </div>
                    <div class="flex items-center mt-6">
                        <img :src="reviews[0].photo" alt="" class="w-14 h-14 rounded-full object-cover border-2 border-red-500">
                        <div class="ml-4">
                            <div class="text-white font-medium" x-text="reviews[0].author"></div>
                            <div class="text-gray-400 text-sm" x-text="reviews[0].car"></div>
                        </div>
                        <div class="ml-auto text-red-500 text-4xl">”</div>
                    </div>
                </div>
                
                <div x-show.transition.opacity="activeReview === 1" class="flex flex-col h-full">
                    <div class="flex-1">
                        <div class="text-white text-lg mb-6" x-text="reviews[1].text"></div>
                    </div>
                    <div class="flex items-center mt-6">
                        <img :src="reviews[1].photo" alt="" class="w-14 h-14 rounded-full object-cover border-2 border-red-500">
                        <div class="ml-4">
                            <div class="text-white font-medium" x-text="reviews[1].author"></div>
                            <div class="text-gray-400 text-sm" x-text="reviews[1].car"></div>
                        </div>
                        <div class="ml-auto text-red-500 text-4xl">”</div>
                    </div>
                </div>
                
                <div x-show.transition.opacity="activeReview === 2" class="flex flex-col h-full">
                    <div class="flex-1">
                        <div class="text-white text-lg mb-6" x-text="reviews[2].text"></div>
                    </div>
                    <div class="flex items-center mt-6">
                        <img :src="reviews[2].photo" alt="" class="w-14 h-14 rounded-full object-cover border-2 border-red-500">
                        <div class="ml-4">
                            <div class="text-white font-medium" x-text="reviews[2].author"></div>
                            <div class="text-gray-400 text-sm" x-text="reviews[2].car"></div>
                        </div>
                        <div class="ml-auto text-red-500 text-4xl">”</div>
                    </div>
                </div>
            </div>
            
            <!-- Навигация -->
            <div class="flex justify-center mt-8 space-x-3">
                <template x-for="(review, index) in reviews" :key="index">
                    <button @click="activeReview = index" 
                            class="w-3 h-3 rounded-full transition-all duration-300"
                            :class="activeReview === index ? 'bg-red-500 w-6' : 'bg-gray-600 hover:bg-gray-500'"
                            aria-label="Перейти к отзыву"></button>
                </template>
            </div>
            
            <!-- Кнопки навигации -->
            <button @click="prev()" 
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-gray-800/80 hover:bg-gray-700/90 text-white p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110 hover:text-red-400 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            
            <button @click="next()" 
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-gray-800/80 hover:bg-gray-700/90 text-white p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110 hover:text-red-400 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
        
        <!-- Дополнительные отзывы в виде сетки -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-800 rounded-lg p-6 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-2 shadow-lg hover:shadow-red-500/20 group">
                <div class="text-yellow-400 mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <p class="text-gray-300 mb-4">Привезли машину точно в срок, все документы в порядке. Нашли именно ту комплектацию, которую я хотел. Буду рекомендовать друзьям!</p>
                <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="" class="w-10 h-10 rounded-full object-cover border border-red-500">
                    <div class="ml-3">
                        <div class="text-white font-medium">Дмитрий В.</div>
                        <div class="text-gray-400 text-sm">Changan CS35 Plus</div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-lg p-6 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-2 shadow-lg hover:shadow-red-500/20 group">
                <div class="text-yellow-400 mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <p class="text-gray-300 mb-4">Очень доволен сервисом! Машину пригнали быстрее, чем обещали, все проверки были проведены при мне. Цена ниже рыночной на 15%!</p>
                <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="" class="w-10 h-10 rounded-full object-cover border border-red-500">
                    <div class="ml-3">
                        <div class="text-white font-medium">Артем Л.</div>
                        <div class="text-gray-400 text-sm">Exeed TXL</div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-lg p-6 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-2 shadow-lg hover:shadow-red-500/20 group">
                <div class="text-yellow-400 mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <p class="text-gray-300 mb-4">Взяли Haval F7 в кредит через партнеров EMAX. Все организовали быстро, процентная ставка ниже, чем в банках. Машина - мечта!</p>
                <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="" class="w-10 h-10 rounded-full object-cover border border-red-500">
                    <div class="ml-3">
                        <div class="text-white font-medium">Светлана П.</div>
                        <div class="text-gray-400 text-sm">Haval F7</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Кнопка "Оставить отзыв" -->
        <div class="mt-16 text-center">
            <button class="relative px-8 py-3 bg-red-600 text-white font-medium rounded-full overflow-hidden group">
                <span class="relative z-10">Оставить свой отзыв</span>
                <span class="absolute inset-0 bg-red-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                <span class="absolute inset-0 border-2 border-red-500 rounded-full transform scale-110 opacity-0 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300"></span>
            </button>
        </div>
    </div>
</section>

<!-- Модальное окно для отзыва -->
<div x-data="{ reviewModalOpen: false }" class="fixed inset-0 z-50 flex items-center justify-center p-4" x-show="reviewModalOpen" style="display: none;">
    <div class="fixed inset-0 bg-black/70" @click="reviewModalOpen = false"></div>
    
    <div class="relative bg-gray-800 rounded-xl max-w-2xl w-full p-8 shadow-2xl transform transition-all duration-300" 
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        <button @click="reviewModalOpen = false" class="absolute top-4 right-4 text-gray-400 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        
        <h3 class="text-2xl font-bold text-white mb-6">Оставить отзыв</h3>
        
        <form class="space-y-6">
            <div>
                <label for="name" class="block text-gray-300 mb-2">Ваше имя</label>
                <input type="text" id="name" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-red-500 focus:border-transparent">
            </div>
            
            <div>
                <label for="car" class="block text-gray-300 mb-2">Модель автомобиля</label>
                <input type="text" id="car" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-red-500 focus:border-transparent">
            </div>
            
            <div>
                <label for="rating" class="block text-gray-300 mb-2">Оценка</label>
                <div class="flex space-x-2">
                    <template x-for="i in 5" :key="i">
                        <button type="button" class="text-gray-400 hover:text-yellow-400 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </button>
                    </template>
                </div>
            </div>
            
            <div>
                <label for="review" class="block text-gray-300 mb-2">Ваш отзыв</label>
                <textarea id="review" rows="4" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-red-500 focus:border-transparent"></textarea>
            </div>
            
            <div class="pt-4">
                <button type="button" class="px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-colors duration-300 w-full">
                    Отправить отзыв
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('alpine:init', () => {
    // Автопрокрутка отзывов
    Alpine.data('autoScrollReviews', () => ({
        init() {
            setInterval(() => {
                this.next();
            }, 5000);
        },
        next() {
            this.activeReview = (this.activeReview + 1) % this.reviews.length;
        },
        prev() {
            this.activeReview = (this.activeReview - 1 + this.reviews.length) % this.reviews.length;
        },
        activeReview: 0,
        reviews: [] // Заполняется в разметке
    }));
});
</script>
  <!-- Улучшенная галерея с эффектами -->
<section class="relative py-16 bg-gray-900 overflow-hidden">
    <!-- Анимированный фон -->
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyMzksNjgsNjgsMC4wNSkiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjcGF0dGVybikiLz48L3N2Zz4=')]"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Заголовок с анимацией -->
        <div class="text-center mb-12" x-data="{ 
            title: 'Галерея шоурума', 
            displayedTitle: '', 
            index: 0,
            animateTitle() {
                if (this.index < this.title.length) {
                    this.displayedTitle += this.title.charAt(this.index);
                    this.index++;
                    setTimeout(() => this.animateTitle(), 100);
                }
            }
        }" x-init="animateTitle()">
            <h2 class="text-4xl font-bold text-white mb-4" x-text="displayedTitle"></h2>
            <div class="w-24 h-1 bg-red-500 rounded-full mx-auto"></div>
            <p class="mt-6 text-gray-300 text-lg max-w-2xl mx-auto">
                Исследуйте наш премиальный шоурум и коллекцию автомобилей
                <span class="text-red-400 font-medium">探索我们的豪华展厅</span>
            </p>
        </div>
        
        <!-- Фильтры галереи -->
        <div class="flex flex-wrap justify-center gap-3 mb-8" x-data="{ activeFilter: 'all' }">
            <button @click="activeFilter = 'all'" 
                    :class="{ 'bg-red-600 text-white': activeFilter === 'all', 'bg-gray-800 text-gray-300': activeFilter !== 'all' }"
                    class="px-4 py-2 rounded-full transition-all duration-300 hover:bg-red-700">
                Все
            </button>
            <button @click="activeFilter = 'showroom'" 
                    :class="{ 'bg-red-600 text-white': activeFilter === 'showroom', 'bg-gray-800 text-gray-300': activeFilter !== 'showroom' }"
                    class="px-4 py-2 rounded-full transition-all duration-300 hover:bg-red-700">
                Шоурум
            </button>
            <button @click="activeFilter = 'cars'" 
                    :class="{ 'bg-red-600 text-white': activeFilter === 'cars', 'bg-gray-800 text-gray-300': activeFilter !== 'cars' }"
                    class="px-4 py-2 rounded-full transition-all duration-300 hover:bg-red-700">
                Автомобили
            </button>
            <button @click="activeFilter = 'service'" 
                    :class="{ 'bg-red-600 text-white': activeFilter === 'service', 'bg-gray-800 text-gray-300': activeFilter !== 'service' }"
                    class="px-4 py-2 rounded-full transition-all duration-300 hover:bg-red-700">
                Сервис
            </button>
        </div>
        
        <!-- Основная галерея с masonry-эффектом -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="main-gallery">
            <!-- Карточки будут добавляться здесь -->
        </div>
        
        <!-- Кнопка "Показать еще" с анимацией -->
        <div class="text-center mt-12">
            <button id="load-more" class="px-6 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center mx-auto group">
                <span>Показать больше</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:rotate-180 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Декоративный разделитель с анимацией -->
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-red-500 to-transparent opacity-30">
        <div class="absolute top-0 left-0 h-full w-32 bg-red-500 animate-marquee"></div>
    </div>
</section>

<!-- Модальное окно для увеличения изображения с улучшенным управлением -->
<div x-data="{ 
    isOpen: false, 
    currentImage: null, 
    currentTitle: '',
    currentDesc: '',
    zoomLevel: 1,
    position: { x: 0, y: 0 },
    isDragging: false,
    startPos: { x: 0, y: 0 },
    touchStart: { x: 0, y: 0 },
    currentIndex: 0,
    images: [],
    openModal(index) {
        this.currentIndex = index;
        this.currentImage = this.images[index].img;
        this.currentTitle = this.images[index].title;
        this.currentDesc = this.images[index].desc;
        this.isOpen = true;
        this.zoomLevel = 1;
        this.position = { x: 0, y: 0 };
    },
    nextImage() {
        this.currentIndex = (this.currentIndex + 1) % this.images.length;
        this.currentImage = this.images[this.currentIndex].img;
        this.currentTitle = this.images[this.currentIndex].title;
        this.currentDesc = this.images[this.currentIndex].desc;
        this.zoomLevel = 1;
        this.position = { x: 0, y: 0 };
    },
    prevImage() {
        this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
        this.currentImage = this.images[this.currentIndex].img;
        this.currentTitle = this.images[this.currentIndex].title;
        this.currentDesc = this.images[this.currentIndex].desc;
        this.zoomLevel = 1;
        this.position = { x: 0, y: 0 };
    },
    handleTouchStart(e) {
        this.touchStart.x = e.touches[0].clientX;
        this.touchStart.y = e.touches[0].clientY;
    },
    handleTouchMove(e) {
        if (this.zoomLevel > 1) return;
        
        const touchX = e.touches[0].clientX;
        const deltaX = touchX - this.touchStart.x;
        
        if (Math.abs(deltaX) > 50) {
            if (deltaX > 0) {
                this.prevImage();
            } else {
                this.nextImage();
            }
            this.touchStart.x = touchX;
        }
    }
}" 
x-cloak
@keyup.escape="isOpen = false">
    <!-- Overlay -->
    <div x-show="isOpen" 
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-black bg-opacity-95 z-50 flex items-center justify-center p-4"
         @click="isOpen = false">
         
        <!-- Контент модального окна -->
        <div x-show="isOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="bg-gray-800 rounded-lg max-w-6xl w-full max-h-screen overflow-hidden relative"
             @click.stop>
            
            <!-- Кнопка закрытия -->
            <button @click="isOpen = false" 
                    class="absolute top-4 right-4 bg-gray-900 hover:bg-gray-700 text-white p-2 rounded-full z-20 transition-transform duration-300 hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <!-- Навигация между изображениями -->
            <button @click="prevImage" 
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-gray-900/80 hover:bg-gray-700/90 text-white p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110 z-20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            
            <button @click="nextImage" 
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-gray-900/80 hover:bg-gray-700/90 text-white p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110 z-20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            
            <!-- Контролы масштабирования -->
            <div class="absolute top-4 left-4 bg-gray-900 rounded-lg shadow-lg z-20 flex divide-x divide-gray-700 overflow-hidden">
                <button @click="zoomLevel = Math.min(zoomLevel + 0.2, 3)" 
                        class="p-3 text-white hover:bg-gray-700 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </button>
                <button @click="zoomLevel = Math.max(zoomLevel - 0.2, 1)" 
                        class="p-3 text-white hover:bg-gray-700 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                    </svg>
                </button>
                <button @click="zoomLevel = 1; position = { x: 0, y: 0 }" 
                        class="p-3 text-white hover:bg-gray-700 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                    </svg>
                </button>
            </div>
            
            <!-- Индикатор текущего изображения -->
            <div class="absolute top-4 left-1/2 transform -translate-x-1/2 bg-gray-900/80 text-white px-3 py-1 rounded-full text-sm z-20">
                <span x-text="currentIndex + 1"></span>/<span x-text="images.length"></span>
            </div>
            
            <!-- Изображение с возможностью масштабирования и перетаскивания -->
            <div class="relative w-full h-full overflow-hidden cursor-grab" 
                 :class="{ 'cursor-grabbing': isDragging }"
                 @mousedown="isDragging = true; startPos = { x: $event.clientX - position.x, y: $event.clientY - position.y }"
                 @mouseup="isDragging = false"
                 @mouseleave="isDragging = false"
                 @mousemove="if (isDragging) { 
                     position.x = $event.clientX - startPos.x; 
                     position.y = $event.clientY - startPos.y 
                 }"
                 @wheel.prevent="$event.deltaY < 0 ? zoomLevel = Math.min(zoomLevel + 0.1, 3) : zoomLevel = Math.max(zoomLevel - 0.1, 1)"
                 @touchstart="handleTouchStart($event)"
                 @touchmove="handleTouchMove($event)">
                <img x-bind:src="currentImage" :alt="currentTitle" 
                     class="absolute max-w-none transform origin-center transition-transform duration-200 select-none"
                     :style="`transform: translate(${position.x}px, ${position.y}px) scale(${zoomLevel}); touch-action: none;`">
            </div>
            
            <!-- Описание изображения с анимацией появления -->
            <div x-show="zoomLevel <= 1.2"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 translate-y-4"
                 class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 via-black/70 to-transparent p-6 z-10">
                <h3 x-text="currentTitle" class="text-white text-xl font-bold mb-1"></h3>
                <p x-text="currentDesc" class="text-gray-300"></p>
                <div class="flex items-center mt-3">
                    <div class="flex space-x-1">
                        <template x-for="i in 5" :key="i">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </template>
                    </div>
                    <span class="text-gray-400 text-sm ml-2">Фото <span x-text="currentIndex + 1"></span> из <span x-text="images.length"></span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Скрипты для галереи -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Данные для галереи с категориями
    const galleryData = [
        {
            img: "https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1583&q=80",
            title: "Премиум салон EMAX",
            desc: "Эксклюзивный интерьер нашего шоурума в восточном стиле",
            category: "showroom",
            featured: true
        },
        {
            img: "https://images.unsplash.com/photo-1489824904134-891ab64532f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1631&q=80",
            title: "Выставка новинок",
            desc: "Последние модели китайского автопрома в нашем шоуруме",
            category: "showroom",
            featured: false
        },
        {
            img: "https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
            title: "Профессиональный сервис",
            desc: "Наши специалисты всегда готовы помочь с выбором автомобиля",
            category: "service",
            featured: true
        },
        {
            img: "https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
            title: "Geely Coolray 2023",
            desc: "Флагманский кроссовер с современным дизайном и технологиями",
            category: "cars",
            featured: true
        },
        {
            img: "https://images.unsplash.com/photo-1502877338535-766e1452684a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80",
            title: "Тест-драйв",
            desc: "Испытайте мощь и комфорт наших автомобилей лично",
            category: "service",
            featured: false
        },
        {
            img: "https://images.unsplash.com/photo-1493238792000-8113da705763?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
            title: "Сервисный центр",
            desc: "Профессиональное обслуживание и ремонт автомобилей",
            category: "service",
            featured: false
        },
        {
            img: "https://images.unsplash.com/photo-1549317661-bd32f8d27f2a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
            title: "Chery Tiggo 8 Pro",
            desc: "Роскошный интерьер премиального кроссовера",
            category: "cars",
            featured: true
        },
        {
            img: "https://images.unsplash.com/photo-1494976388901-750342ad5436?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80",
            title: "Haval Jolion",
            desc: "Динамичный дизайн и современные технологии",
            category: "cars",
            featured: false
        },
        {
            img: "https://images.unsplash.com/photo-1502161254066-6c74afbf07aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80",
            title: "Путешествия с комфортом",
            desc: "Наши автомобили созданы для дальних поездок",
            category: "cars",
            featured: false
        },
        {
            img: "https://images.unsplash.com/photo-1494972308805-463bc619d34e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80",
            title: "Зона отдыха",
            desc: "Комфортная атмосфера для наших клиентов",
            category: "showroom",
            featured: false
        },
        {
            img: "https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80",
            title: "Выставочный зал",
            desc: "Просторная площадка для демонстрации автомобилей",
            category: "showroom",
            featured: true
        },
        {
            img: "https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
            title: "Консультации специалистов",
            desc: "Наши менеджеры помогут с выбором автомобиля",
            category: "service",
            featured: false
        }
    ];

    const gallery = document.getElementById('main-gallery');
    const loadMoreBtn = document.getElementById('load-more');
    let visibleItems = 6;
    let currentFilter = 'all';

    // Инициализация галереи
    function initGallery() {
        // Устанавливаем данные для модального окна
        Alpine.store('galleryData', galleryData);
        
        // Рендерим первые элементы
        renderItems(0, visibleItems, currentFilter);
        
        // Скрываем кнопку, если все элементы показаны
        if (visibleItems >= getFilteredItems(currentFilter).length) {
            loadMoreBtn.style.display = 'none';
        }
    }

    // Получение отфильтрованных элементов
    function getFilteredItems(filter) {
        if (filter === 'all') return galleryData;
        return galleryData.filter(item => item.category === filter);
    }

    // Рендер элементов с учетом фильтра
    function renderItems(start, end, filter) {
        const filteredItems = getFilteredItems(filter);
        const itemsToRender = filteredItems.slice(start, Math.min(end, filteredItems.length));
        
        itemsToRender.forEach((item, index) => {
            const delay = (index % 3) * 100;
            const cardHeight = item.featured ? 'h-80' : 'h-64';
            
            const card = document.createElement('div');
            card.className = `gallery-item opacity-0 translate-y-10 transition-all duration-500 ease-out ${item.category}`;
            card.style.transitionDelay = `${delay}ms`;
            
            card.innerHTML = `
                <div class="relative group overflow-hidden rounded-xl shadow-xl ${cardHeight} transform hover:-translate-y-2 transition-all duration-300 hover:shadow-red-500/20">
                    <img src="${item.img}" alt="${item.title}" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    
                    <!-- Анимированный SVG узор -->
                    <svg viewBox="0 0 200 200" class="w-full h-full opacity-5 group-hover:opacity-20 transition duration-500 absolute inset-0">
                        <path fill="none" stroke="#ef4444" stroke-width="1.5" 
                              d="M20,100 Q100,20 180,100 Q100,180 20,100 Z" 
                              class="transform group-hover:rotate-180 transition duration-1000"/>
                    </svg>
                    
                    <!-- Затемненный фон для текста с анимацией -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-80 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <div>
                            <h3 class="text-white text-xl font-bold mb-1 drop-shadow-md">${item.title}</h3>
                            <p class="text-gray-200 text-sm drop-shadow-md line-clamp-2">${item.desc}</p>
                        </div>
                    </div>
                    
                    <!-- Бейдж категории -->
                    <div class="absolute top-4 left-4 bg-red-600 text-white text-xs uppercase font-bold px-2 py-1 rounded">
                        ${item.category === 'showroom' ? 'Шоурум' : 
                          item.category === 'cars' ? 'Автомобиль' : 'Сервис'}
                    </div>
                    
                    <!-- Кнопка увеличения -->
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button @click="$dispatch('open-modal', { index: ${galleryData.findIndex(i => i.img === item.img)} })" 
                                class="bg-red-600 hover:bg-red-700 text-white p-2 rounded-full shadow-lg transform hover:scale-110 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                            </svg>
                        </button>
                    </div>
                </div>
            `;
            
            gallery.appendChild(card);
            
            // Анимация появления
            setTimeout(() => {
                card.classList.remove('opacity-0', 'translate-y-10');
            }, 50);
        });
    }

    // Загрузка дополнительных элементов
    loadMoreBtn.addEventListener('click', function() {
        const prevItems = visibleItems;
        visibleItems += 6;
        
        renderItems(prevItems, visibleItems, currentFilter);
        
        // Скрываем кнопку, если достигнут конец списка
        if (visibleItems >= getFilteredItems(currentFilter).length) {
            this.style.display = 'none';
        }
    });

    // Фильтрация галереи
    document.addEventListener('alpine:init', () => {
        Alpine.store('galleryData', []);
        
        Alpine.data('galleryFilter', () => ({
            filter: 'all',
            applyFilter(newFilter) {
                this.filter = newFilter;
                currentFilter = newFilter;
                
                // Анимация исчезновения
                const items = document.querySelectorAll('.gallery-item');
                items.forEach((item, index) => {
                    item.style.transitionDelay = `${index * 50}ms`;
                    item.classList.add('opacity-0', 'translate-y-10');
                });
                
                // Очистка и перерисовка
                setTimeout(() => {
                    gallery.innerHTML = '';
                    visibleItems = 6;
                    renderItems(0, visibleItems, currentFilter);
                    
                    // Показываем кнопку, если есть еще элементы
                    loadMoreBtn.style.display = 
                        visibleItems < getFilteredItems(currentFilter).length ? 'flex' : 'none';
                }, 500);
            }
        }));
    });

    // Инициализация
    initGallery();
});

// Анимация для декоративного элемента
const style = document.createElement('style');
style.textContent = `
    @keyframes marquee {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(calc(100vw + 100%)); }
    }
    .animate-marquee {
        animation: marquee 15s linear infinite;
    }
`;
document.head.appendChild(style);
</script>


  

  

            @include('footer')    
    <script>
        // Обработка формы
        document.getElementById('feedbackForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Здесь код для отправки формы
            const formData = {
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                message: document.getElementById('message').value
            };
            
            console.log('Форма отправлена:', formData);
            
            // Можно добавить уведомление об успешной отправке
            alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
            
            // Очистка формы
            this.reset();
        });

        // Плавная прокрутка для якорных ссылок
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Анимация при скролле
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.fade-in');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementPosition < windowHeight - 100) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };

        // Запускаем при загрузке и при скролле
        window.addEventListener('load', animateOnScroll);
        window.addEventListener('scroll', animateOnScroll);
    </script>
</body>
</html>