<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <div class="header-nav">
            <div id="menu-icon-shape" role="button" tabindex="0" aria-label="Open menu" aria-controls="overlay-nav"
                aria-expanded="false">
                <div id="menu-icon">
                    <div id="top"></div>
                    <div id="middle"></div>
                    <div id="bottom"></div>
                </div>
            </div>

            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
                    <p class="logo-text">]}<span></span></p>
                </a>
            </div>
        </div>

        <div id="overlay-nav">
            <div id="nav-content">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

                <div id="mk-fullscreen-search-wrapper">
                    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>"
                            placeholder="Search..." id="search-input">
                        <span id="clear"><i class="fa-regular fa-trash-can"></i></span>
                    </form>

                    <div id="results-container"></div>
                </div>
            </div>
        </div>
    </header>