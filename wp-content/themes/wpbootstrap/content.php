<div class="blog-post">
  <h2 class="blog-post-title">
    <?php if (is_single()): ?>
      <?php the_title(); ?>
    <?php else: ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    <?php endif; ?>
  </h2>
  <p class="blog-post-meta"><?php the_Time('F j, Y g:i a'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('id')); ?>"><?php the_author(); ?></a></p>
  <?php if (has_post_thumbnail()): ?>
    <a class="post-thumb" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
      <?php the_post_thumbnail(); ?>
    </a>
  <?php endif; ?>
  <p>
    <?php if (is_single()): ?>
      <?php the_content(); ?>
    <?php else: ?>
      <?php the_excerpt(); ?>
    <?php endif; ?>
  </p>
</div><!-- /.blog-post -->
