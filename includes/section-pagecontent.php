
    <?php if (has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url(
          'blog-large'
        ); ?>" alt="" class="img-fluid mb-3 img-thumbnail">
    <?php endif; ?>

  <h1 class="page-header mb-4 mt-4 h4 font-weight-bold"><?php the_title();?></h1> 

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

