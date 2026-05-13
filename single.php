<?php get_header(); ?>

<body <?php body_class(); ?>>

  <div class="container single-post-container">
    <div class="row">
      <div class="col-md-12">
        <?php if (have_posts()):
          while (have_posts()):
            the_post(); ?>
            <article>
              <!-- Title Section -->
              <div class="row">
                <div class="col-12">
                  <h1 class="display-5 lh-1 mb-4 fw-bold single-title">
                    <?php the_title(); ?>
                  </h1>
                </div>
              </div>

              <!-- Excerpt Section -->
              <div class="row">
                <div class="col-10 mx-auto">
                  <p class="post-excerpt text-muted fs-4">
                    <?php echo '"' . wp_trim_words(get_the_excerpt(), 20, '...') . '"'; ?>
                  </p>
                  <span class="post-info">
                    <h6 class="post-date">
                      <?php _e('Posted on', 'textdomain'); ?> <strong>
                        <?php the_date();
                        echo ' | '; ?>
                      </strong>
                      <a class="blog-link" href="<?php echo site_url('/blog'); ?>"><u>Blog Home</u></a>
                    </h6>
                  </span>
                </div>
              </div>
            </article>
          <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>

  <!-- Featured Image -->
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12">
        <div class="featured-image">
          <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if (have_posts()):
          while (have_posts()):
            the_post(); ?>
            <!-- Main Content -->
            <div class="row">
              <div class="col-10 mx-auto main-post-content">
                <?php the_content(); ?>
              </div>
            </div>
          <?php endwhile; endif; ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>