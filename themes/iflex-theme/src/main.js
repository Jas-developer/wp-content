import "./style.css";
import "../components/navbar.js";
import downloadButton from "../components/page-modules.js";
import SearchTrainer from "../components/searchTrainer.js";
import Pagination from "../components/Pagination.js";
new downloadButton(".download-btn");
document.addEventListener("DOMContentLoaded", () => {
  const searchTrainer = new SearchTrainer();
  const pagination = new Pagination();
});
