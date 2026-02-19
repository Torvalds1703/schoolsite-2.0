<section
  class="container-fluid justify-content-between p-3 hero-section border-bottom"
  style="background-image: url(<?php echo get_theme_file_uri("/images/hero-image.png"); ?>);"
>
  <div class="row">
    <div class="col-3 d-none d-xl-block">
      <a href="<?php echo site_url(); ?>">
        <img
          class="img-fluid logo mt-3 ml-2"
          src="<?php echo get_theme_file_uri("/images/logo-sm.png"); ?>"
          alt="Логотип школы"
        />
      </a>
    </div>

    <div
      class="hero-section__text col-12 col-xl-6 text-center d-flex flex-column"
    >
      <div class="text-muted info ">
        Государственное бюджетное общеобразовательное учреждение
      </div>
      <h1 class="title">
        Средняя общеобразовательная школа № 653 <br />
        с углублённым изучением иностранных языков <br />
        (хинди и английского) <br />
        Калининского района Санкт-Петербурга <br />
        имени Рабиндраната Тагора
      </h1>

        <a href="<?php echo site_url(
          "/about-us/svedeniya-ob-obrazovatelnoj-organiz/"
        ); ?>">Сведения об образовательной организации</a>
    </div>

    <!-- <div
      class="d-none d-lg-flex col-3 flex-column justify-content-around text-center"
    >
      <div class="bg-light">
        <strong>Адрес</strong> 195271, г. Санкт-Петербург, пр. Мечникова, д.5,
        корпус 1, литера А
      </div>
      <div class="bg-light">
       <strong>Контакты администрации</strong> <br />
        тел. 8 (812) 417-34-27 <br />
        it653@obr.gov.spb.ru
      </div>
    </div> -->
  </div>
</section>
