<div class="content row">

<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

    <div class="card m-3">
        <div class="card-body d-flex">
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url(
                  "blog-small"
                ); ?>" alt="" class="img-fluid mb-3">
            <?php endif; ?>

            <div class="blog-content ml-4">
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <a class="btn btn-light" href="<?php the_permalink(); ?>">Читать далее</a>
            </div>
        </div>
    </div>

<?php
  endwhile;
else:
endif; ?>
</div>

<div class="mb-4">
  <?php
            global $wp_query;
            $big = 999999999999;
            echo paginate_links([
              "base" => str_replace($big, "%#%", esc_url(get_pagenum_link($big))),
              "format" => "?paged=%#%",
              "current" => max(1, get_query_var("paged")),
              "total" => $wp_query->max_num_pages,
            ]);
   ?>
</div>
