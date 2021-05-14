<?php
/*
Template Name: Список учителей
*/
?>

<?php get_header(); ?>


  <div class="row align-content-center">
    <div class="col-12 col-lg-9 px-5">
      <?php get_template_part("includes/section", "pagecontent"); ?>
    </div>

    <?php get_template_part("includes/section", "teacher"); ?>
    <div class="d-none d-lg-block col-3">
      <div class="p-3 mt-1 border border-secondary">
      <?php get_sidebar(); ?>
      </div> 
    </div>

  </div>
</div>

<?php get_footer();
?>