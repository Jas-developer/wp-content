class SearchTrainer {
  constructor() {
    this.searchSendBtn = document.querySelector("#search-trainer-btn");
    this.userInputField = document.querySelector("#search-trainer-input");
    this.typingTimerID;
    this.userInputValue;
    this.init();
  }

  init() {
    this.userInputField.addEventListener("input", (e) => this.searchTrainer(e));
  }

  searchTrainer(e) {
    //trigger live search only after user stop typing for 2 seconds
    // store the set time out id
    this.userInputValue = e.target.value;
    if (typeof this.typingTimerID === "number") {
      this.cancelLiveSearch();
      console.log("live search is canceled");
    }

    if (this.userInputValue.length !== 0)
      this.typingTimerID = setTimeout(() => {
        this.triggerSearch();
        this.typingTimerID = null;
      }, 2000);
  }

  cancelLiveSearch() {
    clearTimeout(this.typingTimerID);
  }

  triggerSearch() {
    if (this.userInputValue.length > 0) this.liveSearchHTML();
  }
  //html
  liveSearchHTML() {
    console.log(this.userInputValue);
  }

  resultHTML() {}

  clearOverlay() {}
}

export default SearchTrainer;
