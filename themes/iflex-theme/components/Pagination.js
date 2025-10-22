class Pagination {
  constructor() {
    this.pageNumbers = document.querySelectorAll("ul.page-numbers li");
    this.parentNumbers = document.querySelector("ul.page-numbers");
    this.init();
  }

  //initialize listener
  init() {
    // parent / ul
    this.parentNumbers.classList.add(
      "list-unstyled",
      "d-flex",
      "flex-row",
      "gap-3"
    );
    // page numbers
    if (!this.pageNumbers) return;
    this.pageNumbers.forEach((page) => {
      const span = page.querySelector("span");
      const a = page.querySelector("a");
      if (span && span.classList.contains("current")) {
        this.current(span);
      }
      if (a) {
        if (a.classList.contains("prev")) this.prev(a);
        if (a.classList.contains("next")) this.next(a);

        if (!a.classList.contains("prev") && !a.classList.contains("next")) {
          a.classList.add("d-none");
        }
      }
    });
  }

  prev(prev) {
    console.log(prev);
  }

  next(next) {
    next.classList.add("text-danger");
    console.log(next);
  }

  current(current) {
    console.log(current);
  }
}

export default Pagination;
