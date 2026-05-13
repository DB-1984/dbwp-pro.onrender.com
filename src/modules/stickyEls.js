class StickyEls {
  constructor() {
    this.navElems = [document.querySelector(".header-nav")];
    this.openOverlay = document.querySelector("#overlay-nav");

    window.addEventListener("scroll", () => this.checkPosition());
  }

  checkPosition() {
    this.scrollPosition = window.scrollY;

    if (this.scrollPosition > 150) {
      this.navElems.forEach((elem) => elem.classList.add("header-bg"));
      this.openOverlay.classList.add("scrolled");
    } else {
      this.navElems.forEach((elem) => elem.classList.remove("header-bg"));
      this.openOverlay.classList.remove("scrolled");
    }
  }
}

export default StickyEls;
