const toggleButton = document.getElementById("toggle-button");
const navItems = document.getElementById("nav-items");

toggleButton.addEventListener("click", () => {
  const isHidden = navItems.classList.contains("show") ? true : false;
  if (isHidden) {
    requestAnimationFrame(() => {
      navItems.classList.remove("show");
    });
    toggleButton.textContent = "CLOSE";
  } else {
    requestAnimationFrame(() => {
      navItems.classList.add("show");
    });
    toggleButton.textContent = "OPEN";
  }
});
