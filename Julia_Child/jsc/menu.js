document.getElementById("home").addEventListener("click", function() {
    // add the "transition-out" class to the current page
    document.body.classList.add("transition-out");

    // wait for the transition to complete before navigating to the new page
    setTimeout(function() {
      window.location.href = "index.html";
    }, 1000);
  });

  document.getElementById("best_recipes").addEventListener("click", function(event) {
    event.preventDefault();
    window.location.href = "index.html#julia_best_recipes";
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("julia_best_recipes").scrollIntoView({ behavior: 'smooth' });
    });
});
