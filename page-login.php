<?php
if (is_user_logged_in()) {
  header('Location: ' . home_url() . "/minha-conta");
} else {
  get_header(); ?> <main><section><div class="pageLogin"><div class="container"><div class="row no-gutters"><div class="column col-11 col-sm-8 col-md-7 col-lg-6 col-xl-5"><h2 class="titles_features col-12">Acessar minha conta</h2><div class="formulario col-12"><?php echo do_shortcode('[wc_login_form_bbloomer]'); ?></div></div></div></div></div></section></main> <?php
  get_footer();
}
?>