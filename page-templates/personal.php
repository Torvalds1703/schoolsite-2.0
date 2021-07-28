<?php
/*
Template Name: Коллектив
*/
?>

<?php get_header(); ?>


  <div class="row align-content-center">
    <main class="col-12 col-lg-9 px-5 main">
      <?php get_template_part("includes/section", "pagecontent"); ?>

       <ul>
          <li>
              <a href="<?php echo site_url(
               "/about-us/obrazovatelnye-programmy"
              ); ?>">Учителя начальной школы
              </a>
          </li>
          <li>
              <a href="<?php echo site_url(
               "/about-us/obrazovatelnye-programmy"
              ); ?>">Учителя средней школы
              </a>
          </li>
          <li>
              <a href="<?php echo site_url(
               "/about-us/obrazovatelnye-programmy"
              ); ?>">Учителя дополнительного образования
              </a>
          </li>
       </ul>

    </main>

      <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer();
?>