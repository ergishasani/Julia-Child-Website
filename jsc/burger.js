document.addEventListener("DOMContentLoaded", () => {
    const burger = document.getElementById("burger");
    const navMenu = document.getElementById("navMenu");

    burger.addEventListener("click", () => {
        burger.classList.toggle("open");
        navMenu.classList.toggle("active");
    });
});
