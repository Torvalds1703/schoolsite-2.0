<?php
/*
Template Name: Files Page
*/
?>

<?php get_header(); ?>

<section class="page-wrap">
<div class="container mt-3">

    <div class="col">
      <?php get_template_part("includes/section", "pagecontent"); ?>
    </div>

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
                echo '<td><a href="' . wp_get_attachment_url($document['doc-file']) . '">Скачать</a></td>';
                echo '</tr>';
                $counter = $counter + 1;
              }
            ?>
        </tbody>
      </table>
</div>
</section>


<?php get_footer();
?>
