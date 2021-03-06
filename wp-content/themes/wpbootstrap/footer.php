<?php if (!is_front_page()): ?>
  <aside class="col-md-4 blog-sidebar">
    <div class="p-3">
      <?php if (is_active_sidebar('sidebar')): ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>
    </div>
  </aside><!-- /.blog-sidebar -->
<?php endif; ?>

</div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> </p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>

<?php wp_footer(); ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url')?>/js/bootstrap.js"></script>

</body>
</html>
