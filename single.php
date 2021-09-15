<?php get_header(); ?>

<div class="container-fluid mt-3 news-single">
  <div class="row align-content-center">
  <div class="main-content col-12 col-lg-9">
  <?php if (has_post_thumbnail()): ?>

      <div class="col">
        <h1><?php the_title(); ?></h1>
        <img src="<?php the_post_thumbnail_url(
          "blog-large"
        ); ?>" alt="" class="img-fluid img-thumbnail">
      </div>
    <?php endif; ?>

    <div class="col">
      <?php get_template_part("includes/section", "blogcontent"); ?>
    </div>
    </div>

      <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer();
?>
