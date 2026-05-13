<?php wp_footer(); ?>

<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media - add border-top back later-->
  <!--section class="d-flex justify-content-center"> 
    < Left -->

  <!-- Right -->
  <!--div>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div-->
  <!-- Right >
  </section>
  <Section: Social media -->

  <!-- Copyright -->

  <div class="container-fluid copyright" style="padding-left: 0; padding-right: 0">
    <div class="row">
      <div class="col-12 col-md-6 text-center text-md-left p-4">
        &copy; <?php echo date_i18n('Y'); ?> DBWP.pro
      </div>
      <div class="col-12 col-md-6 text-center text-md-right p-4">
        <a href="/privacy-policy" class="text-decoration-none" style="color: white!important">Privacy Policy</a>
      </div>
    </div>
  </div>

  <div class="scroll-top">Top <i class="fa-solid fa-arrow-up-long"></i></div>

  <!-- Copyright -->

  <!-- Popup HTML -->
  <div id="popup-container" style="display: none">
    <p>By proceeding through this website, you accept the terms of our <span class="text-highlight"><a href="privacy-policy.html">Privacy Policy</a></span></p>
    <button id="close-btn">Close</button>
  </div>

  <script>
    const anchorLink = document.querySelector("#usp-anchor");
    const anchorTarget = document.querySelector("#usp-anchor-top");
    if (anchorTarget) {
      anchorLink.addEventListener("click", () => {
        anchorTarget.scrollIntoView({
          behavior: "smooth"
        });
      });
    }
  </script>

  <script>
    const menuDiv = document.querySelector("#menu-icon-shape");
    const menuShapes = document.querySelectorAll('#menu-icon div');

    menuDiv.addEventListener('mouseover', () => {
      menuShapes.forEach(shape => {
        shape.style.backgroundColor = '#b7b7b7';
      });
    });

    menuDiv.addEventListener('mouseout', () => {
      menuShapes.forEach(shape => {
        shape.style.backgroundColor = '';
      });
    });
  </script>

  <script>
    window.addEventListener("scroll", () => showScrollToTop());

    function showScrollToTop() {
      scrollUpIcon = document.querySelector("div.scroll-top");
      scrollPosition = window.scrollY;
      if (scrollPosition > window.innerHeight / 2) {
        scrollUpIcon.style.display = "block";
      } else {
        scrollUpIcon.style.display = "none";
      }
    }
    document.querySelector("div.scroll-top").addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>

</footer>
<!-- Footer -->

</body>

</html>