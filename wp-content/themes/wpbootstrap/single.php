<?php get_header(); ?>
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content'); ?>
          <?php endwhile; ?>
          <hr>
        <?php else : ?>
          <p><?php echo "<i>No Posts Found!</i>"; ?></p>
        <?php endif; ?>
        <?php comments_template(); ?>
      </div><!-- /.blog-main -->
<?php get_footer(); ?>
