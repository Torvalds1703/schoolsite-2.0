<?php
/*
Template Name: Список учителей
*/
?>

<?php get_header(); ?>


  <div class="row align-content-center">
    <main class="col-12 col-lg-9 px-5 main">
      <?php get_template_part("includes/section", "pagecontent"); ?>
    </main>

    <?php get_template_part("includes/section", "teacher"); ?>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer();
?>