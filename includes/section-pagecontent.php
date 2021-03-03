<main class="main-content">
<div class="row">

    <?php if (is_active_sidebar("page-sidebar")): ?>
        <?php dynamic_sidebar("page-sidebar"); ?>
    <?php endif; ?>

    <?php if (has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url(
          "blog-large"
        ); ?>" alt="" class="img-fluid mb-3 img-thumbnail">
    <?php endif; ?>


    <div class="row">
      <h1 class="col">
        <?php the_title(); ?>
      </h1>
    </div>

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
</main>

