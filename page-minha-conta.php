<?php
 
  $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
  $_SERVER['REQUEST_URI'];
$link_ = $_SERVER['REQUEST_URI'];
// echo $link_ . "<br>";
// echo $link;

if (is_user_logged_in()) {
  get_header();
  global $current_user;
  wp_get_current_user();

  include 'svg.php'; ?> <main><section><div class="my_account"><div class="container"><div class="row no-gutters"><div class="breadcrumb_my_account"><a href="<?php echo home_url(); ?>">Home</a> <span class="material-icons arrow">navigate_next</span> <span>Minha Conta</span></div><!-- <h2 class="titles_features col-12">Minha Conta</h2> --> <?php echo do_shortcode('[woocommerce_my_account]'); ?> </div></div></div></section></main> <?php 
} else {  header('Location: ' . home_url() . "/login"); }
get_footer(); ?>