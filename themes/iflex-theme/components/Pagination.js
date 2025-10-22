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
      "gap-3",
      "border-top",
      "border-2",
      "border-dark",
      "px-2",
      "py-5"
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
    prev.classList.add(
      "text-danger",
      "text-decoration-none",
      "shadow",
      "fs-2",
      "border",
      "border-2",
      "border-success",
      "d-flex",
      "justify-content-center",
      "align-items-center",
      "py-1",
      "rounded-pill",
      "px-2"
    );
    prev.innerHTML = `<span class="dashicons dashicons-arrow-left"></span>`;
  }

  next(next) {
    console.log(next);
    next.classList.add(
      "text-danger",
      "text-decoration-none",
      "shadow",
      "fs-2",
      "border",
      "border-2",
      "border-danger",
      "d-flex",
      "justify-content-center",
      "align-items-center",
      "py-1",
      "rounded-pill",
      "px-2"
    );
    next.innerHTML = `<span class="dashicons dashicons-arrow-right"></span>`;
  }

  current(current) {
    current.classList.add(
      "bg-danger",
      "text-light",
      "fs-4",
      "rounded-pill",
      "px-2",
      "py-2",
      "shadow",
      "border",
      "border-2",
      "border-dark"
    );
  }
}

export default Pagination;
