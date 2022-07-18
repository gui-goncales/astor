<?php 

defined( 'ABSPATH' ) || exit;
global $product, $comments;

if ( ! comments_open() ) {
  return;
}
get_header();
include 'svg.php';
$product = new WC_Product($product_id);
global $product;
global $post;
$terms = get_the_terms( $product->ID, 'product_cat' );
foreach ( $terms as $term ) {
    $product_cat_name = $term->name;
    $product_cat_slug = $term->slug;
    break;
}
?>
<main>
  <section>
    <div class="top_single_product">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb_my_account" style="margin-top: 40px;">
              <a href="<?php echo home_url(); ?>">Home</a> <span class="material-icons arrow">navigate_next</span> <span><?php echo "<a href='". home_url(). "/categoria-produto/".$product_cat_slug."'> ".$product_cat_name ." </a>" ?></span> <span class="material-icons arrow">navigate_next</span> <span><?php the_title();?></span>
            </div>
          </div>
          <div class="col-12 col-md-7">

            <div class="column_thumnails col-12">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
              <div class="slider-nav slick-slider nav col-12">
                <?php
                  // check if the repeater field has rows of data
                  if (have_rows('galeria_imagens')) {
                    // loop through the rows of data
                    while (have_rows('galeria_imagens')) { the_row(); ?>
                <div class="item-nav">
                  <div class="imgThumbnail" style="background: url(<?php the_sub_field('imagem_produto');?>)no-repeat center center; background-size: contain; width: 100px; height: 100px; "></div>

                </div><!-- /item-nav -->
                <?php }
                  } ?>
              </div><!-- /slider-nav -->
              <div class="slider-for slick-slider full col-12">
                <?php
                  // check if the repeater field has rows of data
                  if (have_rows('galeria_imagens')) {
                    // loop through the rows of data
                    while (have_rows('galeria_imagens')) { the_row(); ?>
                <div class="item-full zoomImage">
                  <?php $url=wp_get_attachment_image_src( $foto, 'large'); ?>
                  <img src="<?php the_sub_field('imagem_produto');?>" class="img-fluid" data-zoom="<?php the_sub_field('imagem_produto');?>">
                </div>
                <?php 
                    }
                  }
              endwhile; endif; ?>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5">

            <div class="ref col-12">REF: <?php echo $product->get_sku(); ?></div>
            <div class="titleProduct">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="button_add_to_cart">
              <?php echo do_shortcode('[yith_ywraq_button_quote show_url="yes"]'); ?>
            </div>
            <div class="detail_product">
              <div class="description">
                <div class="title">
                  <h3>Descrição</h3>
                </div>
                <div class="texto">
                  <?php 
                 $product_full_description = $product->get_description(); 
                 echo $product_full_description;
                ?>
                </div>
              </div>
              <?php  $attributes = $product->get_attributes();
                 if (!empty($product->has_weight())) {
              ?>
              <div class="peso">
                <?php
             
               if ( $product->has_weight() ) {
                  echo "<span>Peso (aprox.): </span>";
                  echo $product->get_weight();
               } ?>
              </div>
              <?php } 
              $dimensions = $product->get_dimensions();
              if (!empty($dimensions)) {
              ?>
              <div class="dimesions">
                <?php
                
               echo "<div class='title'>Dimensões (Largura x Altura x Profundidade): </div>";
               echo $dimensions;
               ?></div>
              <?php } ?>
              <div class="quantidade_minima" id="">
                <span>Quantidade mínima: </span> <?php the_field('quantidade_minima'); ?>
              </div>
            </div>
            <div class="add-carrinho">
              <?php 
             
             ?>
              <div class="title_colors">Cores disponíveis: </div>
              <div class="slider-colors">
                <?php // check if the repeater field has rows of data
                  if (have_rows('galeria_imagens')) {
                    // loop through the rows of data
                   
                while (have_rows('galeria_imagens')) { the_row();  
                  $hexaCor = get_sub_field('cor_imagem');
                  if(!empty($hexaCor)) { ?>


                <div class="item-nav">
                  <?php $url=wp_get_attachment_image_src( $foto, 'thumbnail' ); ?>
                  <!-- <img src="<?php // echo $url[0];?>" class="img-fluid" data-zoom="<?php // echo $url[0];?>"> -->

                  <div class="imgThumbnail" style="background: <?php the_sub_field('cor_imagem');?>; width: 30px; height: 30px; border-radius: 50%;"></div>

                </div><!-- /item-nav -->

                <?php 
                    } else { ?>
                <div class="excludeTitleColor"> Teste</div>
                <?php 
                    }
                  } 
                }  ?>
              </div>

              <div class="dropDownMoreInfos col-12 col-md-10 col-lg-8">
                <div class="title">Informações Adicionais <span class="material-icons">keyboard_arrow_down</span></div>
                <div class="contentSingleProduct">
                  <div class="infos col-12"><b>Tipo de Material:</b> <?php the_field('material'); ?></div>
                  <div class="infos col-12"><b>Tipo de Gravação:</b> <?php the_field('gravacao'); ?></div>
                  <div class="infos col-12"><b>Edição:</b> <?php the_field('edicao'); ?></div>

                  <?php $ncmInfo = get_field('ncm'); if (!empty($ncmInfo)) { ?><div class="infos col-12"><b>NCM:</b> <?php the_field('ncm'); ?></div><?php } ?>
                  <div class="infos col-12"><b>Cores:</b> <?php the_field('cores'); ?></div>
                </div>
              </div>
              <?php
            
                if ($product->is_type( 'simple' )) { 
                  
                  do_action( 'woocommerce_single_product_summary' ); ?>

              <?php do_action( 'woocommerce_after_shop_loop_item' );
                }
                elseif ( $product->is_type( 'variable'  )) {
                  do_action( 'woocommerce_single_product_summary' ); ?>

              <?php do_action( 'woocommerce_after_shop_loop_item' );
                  } ?>
            </div><!-- /add-carrinho -->

          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="feature_products whitout_after" style="background: #f2f2f2;">
      <div class="container-fluid">
        <div class="row no-gutters">
          <h2 class="titles_features">Produtos Relacionados</h2>
          <div class="slider_products">
            <?php
          //   $args =  apply_filters( 'woocommerce_related_products_args', array(
          //   'posts_per_page'       => 14,
          //   // 'post__not_in' => array( $post->ID ),
          //   'post_type'    => 'product',
          //   'post__not_in' => array(get_the_id())
          //   )
          // );
          
          //   $args = apply_filters( 'woocommerce_related_products_args', array(
          //     'post_type'            => 'product',
          //     'posts_per_page'       => 14,
          //     'post__in'             => $related,
          //     'post__not_in'         => array( $product->id )
          // ) );          
          $args = array(
            'post_type' => 'product',
            'order' => 'DESC',
            'posts_per_page' => '12',
            'tax_query'          => array(
              array(
                  'taxonomy'     => 'product_cat',
                  'terms'        => array_map( 'sanitize_title', explode( ',', $product_cat_slug ) ),
                  'field'        => 'slug',
                  'orderby'      => 'rand'
              )
          )
          );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
    <div class="address__infos">
      <div class="container">
        <div class="row no-gutters">
          <div class="item col-12 col-md-4">
            <div class="icon"><span class="material-icons">
                location_on
              </span>
            </div>
            <div class="title">Rua Dom Bosco, 544 – Vila Santa Catarina. Americana – SP. CEP: 13466-327</div>
          </div>
          <div class="item col-12 col-md-4">
            <div class="icon">
              <span class="material-icons">
                call
              </span>
            </div>
            <div class="title">(19) 3648.4006</div>
            <div class="title">(19) 98717-4691</div>
          </div>
          <div class="item col-12 col-md-4">
            <div class="icon">
              <span class="material-icons">
                support_agent
              </span>
            </div>
            <div class="title">(19) 98717-4691</div>
            <div class="title">comercial@astorbrindes.com.br</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
<script>
var idQtd = jQuery(".quantidade_minima").attr("id");
$(".add-request-quote-button").attr("href", "?qtd=" + idQtd);
$('add-request-quote-button button').click(function() {
  window.location.href = 'carrinho?qtd=' + idQtd;
  return false;
});

if ($(".excludeTitleColor")[0]) {
  $(".slider-colors").css("display", "none");
  $(".title_colors").css("display", "none");
}
</script>