<?php
/*
Template Name: Структурные подразделения
*/
?>

<?php get_header(); ?>


  <div class="row align-content-center">
    <main class="col-12 col-lg-9 px-5 main">
      <?php get_template_part("includes/section", "pagecontent"); ?>

      <ol class="text-justify">
          <li>
            <p class="font-weight-bold">Отделение дошкольного образования</p>
            <p>Руководитель: Миронова Анна Сергеевна</p>
            <p>Структурные подразделения находятся по адресу главного здания школы: пр.Мечникова, д.5, корп.1, литера А</p> 
            <p>dou653spb@obr.gov.spb.ru</p>
            <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/polozhenie-ob-otdelenii-doshkolnogo-obrazovaniya.pdf"
              );?>"">Положение об отделении дошкольного образования</a></p>
          </li>
          <li>
            <p class="font-weight-bold">Отделение дополнительного образования детей (ОДОД)</p>
            <p>Руководитель: Спигина Ольга Борисовна</p>
            <p>Структурные подразделения находятся по адресу главного здания школы: пр.Мечникова, д.5, корп.1, литера А</p> 
            <p>it653@obr.gov.spb.ru</p>
            <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/polozhenie-ob-odod.pdf"
              );?>"">Положение об ОДОД</a></p>
          </li>
      </ol>
      </main>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer();
?>