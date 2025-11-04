const toggleButton = document.getElementById("toggle-button");
const navItems = document.getElementById("nav-items");

toggleButton.addEventListener("click", () => {
  const isHidden = navItems.classList.contains("show") ? true : false;
  if (isHidden) {
    toggleButton.children[0].classList.remove("dashicons-no");

    toggleButton.children[0].style.fontSize = "25px";
    toggleButton.children[0].style.marginLeft = "-10px";
    requestAnimationFrame(() => {
      navItems.classList.remove("show");
      toggleButton.children[0].classList.add("dashicons-menu-alt3");
    });
  } else {
    toggleButton.children[0].classList.remove("dashicons-menu-alt3");
    toggleButton.children[0].classList.remove("text-danger");

    requestAnimationFrame(() => {
      navItems.classList.add("show");
      toggleButton.children[0].classList.add("dashicons-no");
      toggleButton.children[0].style.fontSize = "36px";
      toggleButton.children[0].style.marginLeft = "-20px";
    });
  }
});
