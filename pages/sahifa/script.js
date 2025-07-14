document.addEventListener("DOMContentLoaded", () => {
    const fadeIns = document.querySelectorAll('.fade-in');
    const slideIns = document.querySelectorAll('.slide-in');

    fadeIns.forEach((el, idx) => {
        el.style.animationDelay = `${idx * 0.3}s`;
    });

    slideIns.forEach((el, idx) => {
        el.style.animationDelay = `${(idx + 1) * 0.5}s`;
    });
});
