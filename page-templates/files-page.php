<?php
/*
Template Name: Документы
*/
?>

<?php get_header(); ?>


  <div class="row align-content-center">
  <main class="col-12 col-lg-9 px-5 main">
    

    <?php get_template_part("includes/section", "pagecontent"); ?>

    <table class=" col table table-borderless table-hover table-striped">
        <thead>
          <tr>
            <th>№</th>
            <th>Документ</th>
            <th>Ссылка</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $documents = carbon_get_the_post_meta('crb_documents');
              $counter = 1;
              foreach ( $documents as $document ) {
                echo '<tr>';
                echo '<td>' . $counter . '</td>';
                echo '<td> ' . $document['doc-title'] . '</td>';
                echo '<td><a href="' . wp_get_attachment_url($document['doc-file']) . '">cкачать</a></td>';
                echo '</tr>';
                $counter = $counter + 1;
              }
            ?>
        </tbody>
      </table>


      </main>
    <?php get_sidebar(); ?>
  </div>

<?php get_footer();
?>
