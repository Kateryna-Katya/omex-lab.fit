document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок Lucide
    if (window.lucide) {
        lucide.createIcons();
    }

    // 2. Мобильное меню
    const burger = document.querySelector('.burger');
    const closeMenu = document.querySelector('.mobile-close');
    const overlay = document.querySelector('.mobile-overlay');
    const menuLinks = document.querySelectorAll('.mobile-menu__list a');

    const toggleMenu = () => overlay.classList.toggle('is-active');

    burger?.addEventListener('click', toggleMenu);
    closeMenu?.addEventListener('click', toggleMenu);
    menuLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 3. Плавный скролл и эффект хедера
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '15px 0';
            header.style.background = 'rgba(26, 36, 33, 0.95)';
        } else {
            header.style.padding = '25px 0';
            header.style.background = 'transparent';
        }
    });

    // 4. Параллакс Hero-карточки
    const heroCard = document.querySelector('.hero__card');
    if (heroCard) {
        document.addEventListener('mousemove', (e) => {
            const x = (window.innerWidth / 2 - e.pageX) / 35;
            const y = (window.innerHeight / 2 - e.pageY) / 35;
            heroCard.style.transform = `perspective(1000px) rotateY(${x}deg) rotateX(${-y}deg)`;
        });
    }

    // 5. Аккордеон FAQ
    const faqItems = document.querySelectorAll('.faq__item');
    faqItems.forEach(item => {
        item.querySelector('.faq__trigger').addEventListener('click', () => {
            const isActive = item.classList.contains('is-active');
            faqItems.forEach(i => i.classList.remove('is-active'));
            if (!isActive) item.classList.add('is-active');
        });
    });

    // 6. Форма контактов и Капча
    let captchaResult;
    const captchaText = document.getElementById('captchaQuestion');
    const generateCaptcha = () => {
        const a = Math.floor(Math.random() * 10) + 1;
        const b = Math.floor(Math.random() * 10) + 1;
        captchaResult = a + b;
        if (captchaText) captchaText.innerText = `${a} + ${b}`;
    };
    generateCaptcha();

    const phoneInput = document.getElementById('phoneInput');
    phoneInput?.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^0-9]/g, '');
    });

    const contactForm = document.getElementById('mainContactForm');
    contactForm?.addEventListener('submit', async (e) => {
        e.preventDefault();
        const userCaptcha = document.getElementById('captchaInput').value;
        const formMessage = document.getElementById('formMessage');
        const submitBtn = document.getElementById('submitBtn');

        if (parseInt(userCaptcha) !== captchaResult) {
            formMessage.textContent = "Неверный ответ!";
            formMessage.className = "form-message error";
            return;
        }

        submitBtn.disabled = true;
        submitBtn.querySelector('.loader').style.display = 'block';
        submitBtn.querySelector('span').style.opacity = '0';

        await new Promise(r => setTimeout(r, 2000));

        formMessage.textContent = "Успешно! Мы скоро свяжемся с вами.";
        formMessage.className = "form-message success";
        submitBtn.disabled = false;
        submitBtn.querySelector('.loader').style.display = 'none';
        submitBtn.querySelector('span').style.opacity = '1';
        contactForm.reset();
        generateCaptcha();
    });

    // 7. Cookie Popup
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => cookiePopup.classList.add('is-visible'), 2000);
    }

    acceptBtn?.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookiePopup.classList.remove('is-visible');
    });

    // 8. Intersection Observer для анимаций
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('is-visible');
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('section, .fade-in').forEach(el => observer.observe(el));
});