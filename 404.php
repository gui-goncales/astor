<?php 
get_header(); 
include 'svg.php';
?> <main><section><div class="page404"><div class="container"><div class="row no-gutters"><div class="takePage"> <?php echo $empty_cart; ?> <h2>Desculpe, não encontramos nada aqui!</h2><div class="leiamais"><a href="<?php echo home_url();  ?>"><span class="material-icons">arrow_back</span> Voltar</a></div></div></div></div></div></section></main> <?php get_footer(); ?>