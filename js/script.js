// navbar starts
let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
};

document.querySelector('#navbar-close').onclick = () => {
    navbar.classList.remove('active');
};

window.onscroll = () => {
    navbar.classList.remove('active');

    if (window.scrollY > 0) {
        document.querySelector('.header').classList.add('active');
    } else {
        document.querySelector('.header').classList.remove('active');
    }
};

window.onload = () => {
    if (window.scrollY > 0) {
        document.querySelector('.header').classList.add('active');
    } else {
        document.querySelector('.header').classList.remove('active');
    }
};
// navbar ends

// register starts

// let register = document.querySelector('.register-section');

// document.querySelector('#reg-btn').onclick = () => {
//     register.classList.add('active');
// };

// document.querySelector('#reg-close').onclick = () => {
//     register.classList.remove('active');
// };

// register ends

// login starts

// let login = document.querySelector('.login-section');

// document.querySelector('#log-btn').onclick = () => {
//     login.classList.add('active');
// };

// document.querySelector('#log-close').onclick = () => {
//     login.classList.remove('active');

// login ends

// banner swiper starts
var swiper = new Swiper(".banner-slider", {
    loop: true,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
// banner swiper ends

/*statistic nnimation starts*/
let valueDisplays = document.querySelectorAll(".num");
let interval = 5000;

valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function() {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);
});
// statistic animation ends