<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>


  <div class="row align-content-center">
    <main class="col-12 col-lg-9 px-5 main">
      <?php get_template_part("includes/section", "pagecontent"); ?>

        <p>Контактный телефон: <a href="tel:+78124173427">(812) 417-34-27</a></p>
        <p>Контактный телефон дошкольного отделения: <a href="tel:+78124173464">(812) 417-34-64</a></p>   
        <p> Адрес электронной почты: <a href = "mailto: it653@obr.gov.spb.ru">it653@obr.gov.spb.ru</a></p>                  
        <p>Адрес электронной почты дошкольного отделения: <a href = "mailto: dou653spb@obr.gov.spb.ru">dou653spb@obr.gov.spb.ru</a></p> 

    </main>

      <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer();
?>