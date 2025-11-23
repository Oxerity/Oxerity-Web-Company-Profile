// Navbar scroll effect
const navbar = document.getElementById("navbar");
let lastScroll = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 100) {
        navbar.classList.add("shadow-xl");
    } else {
        navbar.classList.remove("shadow-xl");
    }

    lastScroll = currentScroll;
});

// Simple AOS (Animate On Scroll) implementation
const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
        }
    });
}, observerOptions);

// Initialize animations
document.addEventListener("DOMContentLoaded", () => {
    const animatedElements = document.querySelectorAll("[data-aos]");
    animatedElements.forEach((el) => {
        el.style.opacity = "0";
        el.style.transform = "translateY(30px)";
        el.style.transition = "opacity 0.6s ease-out, transform 0.6s ease-out";

        const delay = el.getAttribute("data-aos-delay");
        if (delay) {
            el.style.transitionDelay = delay + "ms";
        }

        observer.observe(el);
    });
});
