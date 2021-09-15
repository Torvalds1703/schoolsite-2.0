<div class="sidebar col-3 d-lg-block d-none">
      <div>
      <aside class="aside">
             <a href="<?php echo site_url(
                "/info-covid-19/"
                ); ?>" class="aside__banner--covid">
                  <div><span></span>Информация для родителей (законных представителей) о режиме функционирования ОУ в условиях распространения COVID-19</div>
            </a>

            <?php if (is_active_sidebar('page-sidebar')): ?>
                    <?php dynamic_sidebar('page-sidebar'); ?>
            <?php endif; ?>

            <a target="_blank" href="https://vk.com/school_653_spb" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri('/images/banners/banner-vk.jpg'); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
                "/deyatelnost/doshkolnoe-otdelenie/"
                ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri('/images/banners/banner-odod.jpg'); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
                "/usloviya/pitanie/"
                ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri('/images/banners/banner-dining.jpg'); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
                "/ezhednevnoe-menyu/"
                ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri('/images/banners/banner-menu.jpg'); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
                "/deyatelnost/shkolnyj-sportivnyj-klub-druzhba/"
                ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri('/images/banners/banner-drujba.jpg'); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
                "/nezavisimaya-oczenka-kachestva-obrazovaniya/"
                ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri('/images/banners/banner-noko.jpg'); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
                "/wp-content/uploads/2021/08/vr-programma-vospitaniya-podpisan.pdf"
                ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri('/images/banners/banner-edu-prog.jpg'); ?>" alt="">
            </a>

            <a target="_blank" href="<?php echo site_url(
                "/priem-v-pervyj-klass-v-2021-godu/"
                ); ?>" class="aside__banner">
                  <img src="<?php echo get_theme_file_uri('/images/banners/banner-first.jpg'); ?>" alt="">
            </a>
      </aside>
      </div> 
</div>


