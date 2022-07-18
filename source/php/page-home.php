<?php 
get_header(); 
global $product;
global $wp_query;
?>

<pre id="result_"></pre>

<main>
  <section>
    <div class="bannerHome animation-element slide-aparece">
      <?php
      // check if the repeater field has rows of data
      if (have_rows('inserir_banner')) :
        // loop through the rows of data
        while (have_rows('inserir_banner')) : the_row(); ?>
      <div class="item">
        <a href="<?php the_sub_field('link_banner_home'); ?>">
          <div class="takeItem_mobile" style="background: url(<?php the_sub_field('imagem_fundo_banner_home_mobile'); ?>)no-repeat top center; background-size: cover; width: 100%;"></div>
          <div class="takeItem" style="background: url(<?php the_sub_field('imagem_fundo_banner_home'); ?>)no-repeat top center; background-size: cover; width: 100%;"></div>
        </a>
      </div>
      <?php
        endwhile;
      else :
      // no rows found
      endif; ?>
    </div>
  </section>


  <section>
    <div class="categories_home">
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="takeBg">
            <div class="top_title animation-element slide-aparece">
              <div class="topItem">
                <h2>Tem na <span>Astor</span></h2>
              </div>
              <!-- <div class="topItem"><a href="#">+ Ver mais</a></div> -->
            </div>
            <div class="slider_categories animation-element slide-aparece">
              <?php
          
            $orderby = 'name';
            $order = 'desc';
            $hide_empty = false;

            // get the query object
            $cat = $wp_query->get_queried_object();

            // get the thumbnail id using the queried category term_id
            $thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);

            // get the image URL
            $image = wp_get_attachment_url($thumbnail_id);

            $cat_args = array(
              'orderby'    => $orderby,
              'order'      => $order,
              'hide_empty' => $hide_empty,
            );

            $product_categories = get_terms('product_cat', $cat_args);
          

              foreach ($product_categories as $key => $category) {
                
                $image_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $post_thumbnail_img = wp_get_attachment_image_src($image_id, 'thumbnail');
                
                if (!empty($post_thumbnail_img)) {?>
              <div class="item">
                <a href="<?php echo home_url() . "/categoria-produto/" .  $category->slug; ?>">
                  <div class="thumbnail" style="background: url('<?php echo $post_thumbnail_img[0]; ?> ')no-repeat center center; width: 100px; height: 100px; background-size: contain;   background-color: #fff;"></div>

                </a>
                <h3><a href="<?php echo home_url() . "/categoria-produto/" .  $category->slug; ?>"><?php echo $category->name; echo $arrownext; ?></a></h3>
              </div>
              <?php
              }
            } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="feature_products whitout_after">
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-12 productsHeaderSection animation-element slide-aparece">
            <h2 class="titles_features">Em Destaque</h2>
            <div class="vermais"><a href="<?php echo home_url(); ?>/categoria-produto/destaque">+ Ver mais</a></div>
          </div>
          <div class="slider_products animation-element slide-aparece">
            <?php              
                $args = array(
                  'post_type'          => 'product',
                  'order'              => 'DESC',
                  'posts_per_page'     => '12',
                  'tax_query'          => array(
                    array(
                        'taxonomy'     => 'product_cat',
                        'terms'        => array_map( 'sanitize_title', explode( ',', 'destaque' ) ),
                        'field'        => 'slug',
                    )
                )
                );
  
                $loop = new WP_Query($args);
                
                // $product = wc_get_product( $product_id );
                while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="itemProduct">
              <div class="takeProduct">
                <div class="imageProduct col-12">
                  <a href="<?php the_permalink(); ?>">
                    <div class="takeImageProduto" style="background: url(<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); echo $url; ?>)no-repeat top center; background-size: contain; width: 100%; height: 180px;"></div>
                    <div class="takeImageProdutoHover" style="background: url(<?php the_field('imagem_hover_product_'); ?>)no-repeat top center; background-size: contain; width: 100%; height: 180px;"></div>
                  </a>
                </div>
                <div class="col-12"><a href="<?php the_permalink(); ?>">
                    <h1 class="titleProduct"><?php the_title(); ?></h1>
                  </a></div>
                <div class="ref"><?php echo $product->get_sku(); ?></div>
                <!-- <div class="category"><?php // echo wc_get_product_category_list($product->get_id()); ?></div> -->
                <div class="sobconsulta">Sob Consulta</div>
                <div class="btnOrcamento"><a href="<?php the_permalink(); ?>">Fazer orçamento</a></div>
              </div>
            </div>
            <?php
                // }
                endwhile;
                wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="feature_products">
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-12 productsHeaderSection animation-element slide-aparece">
            <h2 class="titles_features">Nossa sugestão para você!</h2>
          </div>
          <div class="slider_products animation-element slide-aparece">
            <?php              
              $args = array(
                'post_type' => 'product',
                'meta_key' => 'total_sales',
                'orderby' => 'meta_value_num',
                'posts_per_page' => 10,
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>
            <div class="itemProduct">
              <div class="takeProduct">
                <div class="imageProduct col-12">
                  <a href="<?php the_permalink(); ?>">
                    <div class="takeImageProduto" style="background: url(<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); echo $url; ?>)no-repeat top center; background-size: contain; width: 100%; height: 180px;"></div>
                    <div class="takeImageProdutoHover" style="background: url(<?php the_field('imagem_hover_product_'); ?>)no-repeat top center; background-size: contain; width: 100%; height: 180px;"></div>
                  </a>
                </div>
                <div class="col-12"><a href="<?php the_permalink(); ?>">
                    <h1 class="titleProduct"><?php the_title(); ?></h1>
                  </a></div>
                <div class="ref"><?php echo $product->get_sku(); ?></div>
                <!-- <div class="category"><?php // echo wc_get_product_category_list($product->get_id()); ?></div> -->
                <div class="sobconsulta">Sob Consulta</div>
                <div class="btnOrcamento"><a href="<?php the_permalink(); ?>">Fazer orçamento</a></div>
              </div>
            </div>
            <?php
              // }
              endwhile;
              wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="newsletter">
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="takeItens col-12 col-lg-6 animation-element slide-aparece">
            <div class="imagem col-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/newsletter.png" alt="" class="img-fluid"></div>
            <div class="description col-8">
              <div class="title">
                <h2>Se inscreva em nossa newsletter!</h2>
              </div>
              <div class="subtitle">Receba ofertas e novidades imperdíveis! </div>
              <div class="politica"><a href="#">Leia nossa Política de Privacidade</a></div>
            </div>
          </div>

          <div class="formulario col-12 col-lg-6 animation-element slide-aparece">
            <?php echo do_shortcode('[contact-form-7 id="1485" title="Newsletter"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="feature_products">
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-12 productsHeaderSection animation-element slide-aparece">
            <h2 class="titles_features">Veja os últimos lançamentos!</h2>
            <div class="vermais"><a href="<?php echo home_url(); ?>/categoria-produto/lancamentos">+ Ver mais</a></div>
          </div>
          <div class="slider_products animation-element slide-aparece">
            <?php              
              $args = array(
                'post_type' => 'product',
                'order' => 'DESC',
                'posts_per_page' => '12',
                'tax_query'          => array(
                  array(
                      'taxonomy'     => 'product_cat',
                      'terms'        => array_map( 'sanitize_title', explode( ',', 'lancamentos' ) ),
                      'field'        => 'slug',
                  )
              )
              );

              $loop = new WP_Query($args);
              
              // $product = wc_get_product( $product_id );
              while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="itemProduct">
              <div class="takeProduct">
                <div class="imageProduct col-12">
                  <a href="<?php the_permalink(); ?>">
                    <div class="takeImageProduto" style="background: url(<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); echo $url; ?>)no-repeat top center; background-size: contain; width: 100%; height: 180px;"></div>
                    <div class="takeImageProdutoHover" style="background: url(<?php the_field('imagem_hover_product_'); ?>)no-repeat top center; background-size: contain; width: 100%; height: 180px;"></div>
                  </a>
                </div>
                <div class="col-12"><a href="<?php the_permalink(); ?>">
                    <h1 class="titleProduct"><?php the_title(); ?></h1>
                  </a></div>
                <div class="ref"><?php echo $product->get_sku(); ?></div>
                <!-- <div class="category"><?php // echo wc_get_product_category_list($product->get_id()); ?></div> -->
                <div class="sobconsulta">Sob Consulta</div>
                <div class="btnOrcamento"><a href="<?php the_permalink(); ?>">Fazer orçamento</a></div>
              </div>
            </div>
            <?php
              // }
              endwhile;
              wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section>
    <div class="takeCustom">
      <div class="personalize">
        <div class="container-fluid">
          <div class="row no-gutters">
            <div class="card_ animation-element slide-aparece">
              <h2>Personalizados no padrão <span>Astor!</span></h2>

              <div class="takeCard col-12 col-lg-10 col-xl-8">
                <div class="col-12 col-md-6">
                  <div class="imagem"><img src="<?php the_field('imagem_do_produto_1'); ?>" class="img-fluid"></div>
                </div>
                <div class="bgTake mobileBottom col-12 col-md-6">
                  <div class="takebg">
                    <div class="category"><?php the_field('categoria_do_produto_1'); ?></div>
                    <div class="title">
                      <h2><?php the_field('nome_do_produto_1'); ?></h2>
                    </div>
                    <div class="btn_red"><a href="<?php the_field('link_do_botao_1')?>"><?php the_field('titulo_do_botao_1'); ?></a></div>
                  </div>
                </div>
                <div class="bgTake col-12 col-md-6">
                  <div class="takebg">
                    <div class="category"><?php the_field('categoria_do_produto_2'); ?></div>
                    <div class="title">
                      <h2><?php the_field('nome_do_produto_2'); ?></h2>
                    </div>
                    <div class="btn_red"><a href="<?php the_field('link_do_botao_2')?>"><?php the_field('titulo_do_botao_2'); ?></a></div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="imagem"><img src="<?php the_field('imagem_do_produto_2'); ?>" class="img-fluid"></div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="feature_products whitout_after">
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-12 productsHeaderSection animation-element slide-aparece">
            <h2 class="titles_features">Promoções</h2>
            <div class="vermais"><a href="<?php echo home_url(); ?>/categoria-produto/promocoes">+ Ver mais</a></div>
          </div>
          <div class="slider_products animation-element slide-aparece">
            <?php              
              $args = array(
                'post_type'          => 'product',
                'order'              => 'DESC',
                'posts_per_page'     => '12',
                'tax_query'          => array(
                  array(
                      'taxonomy'     => 'product_cat',
                      'terms'        => array_map( 'sanitize_title', explode( ',', 'promocoes' ) ),
                      'field'        => 'slug',
                  )
              )
              );

              $loop = new WP_Query($args);
              
              // $product = wc_get_product( $product_id );
              while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="itemProduct">
              <div class="takeProduct">
                <div class="imageProduct col-12">
                  <a href="<?php the_permalink(); ?>">
                    <div class="takeImageProduto" style="background: url(<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); echo $url; ?>)no-repeat top center; background-size: contain; width: 100%; height: 180px;"></div>
                    <div class="takeImageProdutoHover" style="background: url(<?php the_field('imagem_hover_product_'); ?>)no-repeat top center; background-size: contain; width: 100%; height: 180px;"></div>
                  </a>
                </div>
                <div class="col-12"><a href="<?php the_permalink(); ?>">
                    <h1 class="titleProduct"><?php the_title(); ?></h1>
                  </a></div>
                <div class="ref"><?php echo $product->get_sku(); ?></div>
                <!-- <div class="category"><?php // echo wc_get_product_category_list($product->get_id()); ?></div> -->
                <div class="sobconsulta">Sob Consulta</div>
                <div class="btnOrcamento"><a href="<?php the_permalink(); ?>">Fazer orçamento</a></div>
              </div>
            </div>
            <?php
              // }
              endwhile;
              wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="our_clients">
      <div class="container-fluid">
        <div class="row no-gutters">
          <h2 class="titles_features animation-element slide-aparece">Nosso clientes</h2>
          <div class="slider_our_clients animation-element slide-aparece">
            <?php
                // check if the repeater field has rows of data
                if (have_rows('inserir_logo_do_cliente')) :
                  // loop through the rows of data
                  while (have_rows('inserir_logo_do_cliente')) : the_row(); ?>
            <div class="item"><img src="<?php the_sub_field('logo_our_client'); ?>" class="img-fluid" width="140"></div>
            <?php
                  endwhile;
                else :
                // no rows found
                endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="blog">
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-12 blogHeaderSection animation-element slide-aparece">
            <h2 class="titles_features">Blog</h2>
            <div class="vermais"><a href="<?php echo home_url(); ?>/blog">+ Ver mais</a></div>
          </div>
          <div class="takeposts col-12 animation-element slide-aparece">
            <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => "3",
            'paged' => $paged
          );
          $loop = new WP_Query($args);

          while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="itemBlog col-12 col-md-6 col-lg-4">
              <a href="<?php the_permalink(); ?>">
                <div class="imgBlog" style="background: url(<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));echo $url; ?>)no-repeat top center; width: 100%;"></div>
              </a>
              <div class="takeCategory col-12 col-xl-9">
                <div class="category"></div>
                <div class="titlePost">
                  <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                  </a>
                </div>
                <div class="description_blog"><?php echo excerpt('30'); ?></div>
                <div class="leiamais"><a href="<?php the_permalink(); ?>">+ Leia mais</a></div>
              </div>
            </div>
            <?php endwhile; ?>

          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>