class storageCookiePopup {
  constructor() {
    document.addEventListener("DOMContentLoaded", () => {
      const status = localStorage.getItem("Status");

      if (status !== "Visited") {
        const popup = document.getElementById("popup-container");
        popup.style.display = "flex";

        const closeBtn = document.getElementById("close-btn");
        closeBtn.addEventListener("click", () => {
          popup.style.display = "none";
        });

        // Set the status in local storage
        localStorage.setItem("Status", "Visited");
      }
    });
  }
}

export default storageCookiePopup;
