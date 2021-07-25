<?php
/*
Template Name: Образовательные программы
*/
?>

<?php get_header(); ?>


  <div class="row align-content-center">
    <main class="col-12 col-lg-9 px-5 main">  
      <?php get_template_part("includes/section", "pagecontent"); ?>

      <p class="font-weight-bold">Реализуемые образовательные программы</p> 

      <ul>
        <li>Основная образовательная программа дошкольного образования</li>
        <li>Основная образовательная программа начального общего образования</li>
        <li>Основная образовательная программа основного общего образования</li>
        <li>Основная образовательная программа среднего общего образования</li>
      </ul>

      <p>Численность обучающихся</p>

  </main>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer();
?>