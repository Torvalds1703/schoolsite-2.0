<?php get_header(); ?>

<div class="container mt-3 mb-3">
  <div class="row">
    <?php if (has_post_thumbnail()): ?>
      <div class="col">
        <img src="<?php the_post_thumbnail_url(
          "blog-large"
        ); ?>" alt="" class="img-fluid img-thumbnail">
      </div>
    <?php endif; ?>
          
    <div class="col">
      <h1><?php the_title(); ?></h1>
      <?php get_template_part("includes/section", "blogcontent"); ?>
    </div>
  </div>
</div>

<?php get_footer();
?>
