<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

    <p><?php echo get_the_date("d/m/Y h:i:s"); ?></p>

    <?php the_content(); ?>

    <p>
      <?php
        $fname = get_the_author_meta("first_name");
        $lname = get_the_author_meta("last_name");
      ?>
      Posted by <?php echo $fname; ?> <?php echo $lname; ?>
    </p>

   <?php
    //comments_template();
    
    ?>

<?php
  endwhile;
else:
endif;
?>
