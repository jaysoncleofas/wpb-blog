<?php get_header(); ?>

<main role="main" class="container">
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-4">
      <div class="card mb-4 box-shadow h-md-250">
        <?php if (is_active_sidebar('box1')): ?>
          <?php dynamic_sidebar('box1') ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 box-shadow h-md-250">
        <div class="card-body align-items-start">
          <strong class="d-inline-block mb-2 text-primary"><i class="fa fa-gears"></i></strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Featured post</a>
          </h3>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 box-shadow h-md-250">
        <div class="card-body align-items-start">
          <strong class="d-inline-block mb-2 text-primary"><i class="fa fa-search"></i></strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Featured post</a>
          </h3>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
