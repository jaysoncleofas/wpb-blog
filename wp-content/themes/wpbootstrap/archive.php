<?php get_header(); ?>
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content'); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found!'); ?></p>
        <?php endif; ?>
        <hr>
        <?php comments_template(); ?>
      </div><!-- /.blog-main -->
<?php get_footer(); ?>
