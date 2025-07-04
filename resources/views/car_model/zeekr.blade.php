<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Просмотр - Chery Tiggo 7 Pro | EMAX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
    <style>
        :root {
            --primary: #1a1a1a;
            --secondary: #252525;
            --accent: #00a8ff;
            --accent-hover: #0095e0;
            --text: #ffffff;
            --text-secondary: #cccccc;
            --glass-bg: rgba(30, 30, 30, 0.85);
            --border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Exo 2', sans-serif;
            background-color: #121212;
            color: var(--text);
            height: 100vh;
            overflow: hidden;
        }

        /* Основной контейнер */
        .viewer-container {
            display: flex;
            height: 100vh;
            position: relative;
        }

        /* Область 3D модели */
        .model-section {
            flex: 1;
            position: relative;
            overflow: hidden;
        }

        model-viewer {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1e1e1e, #2a2a2a);
            --progress-bar-color: var(--accent);
        }

        /* Кнопка назад */
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
            background-color: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border);
            color: var(--text);
            padding: 10px 20px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background-color: var(--accent);
            color: #000;
            transform: translateX(-3px);
        }

        /* Панель характеристик */
        .specs-panel {
            width: 350px;
            background-color: var(--glass-bg);
            backdrop-filter: blur(15px);
            border-left: 1px solid var(--border);
            padding: 30px;
            overflow-y: auto;
            transition: transform 0.4s ease;
            position: relative;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .panel-title {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--accent), #00ffaa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .close-panel {
            background: none;
            border: none;
            color: var(--text);
            font-size: 1.5rem;
            cursor: pointer;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .close-panel:hover {
            opacity: 1;
        }

        .car-description {
            margin-bottom: 25px;
            line-height: 1.6;
            opacity: 0.9;
        }

        .specs-list {
            list-style: none;
            margin-bottom: 30px;
        }

        .spec-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed var(--border);
        }

        .spec-name {
            opacity: 0.7;
        }

        .spec-value {
            font-weight: 600;
        }

        .price-container {
            background: linear-gradient(90deg, rgba(0,168,255,0.2), rgba(0,255,136,0.2));
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            text-align: center;
        }

        .price-label {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-bottom: 5px;
        }

        .price-value {
            font-size: 2rem;
            font-weight: 800;
        }

        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .action-button {
            padding: 15px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .primary-button {
            background: linear-gradient(90deg, var(--accent), #00ffaa);
            color: #000;
        }

        .primary-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 255, 136, 0.3);
        }

        .secondary-button {
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--text);
            border: 1px solid var(--border);
        }

        .secondary-button:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Кнопка полноэкранного режима */
        .fullscreen-button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border);
            color: var(--text);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .fullscreen-button:hover {
            background-color: var(--accent);
            color: #000;
        }

        /* Мобильная версия */
        @media (max-width: 992px) {
            .viewer-container {
                flex-direction: column;
            }
            
            .specs-panel {
                width: 100%;
                height: 50vh;
                position: fixed;
                bottom: 0;
                left: 0;
                transform: translateY(calc(100% - 60px));
                border-top: 1px solid var(--border);
                border-left: none;
                padding-top: 70px;
            }
            
            .specs-panel.active {
                transform: translateY(0);
            }
            
            .panel-handle {
                position: absolute;
                top: 15px;
                left: 0;
                right: 0;
                display: flex;
                justify-content: center;
            }
            
            .handle-bar {
                width: 60px;
                height: 4px;
                background-color: var(--text-secondary);
                border-radius: 2px;
                cursor: pointer;
            }
            
            .close-panel {
                position: absolute;
                top: 10px;
                right: 20px;
            }
        }

        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.6s ease forwards;
        }
    </style>
</head>
<body>
    <div class="viewer-container">
        <!-- Область 3D модели -->
        <div class="model-section">
            <a href="/" class="back-button fade-in">
                <i class="fas fa-arrow-left"></i>
                <span>Вернуться в каталог</span>
            </a>
            
            <model-viewer 
                src="models/zeekr.glb" 
                alt="3D модель Chery Tiggo 7 Pro"
                auto-rotate
                camera-controls
                ar
                camera-orbit="0deg 75deg 105%"
                environment-image="neutral"
                exposure="0.8"
                shadow-intensity="1"
            >
                <button class="ar-button" slot="ar-button">
                    <i class="fas fa-vr-cardboard"></i> AR просмотр
                </button>
            </model-viewer>
            
            <button class="fullscreen-button fade-in" id="fullscreenButton">
                <i class="fas fa-expand"></i>
            </button>
        </div>
        
        <!-- Панель характеристик -->
        <div class="specs-panel" id="specsPanel">
            <div class="panel-handle">
                <div class="handle-bar" id="panelHandle"></div>
            </div>
            <button class="close-panel" id="closePanel">
                <i class="fas fa-times"></i>
            </button>
            
            <div class="panel-header fade-in">
                <h1 class="panel-title">Chery Tiggo 7 Pro</h1>
            </div>
            
            <p class="car-description fade-in delay-1">
                Премиальный кроссовер с современным дизайном и передовыми технологиями. 
                Идеальное сочетание комфорта, мощности и безопасности.
            </p>
            
            <ul class="specs-list">
                <li class="spec-item fade-in delay-1">
                    <span class="spec-name">Год выпуска</span>
                    <span class="spec-value">2023</span>
                </li>
                <li class="spec-item fade-in delay-2">
                    <span class="spec-name">Двигатель</span>
                    <span class="spec-value">1.5 Turbo (150 л.с.)</span>
                </li>
                <li class="spec-item fade-in delay-3">
                    <span class="spec-name">Коробка передач</span>
                    <span class="spec-value">Вариатор</span>
                </li>
                <li class="spec-item fade-in delay-4">
                    <span class="spec-name">Привод</span>
                    <span class="spec-value">Передний</span>
                </li>
                <li class="spec-item fade-in delay-1">
                    <span class="spec-name">Расход топлива</span>
                    <span class="spec-value">7.4 л/100 км</span>
                </li>
                <li class="spec-item fade-in delay-2">
                    <span class="spec-name">Разгон 0-100 км/ч</span>
                    <span class="spec-value">9.8 сек</span>
                </li>
                <li class="spec-item fade-in delay-3">
                    <span class="spec-name">Гарантия</span>
                    <span class="spec-value">5 лет</span>
                </li>
            </ul>
            
            <div class="price-container fade-in delay-4">
                <div class="price-label">Цена от</div>
                <div class="price-value">2 190 000 ₽</div>
            </div>
            
            <div class="action-buttons">
                <button class="action-button primary-button fade-in delay-1">
                    <i class="fas fa-car"></i> Записаться на тест-драйв
                </button>
                <button class="action-button secondary-button fade-in delay-2">
                    <i class="fas fa-file-contract"></i> Оставить заявку
                </button>
            </div>
        </div>
    </div>

    <script>
        // Управление панелью характеристик
        const specsPanel = document.getElementById('specsPanel');
        const panelHandle = document.getElementById('panelHandle');
        const closePanel = document.getElementById('closePanel');
        
        // Для мобильных устройств
        if (window.innerWidth <= 992) {
            let startY = 0;
            let currentY = 0;
            
            panelHandle.addEventListener('touchstart', (e) => {
                startY = e.touches[0].clientY;
            }, { passive: true });
            
            panelHandle.addEventListener('touchmove', (e) => {
                currentY = e.touches[0].clientY;
                const diff = startY - currentY;
                
                if (diff > 0) {
                    // Свайп вверх - открываем
                    specsPanel.classList.add('active');
                } else if (diff < -20) {
                    // Свайп вниз - закрываем
                    specsPanel.classList.remove('active');
                }
            }, { passive: true });
            
            closePanel.addEventListener('click', () => {
                specsPanel.classList.remove('active');
            });
            
            // Открываем панель при клике на ручку
            panelHandle.addEventListener('click', () => {
                specsPanel.classList.add('active');
            });
        } else {
            // Для десктопа просто скрываем кнопку закрытия
            closePanel.style.display = 'none';
        }
        
        // Полноэкранный режим
        const fullscreenButton = document.getElementById('fullscreenButton');
        const modelViewer = document.querySelector('model-viewer');
        
        fullscreenButton.addEventListener('click', () => {
            if (document.fullscreenElement) {
                document.exitFullscreen();
            } else {
                modelViewer.requestFullscreen();
            }
        });
        
        // Изменение иконки при переходе в полноэкранный режим
        document.addEventListener('fullscreenchange', () => {
            if (document.fullscreenElement) {
                fullscreenButton.innerHTML = '<i class="fas fa-compress"></i>';
            } else {
                fullscreenButton.innerHTML = '<i class="fas fa-expand"></i>';
            }
        });
        
        // Анимация при загрузке
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                if (window.innerWidth <= 992) {
                    specsPanel.classList.add('active');
                }
            }, 1000);
        });
    </script>
</body>
</html>