<div class="row">

    <?php if (has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url(
          'blog-large'
        ); ?>" alt="" class="img-fluid mb-3 img-thumbnail">
    <?php endif; ?>

  <h1 class="page-header"><?php the_title();?></h1> 

    <div class="row">
      <div class="col">
       <?php if (have_posts()):
         while (have_posts()):
           the_post(); ?>
       
           <?php the_content(); ?>
       <?php
         endwhile;
       else:
       endif; ?>
       </div>
    </div>
</div>

