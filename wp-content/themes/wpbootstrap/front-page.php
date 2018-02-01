<?php get_header(); ?>

<main role="main" class="container">
  <div class="jumbotron p-3 p-md-5 rounded showcase">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic"><?php echo get_theme_mod('showcase_heading', 'Custon Bootstrap Wordpress Theme'); ?></h1>
      <p class="lead my-3"><?php echo get_theme_mod('showcase_text', "Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this Blog's contents."); ?></p>
      <p class="lead mb-0"><a href="<?php echo get_theme_mod('btn_url', 'http://text.com'); ?>" class="btn btn-outline-dark font-weight-bold"><?php echo get_theme_mod('btn_text', 'Take a look'); ?></a></p>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-4">
      <div class="card mb-4 box-shadow h-md-250">
        <?php if (is_active_sidebar('box1')): ?>
          <?php dynamic_sidebar('box1'); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 box-shadow h-md-250">
        <?php if (is_active_sidebar('box2')): ?>
          <?php dynamic_sidebar('box2'); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 box-shadow h-md-250">
        <?php if (is_active_sidebar('box3')): ?>
          <?php dynamic_sidebar('box3'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
