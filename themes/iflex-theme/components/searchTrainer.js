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
    // hide overlay if user input less / equal to 2 characters
    if (this.userInputValue.length <= 2) {
      if (!this.liveSearchOverlay.classList.contains("d-none")) {
        this.liveSearchOverlay.classList.add("d-none");
      }
    }

    this.typingTimerID = setTimeout(() => {
      //check again cause set time out will fire no matter what when id doesnt get reset
      if (this.userInputValue.length >= 2) {
        this.triggerSearch();
      }
      this.typingTimerID = null;
    }, 1300);
  }

  cancelLiveSearch() {
    clearTimeout(this.typingTimerID);
  }

  // request api / fetching data
  async triggerSearch() {
    //show live results overlay
    this.liveSearchOverlay.innerHTML = `<p>Searching..</p>`;
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

      if (data.data && data.data.length >= 1) {
        this.liveSearchHTML(data);
      } else {
        this.liveSearchOverlay.innerHTML = `<p> No trainer found </p>`;
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
  resultHTML() {
    // all relevent trainers goes here
  }
}

export default SearchTrainer;
