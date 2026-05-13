import "../css/style.scss"; // scss for gulp
import AOS from "aos"; // animate on scroll package
import "aos/dist/aos.css"; // AOS CSS
import searchAPI from "./modules/searchAPIasync"; // Duh...
import StorageCookiePopup from "./modules/storageCookie";
import MenuOverlayShow from "./modules/menuOverlay";
import StickyEls from "./modules/stickyEls";
import FormHandler from "./modules/formHandler";
import { initializeTyped, initializeTypedBlog } from "./modules/typed";

const menuOverlayShow = new MenuOverlayShow();
const storageCookie = new StorageCookiePopup();
const stickyEls = new StickyEls();
const formHandler = new FormHandler();

AOS.init();
searchAPI();

document.addEventListener("DOMContentLoaded", function () {
  initializeTyped();
});
document.addEventListener("DOMContentLoaded", function () {
  initializeTypedBlog();
});
