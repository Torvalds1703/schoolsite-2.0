<?php
/*
Template Name: Образовательные программы
*/
?>

<?php get_header(); ?>


  <div class="row align-content-center">
    <div class="col-12 col-lg-9 px-5">
      <?php get_template_part("includes/section", "pagecontent"); ?>

      <p class="font-weight-bold">Реализуемые образовательные программы</p> 

      <ul>
        <li>Основная образовательная программа дошкольного образования</li>
        <li>Основная образовательная программа начального общего образования</li>
        <li>Основная образовательная программа основного общего образования</li>
        <li>Основная образовательная программа среднего общего образования</li>
      </ul>

      <p>Численность обучающихся</p>

    </div>

    <div class="d-none d-lg-block col-3">
      <div class="p-3 mt-1 border border-secondary">
      <?php get_sidebar(); ?>
      </div> 
    </div>

  </div>
</div>

<?php get_footer();
?>