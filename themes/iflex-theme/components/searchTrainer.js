import axios from "axios";

class SearchTrainer {
  constructor() {
    // DOM properties / references
    this.searchSendBtn = document.querySelector("#search-trainer-btn");
    this.userInputField = document.getElementById("search-trainer-input");
    this.liveSearchOverlay = document.querySelector(
      "#result-trainer-container"
    );
    this.trainersContainer = document.getElementById("trainers-container");
    this.originalContainer = this.trainersContainer.innerHTML;
    // class properties
    this.baseUrl = localizedData.restUrl;
    this.nonce = localizedData.nonce;
    this.typingTimerID;
    this.userInputValue;
    this.init();
    this.onResultsPage = false;
  }

  init() {
    this.userInputField.addEventListener("input", (e) => this.searchTrainer(e));
    this.userInputField.addEventListener("keydown", (e) => {
      if (e.key === "Enter") {
        this.searchSendBtn.click();
      }
    });

    this.searchSendBtn.addEventListener("click", () => {
      console.log("button was clicked");
      this.onResultsPage = true;
      if (this.userInputValue.length >= 2) {
        this.triggerSearch();
      }
    });
  }

  searchTrainer(e) {
    this.userInputValue = e.target.value;
    // hide overlay if user input is still less / equal to 2 characters
    if (this.userInputValue.length <= 2) {
      if (!this.liveSearchOverlay.classList.contains("d-none")) {
        this.liveSearchOverlay.classList.add("d-none");
      }
    }
    //reset set time out if user still typing
    if (
      typeof this.typingTimerID === "number" ||
      this.userInputValue.length <= 2
    ) {
      clearTimeout(this.typingTimerID);
      console.log("live search is canceled");
    }

    this.typingTimerID = setTimeout(() => {
      //check again cause set time out will fire no matter what when id doesnt get reset
      if (this.userInputValue.length >= 2) {
        this.triggerSearch();
      }
      this.typingTimerID = null;
    }, 1300);
  }

  // fetch data w8 axios
  async triggerSearch() {
    console.log(this.userInputValue, "from triggered");
    // check if search btn was clicked
    const isOverlayHidden = this.liveSearchOverlay.classList.contains("d-none");
    const pageStatus = this.onResultsPage;
    this.onResultsPage = false;

    if (!this.onResultsPage && isOverlayHidden) {
      this.liveSearchOverlay.classList.remove("d-none");
      this.liveSearchOverlay.innerHTML = `<p>Searching..</p>`;
    }

    try {
      const API = `${this.baseUrl}iflex/v1/search-trainers`;

      const { data } = await axios.get(API, {
        params: {
          search: this.userInputValue.trim(),
        },
      });

      if (data.data && data.data.length >= 1) {
        if (pageStatus) {
          this.resultHTML(data);
        } else {
          this.liveSearchHTML(data);
        }
      } else {
        if (!this.onResultsPage)
          this.liveSearchOverlay.innerHTML = `<p> No trainer found for ${this.userInputValue}</p>`;
      }
    } catch (error) {
      console.log(error);
    }
  }
  // display live result html overlay
  liveSearchHTML(data) {
    const trainers = data.data;
    const html = trainers
      .map((trainer) => {
        return `<div>
                    <a href="${trainer.permalink}" class="text-danger">${trainer.name}</a>
                    <p>${trainer.message}</p>
                    <hr class="fw-bold"/>
                </div>`;
      })
      .join("");

    this.liveSearchOverlay.innerHTML = html;
  }

  // display all relevant trainers
  resultHTML(data) {
    this.liveSearchOverlay.classList.add("d-none");
    const trainers = data.data;
    const html = trainers.map((trainer) => {
      return `<div class="certified-trainer-card rounded   d-flex   border border-lg-1 border-0 gap-4 z-1 flex-column justify-content-center align-items-center px-1 py-2 px-lg-3 py-lg-4 ">
                  <!-- trainer image  -->
                  <div class="trainer-img-card w-100 overflow-hidden position-relative border-bottom border-1 ">
                    <img 
                      class="trainer-img rounded "
                      src="${trainer.imageUrl}" alt="${trainer.name}">
                  </div>
                  <!-- text -content -->
                  <div class="d-flex gap-2 flex-column w-100">
                      <span 
                      class="trainer-level text-light w-75  py-1 rounded px-1 text-center fw-bold fs-6 border border-1  bg-danger"
                      > 
                      
                      </span>
                      <span class="trainer-name fs-4 text-dark fw-bold">${trainer.name}</span>
                      <span class="trainer-address fs-6 text-secondary">${trainer.address}</span>
                  </div>
                  <!-- button content -->
                  <div class="view-profile-btn w-100 mt-2">
                      <button onclick="window.location.href='${trainer.permalink}'" class="align-items-center w-75 d-flex border border-2 gap-3 rounded-pill border-danger justify-content-center">
                          <span class="text-danger fw-semibold fs-5 mb-1"> View Profile </span>
                          <span class="dashicons dashicons-arrow-right-alt fs-5 text-danger "></span>
                      </button>
                  </div>
              </div>`;
    });
    //attatched to parent div
    this.trainersContainer.innerHTML = html;
  }
}

export default SearchTrainer;
