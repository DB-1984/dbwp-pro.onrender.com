<?php get_header(); ?>

<body <?php body_class(); ?>>
    <div class="container-fluid blog-home-parent">
        <div class="container blog-home" style="position: relative;" data-aos="fade-down">
            <div class="row">
                <div class="col-md-6">
                    <img src='<?php echo get_theme_file_uri('assets/dbwp-logo.png'); ?>' class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <h1 class="display-1 lh-1 blog-title text-white typed-js-index">
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
            <div class="col-md-6 mb-4">
                <div class="card blog-card h-100 rounded-0">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">
                            <?php the_title(); ?>
                        </h2>
                        <p class="card-text">
                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                        </p>
                        <p class="card-date">
                            <?php echo get_the_date(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary cta blog-btn">Read more</a>
                    </div>
                </div>
            </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>


    <?php get_footer(); ?>