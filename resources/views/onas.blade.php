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
    <section class="section about-company">
        <div class="container">
            <h2 class="section-title fade-in">О компании</h2>
            <p class="fade-in delay-1" style="max-width: 800px; margin-bottom: 50px; font-size: 1.1rem;">
                EMAX — это команда профессионалов, которая уже более 5 лет помогает клиентам приобретать качественные китайские автомобили по выгодным ценам. 
                Мы напрямую сотрудничаем с ведущими заводами Китая, что позволяет предлагать лучшие условия на рынке.
            </p>
            
            <div class="stats-grid">
                <div class="stat-card fade-in">
                    <div class="stat-number">5+</div>
                    <div class="stat-text">Лет на рынке</div>
                </div>
                <div class="stat-card fade-in delay-1">
                    <div class="stat-number">1000+</div>
                    <div class="stat-text">Проданных авто</div>
                </div>
                <div class="stat-card fade-in delay-2">
                    <div class="stat-number">24/7</div>
                    <div class="stat-text">Поддержка клиентов</div>
                </div>
                <div class="stat-card fade-in delay-3">
                    <div class="stat-number">15+</div>
                    <div class="stat-text">Брендов в каталоге</div>
                </div>
            </div>
            
            <h3 style="text-align: center; margin-top: 60px; font-weight: 500; opacity: 0.8;" class="fade-in delay-2">Мы официальные дилеры ведущих китайских брендов:</h3>
            <div class="brands fade-in delay-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Chery_Logo.svg/1200px-Chery_Logo.svg.png" alt="Chery" class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Geely_Logo.svg/1200px-Geely_Logo.svg.png" alt="Geely" class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Haval_Logo.svg/1200px-Haval_Logo.svg.png" alt="Haval" class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/JAC_Motors_logo.svg/1200px-JAC_Motors_logo.svg.png" alt="JAC" class="brand-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Changan_Automobile_Logo.svg/1200px-Changan_Automobile_Logo.svg.png" alt="Changan" class="brand-item">
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section class="section advantages">
        <div class="container">
            <h2 class="section-title fade-in">Почему выбирают нас</h2>
            <p class="fade-in delay-1" style="max-width: 800px; margin-bottom: 50px; font-size: 1.1rem;">
                Мы создали сервис, который делает покупку китайского автомобиля простой, безопасной и выгодной.
            </p>
            
            <div class="advantages-grid">
                <div class="advantage-card fade-in">
                    <div class="advantage-icon"><i class="fas fa-handshake"></i></div>
                    <h3 class="advantage-title">Работаем без посредников</h3>
                    <p>Прямые поставки с заводов позволяют нам предлагать лучшие цены без переплат.</p>
                </div>
                <div class="advantage-card fade-in delay-1">
                    <div class="advantage-icon"><i class="fas fa-user-tie"></i></div>
                    <h3 class="advantage-title">Индивидуальный подход</h3>
                    <p>Персональный менеджер сопровождает вас на всех этапах покупки.</p>
                </div>
                <div class="advantage-card fade-in delay-2">
                    <div class="advantage-icon"><i class="fas fa-file-contract"></i></div>
                    <h3 class="advantage-title">Юридически чистая сделка</h3>
                    <p>Полный пакет документов, официальная гарантия и страхование.</p>
                </div>
                <div class="advantage-card fade-in delay-3">
                    <div class="advantage-icon"><i class="fas fa-headset"></i></div>
                    <h3 class="advantage-title">Поддержка на всех этапах</h3>
                    <p>Консультации, помощь с оформлением, сервисное обслуживание.</p>
                </div>
                <div class="advantage-card fade-in delay-1">
                    <div class="advantage-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="advantage-title">Гарантия 3 года</h3>
                    <p>Официальная гарантия производителя и расширенные сервисные программы.</p>
                </div>
                <div class="advantage-card fade-in delay-2">
                    <div class="advantage-icon"><i class="fas fa-truck"></i></div>
                    <h3 class="advantage-title">Доставка по всей России</h3>
                    <p>Собственный логистический центр и проверенные транспортные компании.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Команда -->
    <section class="section team">
        <div class="container">
            <h2 class="section-title fade-in">Наша команда</h2>
            <p class="fade-in delay-1" style="max-width: 800px; margin-bottom: 50px; font-size: 1.1rem;">
                Профессионалы с многолетним опытом работы с китайскими автомобилями. Мы знаем все тонкости и готовы поделиться знаниями с вами.
            </p>
            
            <div class="team-grid">
                <div class="team-member fade-in">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Алексей Петров" class="team-photo">
                    <div class="team-info">
                        <h3 class="team-name">Алексей Петров</h3>
                        <p class="team-position">Основатель, генеральный директор</p>
                    </div>
                </div>
                <div class="team-member fade-in delay-1">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" alt="Елена Смирнова" class="team-photo">
                    <div class="team-info">
                        <h3 class="team-name">Елена Смирнова</h3>
                        <p class="team-position">Финансовый директор</p>
                    </div>
                </div>
                <div class="team-member fade-in delay-2">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Дмитрий Иванов" class="team-photo">
                    <div class="team-info">
                        <h3 class="team-name">Дмитрий Иванов</h3>
                        <p class="team-position">Технический специалист</p>
                    </div>
                </div>
                <div class="team-member fade-in delay-3">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Ольга Кузнецова" class="team-photo">
                    <div class="team-info">
                        <h3 class="team-name">Ольга Кузнецова</h3>
                        <p class="team-position">Менеджер по продажам</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Процесс работы -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Как мы работаем</h2>
            <p class="fade-in delay-1" style="max-width: 800px; margin-bottom: 50px; font-size: 1.1rem;">
                Всего 4 простых шага от заявки до получения вашего нового автомобиля.
            </p>
            
            <div class="process-steps">
                <div class="step fade-in">
                    <div class="step-number">1</div>
                    <h3 class="step-title">Заявка</h3>
                    <p>Оставьте заявку на сайте или по телефону</p>
                </div>
                <div class="step fade-in delay-1">
                    <div class="step-number">2</div>
                    <h3 class="step-title">Подбор авто</h3>
                    <p>Мы подберем оптимальный вариант под ваш бюджет</p>
                </div>
                <div class="step fade-in delay-2">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Оплата и договор</h3>
                    <p>Заключаем договор с прозрачными условиями</p>
                </div>
                <div class="step fade-in delay-3">
                    <div class="step-number">4</div>
                    <h3 class="step-title">Доставка и передача</h3>
                    <p>Доставляем авто и передаем вам с полным пакетом документов</p>
                </div>
            </div>
        </div>
    </section>

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
                Более 1000 довольных клиентов по всей России. Вот что они говорят о нас.
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
    <!-- Темная галерея с китайской эстетикой -->
<section class="relative py-16 bg-gray-900">
    <!-- Декоративные элементы -->
    <div class="absolute inset-0 overflow-hidden opacity-10">
        <div class="absolute top-20 left-10 w-32 h-32 border border-red-500 transform rotate-45"></div>
        <div class="absolute bottom-10 right-10 w-24 h-24 border border-red-500 transform rotate-12"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Заголовок -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-white mb-4 relative inline-block">
                <span class="relative z-10">Наш шоурум</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-red-500 transform -translate-y-1"></span>
            </h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Погрузитесь в мир элегантности и технологий
                <span class="text-red-400 font-medium">优雅与科技的结合</span>
            </p>
        </div>
        
        <!-- Основная галерея -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="main-gallery">
            <!-- Карточки будут добавляться здесь -->
        </div>
        
        <!-- Кнопка "Показать еще" -->
        <div class="text-center mt-12">
            <button id="load-more" class="px-6 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center mx-auto group">
                <span>Показать больше</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:rotate-180 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Декоративный разделитель -->
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-red-500 to-transparent opacity-30"></div>
</section>

<!-- Модальное окно (Headless UI) -->
<div x-data="{ isOpen: false, currentImage: null }" x-cloak>
    <!-- Overlay -->
    <div x-show="isOpen" 
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center p-4"
         @click="isOpen = false">
         
        <!-- Контент модального окна -->
        <div x-show="isOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="bg-gray-800 rounded-lg max-w-4xl w-full max-h-screen overflow-auto relative"
             @click.stop>
            
            <!-- Кнопка закрытия -->
            <button @click="isOpen = false" class="absolute top-4 right-4 text-gray-400 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <!-- Контент -->
            <div class="p-6">
                <img x-bind:src="currentImage" alt="" class="w-full h-auto rounded-lg mb-4">
                <div class="text-white">
                    <h3 class="text-2xl font-bold mb-2">Премиальные автомобили</h3>
                    <p class="text-gray-300">Изысканный дизайн с элементами традиционной китайской эстетики</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Скрипты -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Данные для галереи
    const galleryData = [
        {
            img: "https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1583&q=80",
            title: "Премиум салон",
            desc: "Роскошь в восточном стиле"
        },
        {
            img: "https://images.unsplash.com/photo-1489824904134-891ab64532f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1631&q=80",
            title: "Выставка",
            desc: "Современные технологии"
        },
        {
            img: "https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
            title: "Клиентский сервис",
            desc: "Восточное гостеприимство"
        },
        {
            img: "https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
            title: "Автомобили",
            desc: "Мощь и элегантность"
        },
        {
            img: "https://images.unsplash.com/photo-1502877338535-766e1452684a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80",
            title: "Тест-драйв",
            desc: "Испытайте мощь"
        },
        {
            img: "https://images.unsplash.com/photo-1493238792000-8113da705763?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
            title: "Сервис",
            desc: "Профессиональный уход"
        },
        {
            img: "https://images.unsplash.com/photo-1549317661-bd32f8d27f2a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
            title: "Интерьер",
            desc: "Изысканный дизайн"
        },
        {
            img: "https://images.unsplash.com/photo-1494976388901-750342ad5436?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80",
            title: "Мощь",
            desc: "Современные двигатели"
        },
        {
            img: "https://images.unsplash.com/photo-1502161254066-6c74afbf07aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80",
            title: "Путешествия",
            desc: "Комфорт на дорогах"
        }
    ];

    const gallery = document.getElementById('main-gallery');
    const loadMoreBtn = document.getElementById('load-more');
    let visibleItems = 3;

    // Инициализация галереи
    function initGallery() {
        // Показываем первые 3 элемента
        renderItems(0, visibleItems);
        
        // Настройка кнопки
        if (visibleItems >= galleryData.length) {
            loadMoreBtn.style.display = 'none';
        }
    }

    // Рендер элементов
    function renderItems(start, end) {
        for (let i = start; i < end && i < galleryData.length; i++) {
            const item = galleryData[i];
            const delay = (i % 3) * 100;
            
            const card = document.createElement('div');
            card.className = `gallery-item opacity-0 translate-y-10 transition-all duration-500 ease-out`;
            card.style.transitionDelay = `${delay}ms`;
            
            card.innerHTML = `
                <div class="relative group overflow-hidden rounded-xl shadow-xl h-64 transform hover:-translate-y-2 transition-all duration-300">
                    <img src="${item.img}" alt="${item.title}" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    
                    <!-- SVG узор -->
                    <svg viewBox="0 0 200 200" class="w-full h-full opacity-5 group-hover:opacity-20 transition duration-500 absolute inset-0">
                        <path fill="none" stroke="#ef4444" stroke-width="1.5" 
                              d="M20,100 Q100,20 180,100 Q100,180 20,100 Z" 
                              class="transform group-hover:rotate-180 transition duration-1000"/>
                    </svg>
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <div>
                            <h3 class="text-white text-xl font-bold mb-1">${item.title}</h3>
                            <p class="text-gray-300 text-sm">${item.desc}</p>
                        </div>
                    </div>
                    
                    <!-- Кнопка увеличения -->
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <button @click="isOpen = true; currentImage = '${item.img}'" class="bg-red-600 hover:bg-red-700 text-white p-2 rounded-full shadow-lg transform hover:scale-110 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
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
        }
    }

    // Загрузка дополнительных элементов
    loadMoreBtn.addEventListener('click', function() {
        const prevItems = visibleItems;
        visibleItems += 3;
        
        renderItems(prevItems, visibleItems);
        
        // Скрыть кнопку если все элементы показаны
        if (visibleItems >= galleryData.length) {
            this.style.display = 'none';
        }
    });

    // Инициализация
    initGallery();
});

// Параллакс эффект для некоторых элементов
document.addEventListener('alpine:init', () => {
    Alpine.data('parallax', () => ({
        init() {
            this.$el.style.transform = 'translateY(0)';
            
            window.addEventListener('scroll', () => {
                const scrollY = window.scrollY;
                const elementTop = this.$el.getBoundingClientRect().top + scrollY;
                const elementHeight = this.$el.offsetHeight;
                
                // Рассчитываем смещение только когда элемент в зоне видимости
                if (scrollY > elementTop - window.innerHeight && scrollY < elementTop + elementHeight) {
                    const offset = (scrollY - elementTop + window.innerHeight) * 0.1;
                    this.$el.style.transform = `translateY(${offset}px)`;
                }
            });
        }
    }));
});
</script>

<!-- Alpine JS для параллакс-эффекта -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('parallax', () => ({
            style: '',
            init() {
                window.addEventListener('scroll', () => {
                    const yPos = window.scrollY * 0.3;
                    this.style = `transform: translate3d(0, ${yPos}px, 0);`;
                });
            }
        }));
    });
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