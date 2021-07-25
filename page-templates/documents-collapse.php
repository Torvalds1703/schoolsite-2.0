<?php
/*
Template Name: Аккордеон
*/
?>

<?php get_header(); ?>

<div class="row align-content-center">
  <main class="col-12 col-lg-9 px-5 main">
      <?php get_template_part("includes/section", "pagecontent"); ?>

          <p>
          <div class="accordion" id="accordionDocuments">
          <?php
              $groups = carbon_get_the_post_meta('crb_docs_group');
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
                  foreach ( $group['crb_docs'] as $doc ) {
                   echo '<li>';
                   echo $doc['doc-title'];
                   echo '<a href="' . wp_get_attachment_url($doc['doc-file']) . '"> Открыть</a>';
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

     <p class="font-italic">Документы, регулирующие деятельность образовательного учреждения по ФГОС, находятся в разделе <a href="">Документы</a>.</p>

      </main>
    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer();
?>
