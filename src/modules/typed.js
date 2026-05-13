import Typed from "typed.js";

const options = {
  strings: [
    "Shape" + "</br>" + "Your" + "</br>" + "Digital" + "</br>" + "Landscape",
  ],
  typeSpeed: 25,
  backSpeed: 30,
  startDelay: 500,
  backDelay: 1500,
  loop: false,
};

export function initializeTyped() {
  const typedTarget = document.querySelector(".typed-js");

  if (typedTarget) {
    return new Typed(typedTarget, options);
  }

  return null;
}

const optionsBlog = {
  strings: ["Welcome to the blog."],
  typeSpeed: 20,
  backSpeed: 30,
  startDelay: 500,
  backDelay: 1500,
  loop: false,
};

export function initializeTypedBlog() {
  const typedTarget = document.querySelector(".typed-js-index");

  if (typedTarget) {
    return new Typed(typedTarget, optionsBlog);
  }

  return null;
}
