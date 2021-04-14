<?php
/*
Template Name: Organization Info
*/
?>

<?php get_header(); ?>

<div class="row align-content-center">
    <div class="col-12 col-lg-9 text-justify px-5">
      <?php get_template_part("includes/section", "pagecontent"); ?>

          <p>
          <div class="accordion" id="accordionDocuments">
          <?php
              $groups = carbon_get_the_post_meta('crb_reqs_groups');
              $counter = 1;
              foreach ( $groups as $group ) {

                echo '<div class="card">';
                echo 
                '<div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse'.$counter.'" aria-expanded="true" aria-controls="collapse'.$counter.'">' . $group['group-title'] . 
                    '</button>
                  </h2>
                  </div>';
            
                echo '<div id="collapse'.$counter.'" class="collapse" aria-labelledby="heading'.$counter.'" data-parent="#accordionDocuments">
                  <div class="card-body">
                  <ul>';
                  foreach ( $group['crb_pages'] as $page ) {
                   echo '<li>';
                   echo '<a href="' . wp_get_attachment_url($page['page-link']) . '">'
                   . $page['page-title'] .
                   '</a>';
                   echo '</li>';
                  }
                  
                echo '</ul>
                  </div>
                </div>
              </div>';
              $counter = $counter + 1;
              }
            ?>
          </div>
          </p>

     <p class="h5"> Требования Федерального законодательства (вставить файлы или ссылки): </p>
     <ul>
     <li>Статья 29 Федерального закона от 29.12.2012 № 273-ФЗ «Об образовании в Российской
Федерации»</li>
     <li>Постановление Правительства РФ от 10.07.2013 N 582 (ред. от 11.07.2020) «Об утверждении Правил размещения на официальном сайте образовательной организации в информационно-телекоммуникационной сети «Интернет» и обновления информации об образовательной организации»</li>
     <li>Приказ Рособрнадзора от 14.08.2020 № 831 «Об утверждении Требований к структуре официального сайта образовательной организации в информационно-телекоммуникационной сети "Интернет" и формату представления информации» </li>
     </ul>

    </div>
    <div class="d-none d-lg-block col-3">
      <div class="p-3 mt-1 border border-secondary">
      <?php get_sidebar(); ?>
      </div> 
    </div>

  </div>
</div>

<?php get_footer();
?>
