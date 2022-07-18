<?php
get_header(); 
global $product; 
?> <main><section><div class="container-fluid"><div class="row no-gutters"><div class="breadcrumb_my_account" style="margin-top: 40px;"><a href="<?php echo home_url(); ?>">Home</a> <span class="material-icons arrow">navigate_next</span> <span><?php single_cat_title();?></span></div></div></div></section><section><div class="feature_products page_category_product"><div class="container-fluid"><div class="row no-gutters"><h2 class="ocultar" style="margin: 0 0 40px 0; text-align: center;"><?php single_cat_title();?></h2><div class="col-12 col-md-3 categories_filters"><?php get_sidebar(); ?></div><div class="col-12 col-md-9 columnProducts"><div class="col-12 animation-element slide-aparece" style="display: flex; flex-wrap: wrap;"><div class="itembanner col-12 col-md-4"><img src="<?php the_field('banner_1_categorias', 'option') ?>" alt="" class="img-fluid"></div><div class="itembanner col-12 col-md-4"><img src="<?php the_field('banner_2_categorias', 'option') ?>" alt="" class="img-fluid"></div><div class="itembanner col-12 col-md-4"><a href="https://novosite.astorbrindes.com.br/wp-content/uploads/2022/05/catalogo_astor_2022_short.pdf" target="_blank"><img src="<?php the_field('banner_3_categorias', 'option') ?>" alt="" class="img-fluid"></a></div></div><div class="order col-12 animation-element slide-aparece" style="display: flex; justify-content: flex-end; margin-top: 20px;"><?php echo do_shortcode('[yith_wcan_filters slug="ordenar-por"]'); ?></div> <?php
          $category = get_queried_object();

                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $cpt_cat = $category->term_id;
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => -1,
                            'paged' => $paged,
                            'tax_query' => array(
                              array(
                                  'taxonomy' => 'product_cat',
                                  'field'    => 'term_id',
                                  'terms'    => $cpt_cat,
                              ),
                          ),
                        );

                        // Custom query.
                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            global $wpdb;

                            /* Start the Loop */
          while ($query->have_posts()) : $query->the_post(); ?> <div class="itemProduct col-12 col-sm-6 col-md-4 animation-element slide-aparece"><div class="takeProduct"><div class="imageProduct col-12"><a href="<?php the_permalink(); ?>"><div class="takeImageProduto" style="background: url(<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); echo $url; ?>)no-repeat top center; background-size: contain; width: 100%; height: 180px;"></div><div class="takeImageProdutoHover" style="background: url(<?php the_field('imagem_hover_product_'); ?>)no-repeat top center; background-size: contain; width: 100%; height: 180px;"></div></a></div><div class="col-12"><a href="<?php the_permalink(); ?>"><h1 class="titleProduct"><?php the_title(); ?></h1></a></div><div class="ref"><?php echo $product->get_sku(); ?></div><!-- <div class="category"><?php // echo wc_get_product_category_list($product->get_id()); ?></div> --><div class="sobconsulta">Sob Consulta</div><div class="btnOrcamento"><a href="<?php the_permalink(); ?>">Fazer orçamento</a></div></div></div> <?php endwhile; } wp_reset_query(); ?> </div></div></div></div></section></main> <?php get_footer(); ?>