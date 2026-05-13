<?php get_header(); ?>

<body <?php body_class(); ?>>

    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto mb-4">
                <div class="featured-image">
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article>
                            <h1 class="display-5 lh-1 mb-4"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </article>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>