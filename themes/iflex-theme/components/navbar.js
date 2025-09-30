const navToggle = document.getElementById("nav-toggle");
const navMenu = document.getElementById("sm-nav-menu");

navToggle.addEventListener("click", () => {
  const isOpen = navMenu.classList.contains("d-none") ? true : false;

  if (isOpen) {
    navToggle.textContent = "open";
    navMenu.classList.remove("d-none");
  } else {
    navToggle.textContent = "Close";
    navMenu.classList.add("d-none");
  }
});
