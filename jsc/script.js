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


// listen for a click event on the "recipes" nav item
document.getElementById("recipes").addEventListener("click", function() {
    // add the "transition-out" class to the current page
    document.body.classList.add("transition-out");

    // wait for the transition to complete before navigating to the new page
    setTimeout(function() {
      window.location.href = "menu.html";
    }, 1000);
  });