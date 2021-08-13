<?php get_header(); ?>

<div class="container-fluid">
  <div class="row align-content-center">
    <div class="col-12 col-lg-9">
      <div class="row flex-column flex-lg-row text-left align-items-center">
        <div class="col-12 order-2 col-xl-6">
          <blockquote class="citation citation-success">
            <div class="citation-body">
            <p>Дорогие гости нашего сайта, я рада приветствовать вас! Наша школа является единственным образовательным учреждением в России, предоставляющим услуги по  углубленному изучению языка хинди, и в этом ее уникальность. В условиях всестороннего развития российско-индийских международных отношений знание языка хинди все больше будет востребовано как в экономической, так и в культурной сфере и предоставит своим владельцам перспективы выгодного трудоустройства.</p> 
            <p>Наши выпускники – результат нашего труда! Образованные, с активной гражданской позицией, они претворяют в жизнь все, о чем мечтали вместе с нами, здесь, в стенах родной школы. Мы гордимся их успехами и победами!</p>
            <p>С нашей историей, достижениями, инновационными проектами можно ознакомиться более подробно на страницах школьного сайта!</p> 
            </div>
            <div class="citation-footer">
              <cite>Елена Николаевна Шубина, директор школы.</cite>
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
