<?php get_header(); ?>

<div class="container-fluid">
  <div class="row align-content-center">
    <div class="col-12 col-lg-9">
      <div class="row flex-column flex-lg-row text-left align-items-center">
        <div class="col-12 order-2 col-xl-6">
          <blockquote class="citation citation-success">
            <div class="citation-body">
              <p>Дорогие гости, я рада приветствовать вас на сайте нашей школы. Наше образовательное учреждение является единственной школой в России с углубленным изучением языка хинди, что является уникальной образовательной услугой.</p>
              <p>Наши выпускники – результат нашего труда! Образованные, с активной жизненной и гражданской позицией, успешные, они претворяют в жизнь все, о чем мечтали вместе с нами, здесь, в родной школе хинди. Мы гордимся их успехами и победами!</p>
              <p>С нашей историей, достижениями, инновационными проектами можно ознакомиться более подробно на страницах школьного сайта.</p>
            </div>
            <div class="citation-footer">
              <cite>Директор ГБОУ СОШ №653 Е.Н. Шубина</cite>
            </div>
          </blockquote>
        </div>
        <div class="col-12 order-1 col-xl-6">
          <img
            src="<?php echo get_theme_file_uri('/images/director.jpg'); ?>"
            alt="Фотография директора школы"
            class="img-fluid rounded"
          />
        </div>
        </div>
        <div class="row mt-3">
          <div class="col-12 pl-4">
          <?php get_template_part('includes/section', 'frontcontent'); ?>
          </div>
      </div>
    </div>

      <?php get_sidebar(); ?>
      
  </div>
</div>

<?php get_footer();
?>
