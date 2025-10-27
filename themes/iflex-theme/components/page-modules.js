class DownloadManager {
  constructor(buttonSelector) {
    this.buttons = document.querySelectorAll(buttonSelector);
    this.init();
  }

  init() {
    this.buttons.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.preventDefault();
        this.handleDownload(e);
      });
    });
  }

  handleDownload(e) {
    //prevent default
    const button = e.currentTarget;
    const fileUrl = button.dataset.file;
    const fileName = button.dataset.filename || "download";

    this.fetchDownload(fileUrl, fileName);
  }
  fetchDownload(fileUrl, fileName) {
    fetch(fileUrl)
      .then((res) => res.blob())
      .then((blob) => this.triggerDownload(blob, fileName))
      .catch((err) => console.log(err));
  }
  triggerDownload(blob, fileName) {
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement("a");

    // hide the temp link
    a.style.display = "none";
    a.href = url;
    a.download = fileName;

    // add to DOM, trigger, and clean up
    document.body.appendChild(a);
    a.click();

    setTimeout(() => {
      window.URL.revokeObjectURL(url);
      a.remove();
    }, 100);
  }
}

export default DownloadManager;
