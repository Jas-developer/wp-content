import axios from "axios";

class SearchTrainer {
  constructor() {
    // DOM properties / references
    this.searchSendBtn = document.querySelector("#search-trainer-btn");
    this.userInputField = document.getElementById("search-trainer-input");
    this.liveSearchOverlay = document.querySelector(
      "#result-trainer-container"
    );
    // class properties
    this.baseUrl = localizedData.restUrl;
    this.nonce = localizedData.nonce;
    this.typingTimerID;
    this.userInputValue;
    this.init();
  }

  init() {
    this.userInputField.addEventListener("input", (e) => this.searchTrainer(e));
  }

  searchTrainer(e) {
    this.userInputValue = e.target.value;
    if (
      typeof this.typingTimerID === "number" ||
      this.userInputValue.length <= 2
    ) {
      this.cancelLiveSearch();
      console.log("live search is canceled");
    }
    //  add overlay
    if (this.userInputValue.length <= 2) {
      if (!this.liveSearchOverlay.classList.contains("d-none")) {
        this.liveSearchOverlay.classList.add("d-none");
      }
    }

    this.typingTimerID = setTimeout(() => {
      if (this.userInputValue.length >= 2) {
        this.triggerSearch();
      }
      this.typingTimerID = null;
    }, 1300);
  }

  cancelLiveSearch() {
    clearTimeout(this.typingTimerID);
  }

  async triggerSearch() {
    if (this.liveSearchOverlay.classList.contains("d-none")) {
      this.liveSearchOverlay.classList.remove("d-none");
    }

    try {
      const { data } = await axios.get(
        `${this.baseUrl}iflex/v1/search-trainers`,
        {
          params: {
            search: this.userInputValue.trim(),
          },
        }
      );

      if (data) {
        this.liveSearchHTML(data);
      }
    } catch (error) {
      console.log(error);
    }
  }
  //html
  liveSearchHTML(data) {
    // display html
    console.log(this.userInputValue);
    console.log(data);
  }

  resultHTML() {}

  clearOverlayHTML() {}
}

export default SearchTrainer;
