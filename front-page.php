<?php get_header();
?>

<main id='primary' class='site-main'>

    <section class='container mntn' aria-labelledby='home-hero-title'>
        <div class='row'>

            <div class='col-md-4 d-flex align-items-center'>
                <div class='hero text-light text-center py-5'>
                    <div class='border-left-h1'>
                        <h1 id='home-hero-title' class='display-4 typed-js'></h1>

                        <p class='lead'>
                            <strong>DBWP.PRO | </strong>
                            WordPress/WooCommerce site creation &amp;
                            technical support, with no surprises.
                        </p>

                        <a href='#usp-section' class='btn btn-primary cta mt-3' id='usp-anchor'>
                            Start here
                        </a>
                    </div>
                </div>
            </div>

            <div class='col-md-8 d-flex align-items-center position-relative'>
                <img src="<?php echo esc_url( get_theme_file_uri( 'assets/wpwc.png' ) ); ?>"
                    class='d-block wpwc img-fluid position-absolute' alt='' width='200' loading='lazy'>

                <img data-aos='fade-up' src="<?php echo esc_url( get_theme_file_uri( 'assets/mntn.png' ) ); ?>"
                    alt='WordPress and WooCommerce support illustration' class='img-fluid'>
            </div>

        </div>
    </section>

    <?php get_template_part( 'template-parts/usp-section' );?>
    <?php get_template_part( 'template-parts/bs-contact-form' );?>
    <?php get_template_part( 'template-parts/latest-posts' );?>

</main>

<?php get_footer();
?>