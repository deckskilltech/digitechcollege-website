document.addEventListener("DOMContentLoaded", () => {
  const burgerMenu = document.querySelector(".burger-menu");
  const nav = document.querySelector("nav");

  burgerMenu.addEventListener("click", () => {
    nav.classList.toggle("visible");
  });

  // Ensure nav is always visible on desktop resize
  window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
      nav.classList.remove("visible"); // Reset for desktop view
      nav.style.display = "flex"; // Ensure it's always visible
    } else {
      nav.style.display = ""; // Let CSS handle mobile behavior
    }
  });
});
