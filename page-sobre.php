<?php

get_header();
include 'svg.php';

?> <main><section><div class="page_sobre"><div class="container"><div class="row no-gutters"><div class="breadcrumb_my_account"><a href="<?php echo home_url(); ?>">Home</a> <span class="material-icons arrow">navigate_next</span> <span>Sobre a Empresa</span></div><div class="content_sobre col-12"><div class="column col-12 col-md-6"><h2>Quem somos</h2> <?php while (have_posts()) : the_post(); ?> <div class="text_about"><?php the_content(); ?></div> <?php endwhile; ?> </div><div class="column col-12 col-md-6"><img src="<?php the_field('inserir_imagem'); ?>" class="img-fluid"></div><!-- 
          <div class="column col-12">
            <h3>Somos a Astor Brindes</h3>
            <div class="texto"> <?php // the_field('digite_o_texto_missao'); ?> </div>
          </div> --><!-- <div class="column col-12">
            <h3>Sua página </h3>
            <div class="texto"> <?php //the_field('digite_o_texto_visao'); ?> </div>
          </div> --></div></div></div></div></section><section><div class="our_clients whitout_after"><div class="container"><div class="row no-gutters"><h2 class="titles_features">Nosso clientes</h2><div class="slider_our_clients"> <?php
                // check if the repeater field has rows of data
                if (have_rows('inserir_logo_do_cliente',1518)) :
                  // loop through the rows of data
                  while (have_rows('inserir_logo_do_cliente',1518)) : the_row(); ?> <div class="item"><img src="<?php the_sub_field('logo_our_client'); ?>" class="img-fluid" width="140"></div> <?php
                  endwhile;
                else :
                // no rows found
                endif; ?> </div></div></div></div></section></main> <?php get_footer(); ?>