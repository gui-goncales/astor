<?php get_header(); ?> <main><section><div class="blog"><div class="container-fluid"><div class="row no-gutters"><div class="col-12 blogHeaderSection"><h2 class="titles_features">Notícias</h2></div><div class="takeposts col-12"> <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => "-1",
            'paged' => $paged
          );
          $loop = new WP_Query($args);

          while ($loop->have_posts()) : $loop->the_post(); ?> <div class="itemBlog col-12 col-md-6 col-lg-4"><a href="<?php the_permalink(); ?>"><div class="imgBlog" style="background: url(<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));echo $url; ?>)no-repeat top center; width: 100%;"></div></a><div class="takeCategory col-12 col-xl-9"><div class="category"></div><div class="titlePost"><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></div><div class="description_blog"><?php echo excerpt('30'); ?></div><div class="leiamais"><a href="<?php the_permalink(); ?>">+ Leia mais</a></div></div></div> <?php endwhile; ?> </div></div></div></div></section></main> <?php get_footer(); ?>