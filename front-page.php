<?php get_header(); ?>


<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-5">
      <blockquote class="citation citation-success">
        <div class="citation-body mt-3">
          Дорогие гости нашего сайта! Я рада приветствовать вас на сайте нашей
          школы. Наш сайт создан для всех, кто интересуется жизнью школы, её
          планами и достижениями, кому важно узнать о педагогическом коллективе,
          образовательных программах и воспитательной работе. Приглашаем вас
          чаще бывать на страницах нашего информационного ресурса.
        </div>
        <div class="citation-footer">
          <cite>Директор ГБОУ СОШ №653 Е.Н. Шубина</cite>
        </div>
      </blockquote>
    </div>
    <div class="col-4">
        <img src="<?php echo get_theme_file_uri("/images/director.jpg"); ?>" alt="" class="img-fluid img-thumbnail">
    </div>
  </div>

</div>


<?php get_template_part("includes/section", "frontcontent"); ?>
  
<?php get_footer();
?>
