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
                <span class="section-tag">Payment & Refunds</span>
                <h1 class="fade-in">Политика возврата средств</h1>
                
                <div class="policy-hero-card refund-accent fade-in">
                    <p>
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <span class="text-accent"><?= $domainTitle ?></span> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве предоставляемых услуг и защите прав потребителей в ЕС.
                    </p>
                </div>
            </div>

            <div class="legal-content fade-in">
                <div class="legal-section">
                    <h2>Условия для оформления возврата</h2>
                    <div class="refund-grid">
                        <div class="refund-card">
                            <div class="refund-card__icon"><i data-lucide="file-warning"></i></div>
                            <h3>Несоответствие программе</h3>
                            <p>Если содержание материалов существенно отличается от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                        </div>
                        <div class="refund-card">
                            <div class="refund-card__icon"><i data-lucide="settings-2"></i></div>
                            <h3>Технические проблемы</h3>
                            <p>Критические ошибки на <strong><?= $fullDomain ?></strong>, которые не были устранены поддержкой в разумные сроки.</p>
                        </div>
                        <div class="refund-card">
                            <div class="refund-card__icon"><i data-lucide="timer"></i></div>
                            <h3>Период охлаждения</h3>
                            <p>Отказ в течение 14 дней с момента оплаты при условии минимального использования материалов.</p>
                        </div>
                    </div>
                </div>

                <div class="legal-section procedure-block">
                    <h2>Процедура запроса на возврат</h2>
                    <p>Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span>1</span> Письмо на <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span>2</span> Тема: «Запрос на возврат средств»</div>
                        <div class="step-mini"><span>3</span> Данные: ФИО, Email, Название программы</div>
                        <div class="step-mini"><span>4</span> Подробное описание причины запроса</div>
                    </div>
                </div>

                <div class="legal-section">
                    <h2>Сроки и способ возврата</h2>
                    <p>
                        После одобрения вашего запроса, возврат денежных средств будет произведен в течение <strong>7–14 рабочих дней</strong>. 
                        Средства возвращаются тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления зависит от регламента вашего банка в Германии.
                    </p>
                </div>

                <div class="legal-section warning-block-alt">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>
                            <div class="list-icon"><i data-lucide="slash"></i></div>
                            <span>Запрос подан по истечении 14 календарных дней с момента оплаты.</span>
                        </li>
                        <li>
                            <div class="list-icon"><i data-lucide="slash"></i></div>
                            <span>Вы уже просмотрели или скачали более 50% материалов программы.</span>
                        </li>
                        <li>
                            <div class="list-icon"><i data-lucide="slash"></i></div>
                            <span>Нарушение условий соглашения <strong><?= $domainTitle ?></strong>.</span>
                        </li>
                    </ul>
                </div>

                <div class="contact-info-block fade-in">
                    <h2>Служба финансовой поддержки</h2>
                    <p>По всем вопросам, связанным с возвратом средств, обращайтесь к нашим специалистам:</p>
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