<?php

get_header();
include 'svg.php';

?> <main><section><div class="page_carrinho"><div class="container-fluid"><div class="row no-gutters"><h2 class="col-12">Meu Carrinho</h2> <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <?php the_content(); ?> <?php endwhile;
          else : ?> <p><?php _e('Sorry, no posts matched your criteria.'); ?></p> <?php endif; ?> <div class="col-12"><div class="btn_finalizar_orcamento_"><button>Finalizar Orçamento</button></div></div></div></div></div></section></main> <?php get_footer(); ?>