<?php get_header(); ?>

<div class="container-fluid mt-3">
  <div class="row align-content-center">
    <div class="col-12 col-lg-9">
    <?php get_template_part("includes/section", "pagecontent"); ?>
    </div>
      
        <?php get_sidebar(); ?>

  </div>
</div>
    
<?php get_footer();
?>
