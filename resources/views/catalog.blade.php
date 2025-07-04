<!DOCTYPE html>
<html lang="ru">
    @include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог китайских автомобилей | NeoAuto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a1a1a;
            --secondary: #252525;
            --accent: #00a8ff;
            --accent-hover: #0095e0;
            --cta-color: #00ff88;
            --cta-hover: #00e676;
            --text: #333333;
            --text-light: #ffffff;
            --text-secondary: #777777;
            --border: #e0e0e0;
            --card-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            --card-shadow-hover: 0 8px 24px rgba(0, 168, 255, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: var(--text);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Хедер страницы */
        .page-header {
            background-color: var(--text-light);
            padding: 30px 0;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .page-header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .page-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary);
        }

        .page-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-top: 10px;
            max-width: 700px;
        }

        .consult-button {
            background-color: var(--accent);
            color: var(--text-light);
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .consult-button:hover {
            background-color: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 168, 255, 0.25);
        }

        /* Основной контент */
        .catalog-content {
            display: flex;
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Блок фильтров */
        .filters-sidebar {
            width: 280px;
            flex-shrink: 0;
        }

        .filter-block {
            background-color: var(--text-light);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
        }

        .filter-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .filter-reset {
            font-size: 0.9rem;
            color: var(--accent);
            cursor: pointer;
            background: none;
            border: none;
        }

        .filter-options {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .filter-option {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-option input {
            width: 18px;
            height: 18px;
            accent-color: var(--accent);
        }

        .filter-option label {
            font-size: 0.95rem;
            cursor: pointer;
        }

        .filter-option-count {
            margin-left: auto;
            color: var(--text-secondary);
            font-size: 0.85rem;
        }

        .price-range {
            width: 100%;
            margin-top: 15px;
        }

        .price-values {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 0.9rem;
        }

        /* Сортировка и результаты */
        .catalog-main {
            flex-grow: 1;
        }

        .sort-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .results-count {
            font-size: 0.95rem;
            color: var(--text-secondary);
        }

        .sort-select {
            padding: 8px 12px;
            border: 1px solid var(--border);
            border-radius: 6px;
            background-color: var(--text-light);
            cursor: pointer;
        }

        /* Сетка автомобилей */
        .cars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }

        .car-card {
            background-color: var(--text-light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            position: relative;
        }

        .car-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--card-shadow-hover);
        }

        .car-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--accent);
            color: var(--text-light);
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
        }

        .car-badge.hit {
            background-color: #ff4757;
        }

        .car-badge.new {
            background-color: var(--cta-color);
            color: var(--primary);
        }

        .car-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .car-card:hover .car-image {
            transform: scale(1.03);
        }

        .car-info {
            padding: 20px;
        }

        .car-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .car-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .car-specs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .car-spec {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
        }

        .car-spec i {
            color: var(--accent);
            font-size: 0.9rem;
        }

        .car-actions {
            display: flex;
            gap: 10px;
        }

        .car-button {
            flex: 1;
            padding: 10px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
        }

        .car-button-detail {
            background-color: var(--text-light);
            color: var(--accent);
            border: 1px solid var(--accent);
        }

        .car-button-detail:hover {
            background-color: rgba(0, 168, 255, 0.1);
        }

        .car-button-test {
            background-color: var(--accent);
            color: var(--text-light);
            border: 1px solid var(--accent);
        }

        .car-button-test:hover {
            background-color: var(--accent-hover);
        }

        /* Пагинация */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 40px;
        }

        .pagination-button {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            background-color: var(--text-light);
            border: 1px solid var(--border);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .pagination-button:hover {
            border-color: var(--accent);
            color: var(--accent);
        }

        .pagination-button.active {
            background-color: var(--accent);
            color: var(--text-light);
            border-color: var(--accent);
        }

        /* SEO блок */
        .seo-block {
            background-color: var(--text-light);
            padding: 40px;
            border-radius: 10px;
            margin-bottom: 50px;
            box-shadow: var(--card-shadow);
        }

        .seo-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .seo-text {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .seo-highlight {
            color: var(--accent);
            font-weight: 600;
        }

        /* CTA блок */
        .cta-block {
            background: linear-gradient(135deg, #1a2a3a 0%, #0f172a 100%);
            color: var(--text-light);
            padding: 50px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 50px;
        }

        .cta-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .cta-text {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 25px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            background-color: var(--cta-color);
            color: var(--primary);
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .cta-button:hover {
            background-color: var(--cta-hover);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 255, 136, 0.3);
        }

        /* Мобильные стили */
        @media (max-width: 1024px) {
            .catalog-content {
                flex-direction: column;
            }

            .filters-sidebar {
                width: 100%;
            }

            .filter-mobile-toggle {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 12px 15px;
                background-color: var(--text-light);
                border-radius: 8px;
                box-shadow: var(--card-shadow);
                margin-bottom: 20px;
                cursor: pointer;
            }

            .filter-mobile-toggle i {
                transition: transform 0.3s ease;
            }

            .filter-mobile-toggle.active i {
                transform: rotate(180deg);
            }

            .filters-container {
                display: none;
                background-color: var(--text-light);
                border-radius: 8px;
                padding: 15px;
                box-shadow: var(--card-shadow);
                margin-bottom: 20px;
            }

            .filters-container.active {
                display: block;
            }

            .cars-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .page-header-inner {
                flex-direction: column;
                align-items: flex-start;
            }

            .consult-button {
                width: 100%;
                justify-content: center;
            }

            .car-specs {
                grid-template-columns: 1fr;
            }

            .cta-block {
                padding: 30px 20px;
            }

            .cta-title {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .cars-grid {
                grid-template-columns: 1fr;
            }

            .car-actions {
                flex-direction: column;
            }

            .seo-block {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Хедер страницы -->
    <header class="page-header">
        <div class="container">
            <div class="page-header-inner">
                <div>
                    <h1 class="page-title">Каталог автомобилей</h1>
                    <p class="page-subtitle">Выберите подходящую модель из актуального ассортимента китайских автомобилей с гарантией, доставкой и тест-драйвом</p>
                </div>
                <button class="consult-button">
                    <i class="fas fa-headset"></i> Получить консультацию
                </button>
            </div>
        </div>
    </header>

    <!-- Основной контент -->
    <main class="container">
        <div class="catalog-content">
            <!-- Блок фильтров -->
            <aside class="filters-sidebar">
                <div class="filter-mobile-toggle" id="filterToggle">
                    <span>Фильтры</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                
                <div class="filters-container" id="filtersContainer">
                    <div class="filter-block">
                        <h3 class="filter-title">Тип кузова <button class="filter-reset">Сбросить</button></h3>
                        <div class="filter-options">
                            <div class="filter-option">
                                <input type="checkbox" id="body-sedan" checked>
                                <label for="body-sedan">Седан</label>
                                <span class="filter-option-count">(24)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="body-crossover" checked>
                                <label for="body-crossover">Кроссовер</label>
                                <span class="filter-option-count">(18)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="body-suv">
                                <label for="body-suv">Внедорожник</label>
                                <span class="filter-option-count">(12)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="body-hatchback">
                                <label for="body-hatchback">Хэтчбек</label>
                                <span class="filter-option-count">(8)</span>
                            </div>
                        </div>
                    </div>

                    <div class="filter-block">
                        <h3 class="filter-title">Бренд</h3>
                        <div class="filter-options">
                            <div class="filter-option">
                                <input type="checkbox" id="brand-chery" checked>
                                <label for="brand-chery">Chery</label>
                                <span class="filter-option-count">(15)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="brand-geely" checked>
                                <label for="brand-geely">Geely</label>
                                <span class="filter-option-count">(14)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="brand-byd" checked>
                                <label for="brand-byd">BYD</label>
                                <span class="filter-option-count">(10)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="brand-haval" checked>
                                <label for="brand-haval">Haval</label>
                                <span class="filter-option-count">(8)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="brand-zeekr">
                                <label for="brand-zeekr">Zeekr</label>
                                <span class="filter-option-count">(5)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="brand-exeed">
                                <label for="brand-exeed">Exeed</label>
                                <span class="filter-option-count">(4)</span>
                            </div>
                        </div>
                    </div>

                    <div class="filter-block">
                        <h3 class="filter-title">Тип двигателя</h3>
                        <div class="filter-options">
                            <div class="filter-option">
                                <input type="checkbox" id="engine-gasoline" checked>
                                <label for="engine-gasoline">Бензин</label>
                                <span class="filter-option-count">(32)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="engine-hybrid" checked>
                                <label for="engine-hybrid">Гибрид</label>
                                <span class="filter-option-count">(18)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="engine-electric">
                                <label for="engine-electric">Электромобиль</label>
                                <span class="filter-option-count">(12)</span>
                            </div>
                        </div>
                    </div>

                    <div class="filter-block">
                        <h3 class="filter-title">Привод</h3>
                        <div class="filter-options">
                            <div class="filter-option">
                                <input type="checkbox" id="drive-front" checked>
                                <label for="drive-front">Передний</label>
                                <span class="filter-option-count">(28)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="drive-all">
                                <label for="drive-all">Полный</label>
                                <span class="filter-option-count">(24)</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="drive-rear">
                                <label for="drive-rear">Задний</label>
                                <span class="filter-option-count">(10)</span>
                            </div>
                        </div>
                    </div>

                    <div class="filter-block">
                        <h3 class="filter-title">Цена, ₽</h3>
                        <input type="range" class="price-range" min="1000000" max="10000000" step="100000" value="2000000">
                        <input type="range" class="price-range" min="1000000" max="10000000" step="100000" value="5000000">
                        <div class="price-values">
                            <span>1 000 000</span>
                            <span>10 000 000</span>
                        </div>
                    </div>

                    <div class="filter-block">
                        <h3 class="filter-title">Статус</h3>
                        <div class="filter-options">
                            <div class="filter-option">
                                <input type="checkbox" id="status-new" checked>
                                <label for="status-new">Новинка</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="status-instock" checked>
                                <label for="status-instock">В наличии</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="status-order">
                                <label for="status-order">Под заказ</label>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Основной каталог -->
            <div class="catalog-main">
                <div class="sort-row">
                    <div class="results-count">Найдено 42 автомобиля</div>
                    <select class="sort-select">
                        <option value="price-asc">По цене (дешевые сначала)</option>
                        <option value="price-desc">По цене (дорогие сначала)</option>
                        <option value="popular">По популярности</option>
                        <option value="year-desc">По году (новые сначала)</option>
                        <option value="year-asc">По году (старые сначала)</option>
                    </select>
                </div>

                <div class="cars-grid">
                    <!-- Карточка автомобиля 1 -->
                    <div class="car-card">
                        <div class="car-badge new">Новинка</div>
                        <img src="https://via.placeholder.com/600x400/1a2a3a/ffffff?text=Geely+Atlas+Pro" alt="Geely Atlas Pro" class="car-image">
                        <div class="car-info">
                            <h3 class="car-title">Geely Atlas Pro 2024</h3>
                            <div class="car-price">от 2 390 000 ₽</div>
                            <div class="car-specs">
                                <div class="car-spec"><i class="fas fa-gas-pump"></i> 1.5 л, 177 л.с.</div>
                                <div class="car-spec"><i class="fas fa-cog"></i> Гибрид</div>
                                <div class="car-spec"><i class="fas fa-tachometer-alt"></i> Автомат</div>
                                <div class="car-spec"><i class="fas fa-car"></i> Полный привод</div>
                            </div>
                            <div class="car-actions">
                                <a href="/catalog/geely-atlas-pro" class="car-button car-button-detail">Подробнее</a>
                                <button class="car-button car-button-test">Тест-драйв</button>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка автомобиля 2 -->
                    <div class="car-card">
                        <div class="car-badge hit">Хит</div>
                        <img src="https://via.placeholder.com/600x400/1a2a3a/ffffff?text=Chery+Tiggo+8" alt="Chery Tiggo 8" class="car-image">
                        <div class="car-info">
                            <h3 class="car-title">Chery Tiggo 8 Pro</h3>
                            <div class="car-price">от 2 890 000 ₽</div>
                            <div class="car-specs">
                                <div class="car-spec"><i class="fas fa-gas-pump"></i> 2.0 л, 254 л.с.</div>
                                <div class="car-spec"><i class="fas fa-cog"></i> Бензин</div>
                                <div class="car-spec"><i class="fas fa-tachometer-alt"></i> Автомат</div>
                                <div class="car-spec"><i class="fas fa-car"></i> Полный привод</div>
                            </div>
                            <div class="car-actions">
                                <a href="/catalog/chery-tiggo-8" class="car-button car-button-detail">Подробнее</a>
                                <button class="car-button car-button-test">Тест-драйв</button>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка автомобиля 3 -->
                    <div class="car-card">
                        <img src="https://via.placeholder.com/600x400/1a2a3a/ffffff?text=BYD+Song+Plus" alt="BYD Song Plus" class="car-image">
                        <div class="car-info">
                            <h3 class="car-title">BYD Song Plus EV</h3>
                            <div class="car-price">от 3 490 000 ₽</div>
                            <div class="car-specs">
                                <div class="car-spec"><i class="fas fa-bolt"></i> Электромотор</div>
                                <div class="car-spec"><i class="fas fa-car-battery"></i> 510 км заряд</div>
                                <div class="car-spec"><i class="fas fa-tachometer-alt"></i> Автомат</div>
                                <div class="car-spec"><i class="fas fa-car"></i> Передний привод</div>
                            </div>
                            <div class="car-actions">
                                <a href="/catalog/byd-song" class="car-button car-button-detail">Подробнее</a>
                                <button class="car-button car-button-test">Тест-драйв</button>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка автомобиля 4 -->
                    <div class="car-card">
                        <div class="car-badge new">Новинка</div>
                        <img src="https://via.placeholder.com/600x400/1a2a3a/ffffff?text=Haval+Jolion" alt="Haval Jolion" class="car-image">
                        <div class="car-info">
                            <h3 class="car-title">Haval Jolion 2024</h3>
                            <div class="car-price">от 1 990 000 ₽</div>
                            <div class="car-specs">
                                <div class="car-spec"><i class="fas fa-gas-pump"></i> 1.5 л, 150 л.с.</div>
                                <div class="car-spec"><i class="fas fa-cog"></i> Бензин</div>
                                <div class="car-spec"><i class="fas fa-tachometer-alt"></i> Вариатор</div>
                                <div class="car-spec"><i class="fas fa-car"></i> Передний привод</div>
                            </div>
                            <div class="car-actions">
                                <a href="/catalog/haval-jolion" class="car-button car-button-detail">Подробнее</a>
                                <button class="car-button car-button-test">Тест-драйв</button>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка автомобиля 5 -->
                    <div class="car-card">
                        <img src="https://via.placeholder.com/600x400/1a2a3a/ffffff?text=Zeekr+001" alt="Zeekr 001" class="car-image">
                        <div class="car-info">
                            <h3 class="car-title">Zeekr 001</h3>
                            <div class="car-price">от 4 990 000 ₽</div>
                            <div class="car-specs">
                                <div class="car-spec"><i class="fas fa-bolt"></i> 544 л.с.</div>
                                <div class="car-spec"><i class="fas fa-car-battery"></i> 620 км заряд</div>
                                <div class="car-spec"><i class="fas fa-tachometer-alt"></i> Автомат</div>
                                <div class="car-spec"><i class="fas fa-car"></i> Полный привод</div>
                            </div>
                            <div class="car-actions">
                                <a href="/catalog/zeekr-001" class="car-button car-button-detail">Подробнее</a>
                                <button class="car-button car-button-test">Тест-драйв</button>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка автомобиля 6 -->
                    <div class="car-card">
                        <div class="car-badge hit">Хит</div>
                        <img src="https://via.placeholder.com/600x400/1a2a3a/ffffff?text=Exeed+TX" alt="Exeed TX" class="car-image">
                        <div class="car-info">
                            <h3 class="car-title">Exeed TXL</h3>
                            <div class="car-price">от 3 290 000 ₽</div>
                            <div class="car-specs">
                                <div class="car-spec"><i class="fas fa-gas-pump"></i> 2.0 л, 245 л.с.</div>
                                <div class="car-spec"><i class="fas fa-cog"></i> Бензин</div>
                                <div class="car-spec"><i class="fas fa-tachometer-alt"></i> Робот</div>
                                <div class="car-spec"><i class="fas fa-car"></i> Полный привод</div>
                            </div>
                            <div class="car-actions">
                                <a href="/catalog/exeed-txl" class="car-button car-button-detail">Подробнее</a>
                                <button class="car-button car-button-test">Тест-драйв</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Пагинация -->
                <div class="pagination">
                    <button class="pagination-button"><i class="fas fa-chevron-left"></i></button>
                    <button class="pagination-button active">1</button>
                    <button class="pagination-button">2</button>
                    <button class="pagination-button">3</button>
                    <button class="pagination-button">4</button>
                    <button class="pagination-button"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>

        <!-- SEO блок -->
        <div class="seo-block">
            <h2 class="seo-title">Китайские автомобили - современный выбор</h2>
            <p class="seo-text">В нашем каталоге представлены <span class="seo-highlight">лучшие китайские автомобили 2023-2024 года</span> от ведущих производителей. Китайский автопром за последние годы совершил настоящий прорыв в качестве, технологиях и дизайне.</p>
            <p class="seo-text">Модели таких брендов как <span class="seo-highlight">Geely, Chery, BYD, Haval</span> сочетают в себе передовые технологии, богатую комплектацию и привлекательную цену. В линейке представлены как экономичные городские автомобили, так и просторные семейные кроссоверы, мощные внедорожники и высокотехнологичные электромобили.</p>
            <p class="seo-text">Все автомобили проходят предпродажную подготовку и имеют <span class="seo-highlight">официальную гарантию производителя</span>. Мы предлагаем удобные условия покупки: кредит, лизинг, trade-in. Для всех моделей доступен тест-драйв в Москве и других городах России.</p>
        </div>

        <!-- CTA блок -->
        <div class="cta-block">
            <h3 class="cta-title">Не уверены в выборе?</h3>
            <p class="cta-text">Получите консультацию — мы подберём авто под ваши задачи и бюджет, расскажем о специальных предложениях и условиях покупки</p>
            <button class="cta-button">
                <i class="fas fa-car"></i> Получить персональное предложение
            </button>
        </div>
    </main>

    <script>
        // Мобильное меню фильтров
        const filterToggle = document.getElementById('filterToggle');
        const filtersContainer = document.getElementById('filtersContainer');

        filterToggle.addEventListener('click', () => {
            filterToggle.classList.toggle('active');
            filtersContainer.classList.toggle('active');
        });

        // Имитация фильтрации
        const filterOptions = document.querySelectorAll('.filter-options input');
        filterOptions.forEach(option => {
            option.addEventListener('change', () => {
                // Здесь будет логика фильтрации (AJAX или фильтрация на клиенте)
                console.log('Фильтры изменены');
            });
        });

        // Имитация сортировки
        const sortSelect = document.querySelector('.sort-select');
        sortSelect.addEventListener('change', () => {
            console.log('Сортировка изменена:', sortSelect.value);
        });

        // Обработчики для кнопок тест-драйва
        const testDriveButtons = document.querySelectorAll('.car-button-test');
        testDriveButtons.forEach(button => {
            button.addEventListener('click', () => {
                alert('Открывается форма записи на тест-драйв');
                // Здесь можно добавить код для открытия модального окна
            });
        });

        // Обработчик для CTA кнопки
        const ctaButton = document.querySelector('.cta-button');
        ctaButton.addEventListener('click', () => {
            alert('Открывается форма персонального предложения');
        });

        // Анимация появления карточек при скролле
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.car-card').forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = `all 0.5s ease ${index * 0.1}s`;
            observer.observe(card);
        });
    </script>
</body>
@include('footer')
</html>