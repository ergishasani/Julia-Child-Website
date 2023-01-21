julia_life.addEventListener('click', (e) => {
    e.preventDefault();
    let section = document.getElementById('julia_life_section');
    let sectionPosition = section.getBoundingClientRect();
    window.scrollBy({
        top: sectionPosition.top,
        left: 0,
        behavior: 'smooth'
    });
});

best_recipes.addEventListener('click', (e) => {
    e.preventDefault();
    let section = document.getElementById('julia_best_recipes');
    let sectionPosition = section.getBoundingClientRect();
    window.scrollBy({
        top: sectionPosition.top,
        left: 0,
        behavior: 'smooth'
    });
});

let home = document.getElementById('scrollup_container');

home.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
});

