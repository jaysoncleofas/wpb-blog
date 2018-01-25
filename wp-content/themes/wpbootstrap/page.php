<?php get_header(); ?>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="blog-post">
                <h2 class="blog-post-title">
                  <?php the_title(); ?>
                </h2>
                <p><?php the_content(); ?></p>
              </div><!-- /.blog-post -->
            <?php endwhile; ?>
          <?php else : ?>
            <p><?php __('No Page Found!'); ?></p>
          <?php endif; ?>

        </div><!-- /.blog-main -->

<?php get_footer(); ?>
