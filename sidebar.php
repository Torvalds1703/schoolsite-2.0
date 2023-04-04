  <div class="sidebar col-lg-3 col-md-4 d-lg-block d-none">
      <aside class="aside">
            <a href="<?php echo site_url(
              "/info-covid-19/"
            ); ?>" class="aside__banner--covid">
                  <div><span></span>Информация для родителей (законных представителей) о режиме функционирования ОУ в условиях распространения COVID-19</div>
            </a>
            
            <a href="<?php echo site_url(
              "/obratnaya-svyaz/"
            ); ?>" class="aside__banner--feedback">
                  <div><span></span>Обратная связь</div>
            </a>
            
            <!-- <a href="<?php echo site_url(
              "/wp-content/uploads/2021/10/perepisnye-uchastki.pdf"
            ); ?>" class="aside__banner--covid">
                  <div style="margin-top: 20px">Переписные участки в Калининском районе СПб</div>
            </a> -->

            <a href="https://znanio.ru/org/74221" title="Рейтинг образовательной организации">
              <img src="https://znanio.ru/org/c/74221" style="width:100%;max-width:176px">
            </a>

            <?php if (is_active_sidebar("page-sidebar")): ?>
                    <?php dynamic_sidebar("page-sidebar"); ?>
            <?php endif; ?>

            <div class="aside aside-banners">
            <a target="_blank" href="<?php echo site_url(
              "/telefony-goryachej-linii-dlya-obuchayushhihsya/"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-phones.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="https://vk.com/school_653_spb" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-vk.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="https://edu.gov.ru/god_pedagoga_i_nastavnika/" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-teacher-year.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
              "/deyatelnost/doshkolnoe-otdelenie/"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-odo.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
              "/deyatelnost/otdelenie-dopolnitelnogo-obrazovaniya/"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-odod.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
              "/usloviya/pitanie/"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-dining.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
              "/pitanie-menu"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-menu.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
              "/deyatelnost/shkolnyj-sportivnyj-klub-druzhba/"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-drujba.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
              "/nezavisimaya-oczenka-kachestva-obrazovaniya/"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-noko.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2022/11/2rp-vospitaniya.pdf"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-edu-prog.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
              "/organizacziya-otdyha-detej-v-kanikulyarnoe-vremya/"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-camping.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
              "/priem-v-pervyj-klass-v-2021-godu/"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-first.jpg"
                  ); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
              "/deyatelnost/gorodskoj-ozdorovitelnyj-lager-mozaika/"
            ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri(
                    "/images/banners/banner-mozaika.jpg"
                  ); ?>" alt="">
            </a>
          </div>
      </aside>
</div>


