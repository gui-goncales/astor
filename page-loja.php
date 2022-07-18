<?php get_header(); ?> <main><section><div class="feature_products page_category_product"><div class="container-fluid"><div class="row no-gutters"><!-- <h2 class="titles_features col-12" style="margin: 0 0 40px 0; text-align: center;"><?php //single_cat_title();?></h2> --> <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $cpt_cat = $category->term_id;
          $args = array('post_type' => 'product','posts_per_page' => -1);

          // Custom query.
          $query = new WP_Query($args);

          global $wpdb;
          if ($query->have_posts()) {

          /* Start the Loop */
          while ($query->have_posts()) : $query->the_post(); ?> <div class="itemProduct col-12 col-sm-2 col-md-4 col-lg-3 animation-element slide-aparece"><div class="takeProduct"><div class="imageProduct col-12"><a href="<?php the_permalink(); ?>"><div class="takeImageProduto" style="background: url(<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); echo $url; ?>)no-repeat top center; background-size: contain; width: 100%; height: 250px;"></div><div class="takeImageProdutoHover" style="background: url(<?php the_field('imagem_hover_product_'); ?>)no-repeat top center; background-size: contain; width: 100%; height: 250px;"></div></a></div><div class="col-12"><a href="<?php the_permalink(); ?>"><h1 class="titleProduct"><?php the_title(); ?></h1></a></div><div class="ref"><?php echo $product->get_sku(); ?></div><!-- <div class="category"><?php // echo wc_get_product_category_list($product->get_id()); ?></div> --><div class="sobconsulta">Sob Consulta</div><div class="btnOrcamento"><a href="<?php the_permalink(); ?>">Fazer orçamento</a></div></div></div> <?php endwhile; } wp_reset_query(); ?> </div></div></div></section></main> <?php get_footer(); ?>