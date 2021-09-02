<?php get_header(); ?>
<script src='https://pos.gosuslugi.ru/bin/script.min.js'></script> 

<div class="container-fluid">

<div class="row"> 
  <div class="col">
  <div id='js-show-iframe-wrapper'>
    <div class='pos-banner-fluid bf-23'>
      <div class='bf-23__decor'>
        <div class='bf-23__logo-wrap'>
          <img
            class='bf-23__logo'
            src='https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg'
            alt='Госуслуги'
          />
          <div class='bf-23__slogan'>Решаем вместе</div>
        </div>
      </div>
      <div class='bf-23__content'>
        <div class='bf-23__text'>
          Есть предложения по организации учебного процесса или знаете, как сделать школу лучше?
        </div>

        <div class='bf-23__bottom-wrap'>
          <div class='bf-23__btn-wrap'>
            <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
            <button
              class='pos-banner-btn_2'
              type='button'
            >Написать о проблеме
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <script>Widget("https://pos.gosuslugi.ru/form", 262465)</script>

  <div class="row align-content-center">
    <div class="col-12 col-lg-9">
      <div class="">
      <!-- <div class="col-12 order-1 col-xl-6">
            <img
              src="<?php echo get_theme_file_uri('/images/director.jpg'); ?>"
              alt="Фотография директора школы"
              class="img-fluid rounded main__director-photo"
            />
      </div> -->

        <div class="col-12 order-2 ">
          <img
              src="<?php echo get_theme_file_uri('/images/director.jpg'); ?>"
              alt="Фотография директора школы"
              class="img-fluid rounded main__director-photo"
            />
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
