import "./style.css";
import "../components/navbar.js";
import downloadButton from "../components/page-modules.js";
import SearchTrainer from "../components/searchTrainer.js";
document.addEventListener("DOMContentLoaded", () => {
  new downloadButton(".download-btn");
  const searchTrainer = new SearchTrainer();
});
