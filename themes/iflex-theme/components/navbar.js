const toggleButton = document.getElementById("toggle-button");
const navItems = document.getElementById("nav-items");

toggleButton.addEventListener("click", () => {
  const isHidden = navItems.classList.contains("show") ? true : false;
  if (isHidden) {
    toggleButton.children[0].classList.remove("dashicons-no-alt");
    requestAnimationFrame(() => {
      navItems.classList.remove("show");
      toggleButton.children[0].classList.add("dashicons-menu-alt3");
    });
  } else {
    toggleButton.children[0].classList.remove("dashicons-menu-alt3");
    requestAnimationFrame(() => {
      navItems.classList.add("show");
      toggleButton.children[0].classList.add("dashicons-no-alt");
    });
  }
});
