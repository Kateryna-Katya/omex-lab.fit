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
                <span class="section-tag">Privacy Policy</span>
                <h1 class="fade-in">Политика конфиденциальности</h1>
                
                <div class="policy-hero-card fade-in">
                    <p>
                        Настоящая политика распространяется на персональные данные, предоставляемые клиентами 
                        <strong><?= $domainTitle ?></strong>, как для оказания услуг по обучению и консультированию, 
                        так и для других взаимодействий в цифровом формате.
                    </p>
                </div>
            </div>

            <div class="legal-content fade-in">
                <div class="policy-notice">
                    <div class="list-icon"><i data-lucide="shield-alert"></i></div>
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения Политики. 
                        Предоставляя свои данные, вы даете полное согласие на их обработку способами, предусмотренными настоящим документом в соответствии с нормами ЕС.
                    </p>
                </div>

                <div class="legal-section">
                    <h2>Порядок сбора, хранения и уничтожения</h2>
                    <div class="storage-info">
                        <div class="storage-item">
                            <i data-lucide="clock"></i>
                            <span>Срок хранения до <strong>75 лет</strong></span>
                        </div>
                        <div class="storage-item">
                            <i data-lucide="user-check"></i>
                            <span>Только с вашего согласия</span>
                        </div>
                    </div>
                    <p>
                        Для предотвращения утечки данных мы используем полный комплекс мер передовой цифровой инфраструктуры. Уничтожение данных осуществляется по запросу клиента или при достижении целей сбора.
                    </p>
                </div>

                <div class="data-collection-grid">
                    <div class="data-box">
                        <h3><i data-lucide="cpu"></i> Техническая информация</h3>
                        <ul>
                            <li>IP-адрес и время доступа</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>Данные браузера и просмотры блоков</li>
                        </ul>
                    </div>
                    <div class="data-box">
                        <h3><i data-lucide="contact-2"></i> Персонализация</h3>
                        <ul>
                            <li>Имя пользователя</li>
                            <li>E-mail и номер телефона</li>
                            <li>Данные о контрактах и услугах</li>
                        </ul>
                    </div>
                </div>

                <div class="legal-section">
                    <h2>Цели обработки персональных данных</h2>
                    <ul class="legal-list">
                        <li>
                            <div class="list-icon"><i data-lucide="check-circle"></i></div>
                            <span>Предоставление доступа к инновационной платформе обучения.</span>
                        </li>
                        <li>
                            <div class="list-icon"><i data-lucide="check-circle"></i></div>
                            <span>Учет пожеланий при разработке новых решений.</span>
                        </li>
                        <li>
                            <div class="list-icon"><i data-lucide="check-circle"></i></div>
                            <span>Информирование об акциях и материалах в Германии.</span>
                        </li>
                        <li>
                            <div class="list-icon"><i data-lucide="check-circle"></i></div>
                            <span>Обеспечение качественной обратной связи 24/7.</span>
                        </li>
                    </ul>
                </div>

                <div class="rights-block">
                    <h2>Ваши права</h2>
                    <p>
                        Если вы хотите отредактировать свои данные или прекратить их обработку, свяжитесь с командой <strong><?= $domainTitle ?></strong>:
                    </p>
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