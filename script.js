// Mobile Menu Toggle
const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('.nav-links');

if (mobileMenu) {
    mobileMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        // Simple animation or class change for the menu icon could go here
    });
}

// Navbar background change on scroll
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Intersection Observer for scroll animations
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Add scroll animation to sections
document.querySelectorAll('section').forEach(section => {
    section.style.opacity = '0';
    section.style.transform = 'translateY(20px)';
    section.style.transition = 'all 0.8s ease-out';
    observer.observe(section);
});

// Helper for the "fade-in" effect added via intersection observer
document.addEventListener('scroll', () => {
    document.querySelectorAll('section').forEach(section => {
        const speed = 0.5;
        const rect = section.getBoundingClientRect();
        if (rect.top < window.innerHeight * 0.8) {
            section.style.opacity = '1';
            section.style.transform = 'translateY(0)';
        }
    });

    // Reading Progress Bar logic
    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    document.getElementById("readingProgress").style.width = scrolled + "%";

    // Scroll to Top Button visibility
    const scrollToTopBtn = document.getElementById("scrollToTop");
    if (winScroll > 300) {
        scrollToTopBtn.classList.add("show");
    } else {
        scrollToTopBtn.classList.remove("show");
    }
});

// Scroll to Top Action
document.getElementById("scrollToTop").addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

// Initialize Sticker Swiper
const stickerSwiper = new Swiper('.sticker-swiper', {
    slidesPerView: 2,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.sticker-next',
        prevEl: '.sticker-prev',
    },
    breakpoints: {
        480: { slidesPerView: 3 },
        768: { slidesPerView: 4 },
        1024: { slidesPerView: 5 },
        1200: { slidesPerView: 6 }
    }
});

// Initialize Swiper for Reviews
const reviewsSwiper = new Swiper('.reviews-slider', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    }
});

// Initialize Swiper for Services Gallery
const servicesSwiper = new Swiper('.services-slider', {
    slidesPerView: 1,
    spaceBetween: 25,
    loop: true,
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    }
});

// Stats Counter Animation
const stats = document.querySelectorAll('.stat-num');
const speed = 200; // The lower the speed, the faster it counts

const animateStats = () => {
    stats.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = Math.ceil(target / speed);

            if (count < target) {
                counter.innerText = count + inc;
                setTimeout(updateCount, 15);
            } else {
                counter.innerText = target.toLocaleString();
            }
        };
        updateCount();
    });
};

// Intersection Observer to start animation when visible
const statsSection = document.querySelector('.stats-bar');
if (statsSection) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateStats();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    observer.observe(statsSection);
}

// Theme Switching Logic
const themeBtn = document.getElementById('theme-btn');
const body = document.body;

if (themeBtn) {
    const themeIcon = themeBtn.querySelector('i');

    // Check for saved theme
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'light') {
        body.classList.add('light-mode');
        themeIcon.classList.replace('fa-moon', 'fa-sun');
    }

    themeBtn.addEventListener('click', () => {
        body.classList.toggle('light-mode');

        if (body.classList.contains('light-mode')) {
            themeIcon.classList.replace('fa-moon', 'fa-sun');
            localStorage.setItem('theme', 'light');
        } else {
            themeIcon.classList.replace('fa-sun', 'fa-moon');
            localStorage.setItem('theme', 'dark');
        }
    });
}

// Brands Toggle Logic
const toggleBtn = document.getElementById('toggleBrands');
const catalog = document.getElementById('brandsCatalog');
const toggleText = document.getElementById('toggleText');

if (toggleBtn && catalog) {
    toggleBtn.addEventListener('click', () => {
        catalog.classList.toggle('expanded');
        const isExpanded = catalog.classList.contains('expanded');

        if (isExpanded) {
            toggleText.innerText = 'Свернуть';
            toggleBtn.querySelector('i').classList.replace('fa-chevron-down', 'fa-chevron-up');
        } else {
            toggleText.innerText = 'Показать все бренды';
            toggleBtn.querySelector('i').classList.replace('fa-chevron-up', 'fa-chevron-down');
        }
    });
}
