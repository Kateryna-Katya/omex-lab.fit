<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> | IT-школа нового поколения</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%23d4ff3f'/><path d='M30 50 L45 65 L70 35' stroke='%231a2421' stroke-width='8' fill='none' stroke-linecap='round'/></svg>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark">

    <div class="noise-overlay"></div>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="./#hero" class="logo">
                    <span class="logo__dot"></span>
                    <?= $domainTitle ?>
                </a>
                
                <ul class="menu">
                    <li><a href="./#hero" class="menu__link">Главная</a></li>
                    <li><a href="./#courses" class="menu__link">Курсы</a></li>
                    <li><a href="./#method" class="menu__link">Методика</a></li>
                    <li><a href="./#career" class="menu__link">Карьера</a></li>
                    <li><a href="./#faq" class="menu__link">Вопросы</a></li>
                </ul>

                <a href="./#contact" class="btn btn--outline">Связаться</a>

                <button class="burger" aria-label="Menu">
                    <span></span>
                </button>
            </nav>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <div class="pages__header">
                <span class="section-tag">Risk Disclosure</span>
                <div class="legal-header fade-in">
                    <div class="warning-badge">
                        <i data-lucide="alert-triangle"></i>
                    </div>
                    <h1>Отказ от ответственности</h1>
                </div>
                
                <p class="lead-text fade-in">
                    Пожалуйста, внимательно ознакомьтесь с данным дисклеймером перед началом использования платформы <strong><?= $domainTitle ?></strong>.
                </p>
            </div>

            <div class="legal-content fade-in">
                <div class="legal-section">
                    <h2>Общая информация</h2>
                    <p>
                        Все материалы, статьи и сведения, опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно информационно-ознакомительный характер. Они не являются персональной инвестиционной рекомендацией или профессиональным финансовым советом в юрисдикции Германии или любой другой страны.
                    </p>
                </div>

                <div class="legal-section">
                    <h2>Отсутствие гарантий</h2>
                    <p>
                        Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий относительно точности или актуальности представленной информации. Любые упоминания <strong>программ пассивного дохода</strong> или прошлых результатов клиентов не гарантируют аналогичных результатов в будущем.
                    </p>
                </div>

                <div class="legal-section">
                    <h2>Ограничение ответственности</h2>
                    <p>
                        Администрация сайта <strong><?= $fullDomain ?></strong> не несет ответственности за любые прямые или косвенные убытки, возникшие в результате использования наших методологий. Вся ответственность за возможные последствия лежит исключительно на пользователе.
                    </p>
                </div>

                <div class="legal-section risk-warning-box">
                    <div class="list-icon"><i data-lucide="shield-alert"></i></div>
                    <div>
                        <h3>Предупреждение о рисках</h3>
                        <p>
                            Любая деятельность в IT-сфере и инвестиции в новые проекты сопряжены с риском. Перед принятием важных решений проконсультируйтесь с независимым специалистом.
                        </p>
                    </div>
                </div>

                <div class="contact-info-block fade-in">
                    <h2>Связаться с нами</h2>
                    <p>Если у вас возникли вопросы по данному документу на <strong><?= $domainTitle ?></strong>, наши специалисты в Берлине готовы помочь:</p>
                    <div class="contact-data-grid">
                        <a href="mailto:support@<?= $fullDomain ?>" class="contact-data-item">
                            <i data-lucide="mail"></i>
                            <span>support@<?= $fullDomain ?></span>
                        </a>
                        <a href="tel:+390690289457" class="contact-data-item">
                            <i data-lucide="phone"></i>
                            <span>+39 06 9028 9457</span>
                        </a>
                        <div class="contact-data-item">
                            <i data-lucide="map-pin"></i>
                            <span>Friedrichstraße 176, 10117 Berlin, Germany</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo logo--footer"><?= $domainTitle ?></a>
                    <p class="footer__text">Технологии, которые работают на вас. Платформа года для старта в цифровой экономике.</p>
                </div>
                
                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__links">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#courses">Курсы</a></li>
                        <li><a href="./#method">Методика</a></li>
                        <li><a href="./#career">Карьера</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Юридическая информация</h4>
                    <ul class="footer__links">
                        <li><a href="./privacy.php">Политика конфиденциальности</a></li>
                        <li><a href="./terms.php">Условия использования</a></li>
                        <li><a href="./cookies.php">Cookies</a></li>
                        <li><a href="./contact.php">Контакты</a></li>
                        <li><a href="./return.php">Политика возврата</a></li>
                        <li><a href="./disclaimer.php">Дисклеймер</a></li>
                        <li><a href="./personal-data-policy.php">Политика обработки персональных данных</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <div class="footer__info">
                        <p>Friedrichstraße 176,<br>10117 Berlin, Germany</p>
                        <a href="tel:+390690289457">+39 06 9028 9457</a>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </div>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p>&copy; 2026 <?= $fullDomain ?>. Все права защищены.</p>
            </div>
        </div>
    </footer>
    <div class="mobile-overlay">
        <div class="mobile-menu">
            <button class="mobile-close"><i data-lucide="x"></i></button>
            <ul class="mobile-menu__list">
                <li><a href="./#hero">Главная</a></li>
                <li><a href="./#courses">Курсы</a></li>
                <li><a href="./#method">Методика</a></li>
                <li><a href="./#career">Карьера</a></li>
                <li><a href="./#faq">Вопросы</a></li>
            </ul>
            <a href="./#contact" class="btn btn--primary">Связаться</a>
        </div>
    </div>
    
    <div id="cookiePopup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="acceptCookies" class="btn btn--primary btn--sm">Принять</button>
        </div>
    </div>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="script.js"></script>
</body>
</html>