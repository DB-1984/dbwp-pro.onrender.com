<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>DBWP.pro</title>
</head>

<body>
  <header>
    <div class="header-nav">
      <div id="menu-icon-shape">
        <div id="menu-icon">
          <div id="top"></div>
          <div id="middle"></div>
          <div id="bottom"></div>
        </div>
      </div>
      <div class="logo">
        <a href="/" class="logo-link">
          <p class="logo-text">]}</span></p>
        </a>
      </div>
    </div>

    <!-- Overlay menu -->
    <div id="overlay-nav">
      <div id="nav-content">
        <ul>
          <li><a href="#"> About</a></li>
          <li><a href="/blog"> Blog</a></li>
          <li><a href="#"> Contact</a></li>
        </ul>
        <div id="mk-fullscreen-search-wrapper" style="padding-top: 30px; height: 100%">
          <form method="get" id="searchform" action="">
            <input type="text" value="" placeholder="Search..." id="search-input">
            <span id="clear"><i class="fa-regular fa-trash-can"></i></span>
          </form>
          <div id="results-container">
          </div>
        </div>
      </div>
    </div>

  </header>

</body>

</html>