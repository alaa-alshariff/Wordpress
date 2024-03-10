function animateCounter(target, duration, element) {
    var start = 0;
    var increment = 1;
    var stepTime = Math.abs(Math.floor(duration / target));

    var timer = setInterval(function () {
        start += increment;
        element.textContent = start;
        if (start >= target) {
            clearInterval(timer);
            element.textContent = target;
        }
    }, stepTime);
}

document.addEventListener('DOMContentLoaded', function () {
    var counters = document.querySelectorAll('.counter');

    counters.forEach(function (counterElement) {
        var targetValue = parseInt(counterElement.textContent, 10);

        animateCounter(targetValue, 4000, counterElement);
    });
});


const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('.show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));


var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});

var swiper = new Swiper(".mySwiper3", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});






