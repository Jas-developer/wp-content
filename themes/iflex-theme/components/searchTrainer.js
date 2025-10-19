class SearchTrainer {
  constructor() {
    // DOM properties / references
    this.searchSendBtn = document.querySelector("#search-trainer-btn");
    this.userInputField = document.getElementById("search-trainer-input");
    this.liveSearchOverlay = document.querySelector(
      "#result-trainer-container"
    );
    // class properties
    this.typingTimerID;
    this.userInputValue;
    document.addEventListener("DOMContentLoaded", () => {
      this.init();
    });
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
    }, 2000);
  }

  cancelLiveSearch() {
    clearTimeout(this.typingTimerID);
  }

  triggerSearch() {
    //define api
    // query or get request
    // store result response to a variable
    // pass neccessary results properties only to the live search html
    console.log("live search is triggered");
    if (this.liveSearchOverlay.classList.contains("d-none")) {
      this.liveSearchOverlay.classList.remove("d-none");
    }

    if (this.userInputValue.length > 0) this.liveSearchHTML();
  }
  //html
  liveSearchHTML() {
    // display html
    console.log(this.userInputValue);
    console.log(localizedData.restUrl);
    console.log(localizedData.nonce);
  }

  resultHTML() {}

  clearOverlayHTML() {}
}

export default SearchTrainer;
