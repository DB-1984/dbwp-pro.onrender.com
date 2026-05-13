class MenuOverlayShow {
  constructor() {
    // Cache elements
    this.menuIconShape = document.getElementById("menu-icon-shape");
    this.headerNav = document.querySelector(".header-nav");
    this.topMiddleBottom = document.querySelectorAll("#top, #middle, #bottom");
    this.overlayNav = document.querySelector("#overlay-nav");
    this.bodyHeaderNav = document.querySelector(
      "body > header > div.header-nav"
    );
    this.logoText = document.querySelector("div.logo > a > p");

    // Bind event listeners
    this.menuIconShape.addEventListener(
      "click",
      this.handleMenuClick.bind(this)
    );
    document.addEventListener("keyup", this.handleKeyUp.bind(this));
  }

  handleMenuClick() {
    this.toggleMenu();
    this.stopScroll();
  }

  handleKeyUp(e) {
    if (e.key === "Escape" && this.overlayNav.classList.contains("active")) {
      this.closeMenu();
      this.stopScroll();
    }
  }

  stopScroll() {
    const isActive = this.overlayNav.classList.contains("active");

    const scrollbarWidth =
      window.innerWidth - document.documentElement.clientWidth;

    if (isActive) {
      document.documentElement.style.overflow = "hidden";
      document.body.style.paddingRight = `${scrollbarWidth}px`;
    } else {
      document.documentElement.style.overflow = "";
      document.body.style.paddingRight = "";
    }
  }

  toggleMenu() {
    const isActive = !this.menuIconShape.classList.contains("active");
    this.setMenuState(isActive);
  }

  closeMenu() {
    this.setMenuState(false);
  }

  setMenuState(isActive) {
    this.menuIconShape.classList.toggle("active", isActive);
    this.headerNav.classList.toggle("active", isActive);
    this.topMiddleBottom.forEach((element) =>
      element.classList.toggle("active", isActive)
    );
    this.overlayNav.classList.toggle("active", isActive);
  }
}

export default MenuOverlayShow;
