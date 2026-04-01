document.addEventListener('DOMContentLoaded', () => {
    // --- Mobile Menu ---
    const btn = document.getElementById("menu-btn");
    const menu = document.getElementById("mobile-menu-div");
    if (btn && menu) {
        btn.addEventListener('click', () => menu.classList.toggle('hidden'));
    }

    // --- Carousel Logic ---
    const guitars = window.guitarData || [];
    let currentIndex = 0;
    let slideInterval;

    function updateCarousel(index) {
        const guitar = guitars[index];
        const content = document.getElementById('carousel-content');
        const details = document.getElementById('details-block');

        if (!content || !guitar) return;

        content.style.opacity = 0;
        content.style.transform = "translateY(10px)";

        setTimeout(() => {
            document.getElementById('guitar-name').innerText = guitar.name;
            document.getElementById('guitar-img').src = guitar.image;
            document.getElementById('guitar-edition').innerText = guitar.edition;
            document.getElementById('guitar-desc').innerText = guitar.desc;
            document.getElementById('spec-body').innerText = guitar.body;
            document.getElementById('spec-neck').innerText = guitar.neck;
            document.getElementById('spec-pickups').innerText = guitar.pickups;
            document.getElementById('spec-scale').innerText = guitar.scale;

            content.style.opacity = 1;
            content.style.transform = "translateY(0px)";
        }, 300);
    }

    // Reset and start the timer
    function resetTimer() {
        clearInterval(slideInterval);
        slideInterval = setInterval(window.nextSlide, 10000);
    }

    // Attach functions to window so onclick="" in HTML works
    window.nextSlide = function () {
        currentIndex = (currentIndex + 1) % guitars.length;
        updateCarousel(currentIndex);
        resetTimer();
    };

    window.prevSlide = function () {
        currentIndex = (currentIndex - 1 + guitars.length) % guitars.length;
        updateCarousel(currentIndex);
        resetTimer();
    };

    // Auto-slide pause on hover
    const carouselShield = document.getElementById('home-link'); // or your container ID
    if (carouselShield) {
        carouselShield.addEventListener('mouseenter', () => clearInterval(slideInterval));
        carouselShield.addEventListener('mouseleave', resetTimer);
    }

    // Initialize
    if (guitars.length > 0) {
        updateCarousel(0);
        resetTimer();
    }
});