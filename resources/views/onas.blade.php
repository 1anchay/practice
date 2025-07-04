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

    <!-- Отзывы -->
    <section class="section reviews">
        <div class="container">
            <h2 class="section-title fade-in">Отзывы клиентов</h2>
            <p class="fade-in delay-1" style="max-width: 800px; margin-bottom: 50px; font-size: 1.1rem;">
                Более 1000 довольных клиентов по всей России. Вот что они говорят о нас.
            </p>
            
            <div class="reviews-slider">
                <div class="review-card fade-in">
                    <div class="review-text">
                        Покупал Chery Tiggo 8 Pro через EMAX. Отличный сервис, все четко по договору. Машина приехала даже раньше обещанного срока. Отдельное спасибо менеджеру Ольге за терпение и ответы на все мои вопросы.
                    </div>
                    <div class="review-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Игорь С." class="author-photo">
                        <div>
                            <div class="author-name">Игорь С.</div>
                            <div style="font-size: 0.9rem; opacity: 0.7;">Chery Tiggo 8 Pro</div>
                        </div>
                    </div>
                </div>
                <div class="review-card fade-in delay-1">
                    <div class="review-text">
                        Долго сомневался насчет китайских авто, но команда EMAX подробно все объяснила, помогла с выбором. Взяли Geely Coolray - не нарадуемся! Качество на уровне, сервис отличный. Теперь только к ним!
                    </div>
                    <div class="review-author">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Антон М." class="author-photo">
                        <div>
                            <div class="author-name">Антон М.</div>
                            <div style="font-size: 0.9rem; opacity: 0.7;">Geely Coolray</div>
                        </div>
                    </div>
                </div>
                <div class="review-card fade-in delay-2">
                    <div class="review-text">
                        Работаем с EMAX уже третий год. Закупаем авто для нашего таксопарка. Ни разу не подвели, все машины в идеальном состоянии, документы чистые. Цены ниже, чем у официальных дилеров. Рекомендую!
                    </div>
                    <div class="review-author">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" alt="Елена К." class="author-photo">
                        <div>
                            <div class="author-name">Елена К.</div>
                            <div style="font-size: 0.9rem; opacity: 0.7;">Haval Jolion</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Галерея с китайской эстетикой (облегченная версия) -->
<section class="section relative py-16 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4 relative">
        <!-- Заголовок с китайским акцентом -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4 relative inline-block">
                <span class="relative z-10">Наш шоурум</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-red-300 opacity-50 transform -translate-y-1"></span>
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Посмотрите, где вы можете ознакомиться с автомобилями лично. 
                <span class="text-red-400 font-medium">传统与现代的结合</span> (традиция и современность)
            </p>
        </div>
        
        <!-- Интерактивная галерея -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Карточка 1 с эффектом при наведении -->
            <div class="relative group overflow-hidden rounded-lg shadow-md transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1583&q=80" 
                     alt="Шоурум EMAX" 
                     class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500">
                
                <!-- Легкий SVG фон -->
                <svg viewBox="0 0 200 200" class="w-full h-full opacity-5 group-hover:opacity-20 transition duration-500 absolute inset-0">
                    <path fill="none" stroke="#ef4444" stroke-width="2" 
                          d="M20,100 Q100,20 180,100 Q100,180 20,100 Z" 
                          class="transform group-hover:rotate-180 transition duration-1000"/>
                </svg>
                
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                    <div>
                        <h3 class="text-white text-lg font-bold mb-1">Премиум салон</h3>
                        <p class="text-gray-200 text-sm">Изысканный интерьер в восточном стиле</p>
                    </div>
                </div>
            </div>
            
            <!-- Карточка 2 с модальным окном -->
            <div x-data="{ open: false }" class="relative group overflow-hidden rounded-lg shadow-md">
                <button @click="open = true" class="w-full h-full focus:outline-none">
                    <img src="https://images.unsplash.com/photo-1489824904134-891ab64532f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1631&q=80" 
                         alt="Автомобили в шоуруме" 
                         class="w-full h-64 object-cover">
                    
                    <!-- Китайский узор SVG -->
                    <svg viewBox="0 0 200 200" class="w-full h-full opacity-5 group-hover:opacity-20 transition duration-500 absolute inset-0">
                        <path fill="none" stroke="#ef4444" stroke-width="1.5" stroke-dasharray="5,5"
                              d="M10,10 L190,10 L190,190 L10,190 Z M30,30 L170,30 L170,170 L30,170 Z" 
                              class="transform group-hover:scale-110 transition duration-700"/>
                    </svg>
                    
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white opacity-0 group-hover:opacity-100 transform group-hover:scale-110 transition duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </button>
                
                <!-- Модальное окно -->
                <div x-show="open" x-transition class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" 
                             x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" 
                             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" 
                             class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open = false"></div>

                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                        <div x-show="open" x-transition:enter="ease-out duration-300" 
                             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
                             x-transition:leave="ease-in duration-200" 
                             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                             class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4" id="modal-title">
                                            Автомобили в нашем шоуруме
                                        </h3>
                                        <img src="https://images.unsplash.com/photo-1489824904134-891ab64532f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1631&q=80" 
                                             alt="Автомобили в шоуруме" class="w-full rounded-lg mb-4">
                                        <p class="text-gray-600">
                                            Наш шоурум сочетает в себе современные технологии и традиционный китайский дизайн. 
                                            Каждый автомобиль представлен с особым вниманием к деталям.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button type="button" 
                                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-red-400 text-white text-base font-medium hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                                        @click="open = false">
                                    关闭 (Закрыть)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Карточка 3 с параллакс-эффектом -->
            <div class="relative overflow-hidden rounded-lg shadow-md h-64" x-data="parallax()" x-bind:style="style">
                <img src="https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Клиенты в шоуруме" 
                     class="absolute w-full h-full object-cover transform scale-110">
                
                <!-- Простой китайский узор -->
                <svg viewBox="0 0 200 200" class="w-full h-full opacity-10 absolute inset-0">
                    <path fill="none" stroke="#ef4444" stroke-width="1" 
                          d="M50,50 C100,0 100,100 150,50 C200,0 100,200 50,150 C0,100 0,0 50,50 Z"/>
                </svg>
                
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                    <div class="text-center px-6">
                        <h3 class="text-white text-xl font-bold mb-2">Клиентский сервис</h3>
                        <p class="text-gray-200 text-sm">Восточное гостеприимство для каждого</p>
                    </div>
                </div>
            </div>
            
            <!-- Карточка 4 с китайским узором -->
            <div class="relative overflow-hidden rounded-lg shadow-md h-64 group">
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Автомобиль на дороге" 
                     class="w-full h-full object-cover">
                
                <!-- Инь-Янь символ (упрощенный) -->
                <svg viewBox="0 0 200 200" class="w-full h-full opacity-10 group-hover:opacity-20 transition duration-500 absolute inset-0">
                    <circle cx="100" cy="100" r="90" fill="none" stroke="#ef4444" stroke-width="1.5"/>
                    <path d="M100,10 A90,90 0 0,0 100,190 A45,45 0 0,1 100,100 A45,45 0 0,0 100,10 Z" 
                          fill="none" stroke="#ef4444" stroke-width="1.5"/>
                </svg>
                
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/60 to-transparent">
                    <h3 class="text-white font-medium">Автомобили премиум-класса</h3>
                </div>
            </div>
            
            <!-- Карточка 5 -->
            <div class="relative overflow-hidden rounded-lg shadow-md h-64 group">
                <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" 
                     alt="Тест-драйв" 
                     class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                
                <!-- Китайский узор облаков -->
                <svg viewBox="0 0 200 200" class="w-full h-full opacity-5 group-hover:opacity-15 transition duration-500 absolute inset-0">
                    <path fill="none" stroke="#ef4444" stroke-width="1" stroke-dasharray="3,3"
                          d="M30,50 Q50,30 70,50 Q90,30 110,50 Q130,30 150,50 Q170,30 190,50"/>
                </svg>
                
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black/30">
                    <span class="text-white font-medium text-lg">Тест-драйв</span>
                </div>
            </div>
            
            <!-- Карточка 6 -->
            <div class="relative overflow-hidden rounded-lg shadow-md h-64 group">
                <img src="https://images.unsplash.com/photo-1493238792000-8113da705763?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Сервисный центр" 
                     class="w-full h-full object-cover">
                
                <!-- Китайский иероглиф "автомобиль" (车) -->
                <svg viewBox="0 0 200 200" class="w-full h-full opacity-5 group-hover:opacity-20 transition duration-500 absolute inset-0">
                    <path fill="none" stroke="#ef4444" stroke-width="2"
                          d="M50,60 L150,60 M70,60 L70,120 M130,60 L130,120 M50,120 L150,120 M50,140 L70,120 M150,140 L130,120"/>
                </svg>
                
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/60 to-transparent">
                    <h3 class="text-white font-medium">Сервисный центр</h3>
                    <p class="text-gray-200 text-sm">Профессиональное обслуживание</p>
                </div>
            </div>
        </div>
        
        <!-- Кнопка "Показать еще" -->
        <div class="text-center mt-12 fade-in delay-3">
            <button class="px-6 py-3 bg-red-400 text-white rounded-lg shadow hover:bg-red-500 transition duration-300 flex items-center mx-auto">
                <span>Показать больше</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Декоративный разделитель -->
    <div class="mt-16 py-8 border-t border-gray-100"></div>
</section>

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