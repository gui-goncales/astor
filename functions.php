<?php
function my_function_admin_bar()
{
  return false;
}
add_filter('show_admin_bar', 'my_function_admin_bar');

// Limite de caracteres
function excerpt($limit)
{
  $excerpt = explode(' ', get_the_excerpt(), $limit);

  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . ' ...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }

  $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
  return $excerpt;
}

add_theme_support('post-thumbnails');
add_filter( 'woocommerce_product_add_to_cart_text', 'cssigniter_button_text_modifier' );
add_filter( 'woocommerce_product_single_add_to_cart_text', 'cssigniter_button_text_modifier' );
function cssigniter_button_text_modifier( $text ) {
	global $product;

	if ( ! $product ) {
		return $text;
	}

	$product_id = $product->get_ID();
	$quantities = WC()->cart->get_cart_item_quantities();
	$quantity   = 0;

	if ( empty( $quantities ) ) {
		return $text;
	}

	if ( 'simple' === $product->get_type() ) {

		if ( in_array( $product_id, array_keys( $quantities ), true ) ) {
			$quantity += $quantities[ $product_id ];
		}

		return $quantity > 0 ? $quantity . __( ' in cart', 'your-text-domain' ) : $text;
	} elseif ( 'variable' === $product->get_type() ) {
		$children = $product->get_children();

		foreach ( $children as $child => $id ) {
			if ( in_array( $id, array_keys( $quantities ), true ) ) {
				$quantity += $quantities[ $id ];
			}
		}

		return $quantity > 0 ? $quantity . __( ' in cart', 'your-text-domain' ) : $text;
	}

	return $text;
}

function misha_skip_cart_redirect_checkout( $url ) {
    return wc_get_checkout_url();
}



function woo_custom_cart_button_text()
{
    return __('Adicionar no Carrinho', 'woocommerce');
}

add_filter('woocommerce_format_sale_price', 'woocommerce_custom_sales_price', 10, 3);
function woocommerce_custom_sales_price($price, $regular_price, $sale_price)
{
    // Getting the clean numeric prices (without html and currency)
    $regular_price = floatval(strip_tags($regular_price));
    $sale_price = floatval(strip_tags($sale_price));

    // Percentage calculation and text
    $percentage = round(($regular_price - $sale_price) / $regular_price * 100) . '%';
    $percentage_txt = __('', 'woocommerce') . $percentage;

    return '<del>' . wc_price($regular_price) . '</del> <ins>' . wc_price($sale_price) . "<div class='discount_product'><span>" . $percentage_txt . ' OFF</span></div></ins>';
}

add_action('woocommerce_multistep_checkout_after_shipping', 'add_my_custom_step_with_new_field');

function add_my_custom_step_with_new_field($checkout)
{
    wc_get_template('checkout/my-custom-step.php', array('checkout' => $checkout));
}



/**
 * Adding ACF Options Page to Menu.
 */
if (function_exists('acf_add_options_page')) {
  // Adding
  acf_add_options_page(array(
    'page_title' => 'Configurações',
    'menu_title' => 'Configurações do Site',
    'menu_slug' => 'site_options',
    'capability' => 'edit_posts',
    'parent_slug' => '',
    'position' => 13,
    'icon_url' => 'dashicons-smiley'
  ));

  // Geral and Logos
  acf_add_options_sub_page(array(
    'page_title' => 'Configurações Gerais',
    'menu_title' => 'Geral',
    'parent_slug' => 'site_options'
  ));
}
add_shortcode('wpbsearch', 'get_search_form');
 

add_filter( 'woocommerce_get_price_html','maybe_hide_price',10,2);
function maybe_hide_price($price_html, $product){
     if($product->get_price()>0){
          return $price_html;
     }
     return '';
 } 
 

 /**
 * @snippet       WooCommerce User Registration Shortcode
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 4.0
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
   
add_shortcode( 'wc_reg_form_bbloomer', 'bbloomer_separate_registration_form' );
    
function bbloomer_separate_registration_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return;
   ob_start();
 
   // NOTE: THE FOLLOWING <FORM></FORM> IS COPIED FROM woocommerce\templates\myaccount\form-login.php
   // IF WOOCOMMERCE RELEASES AN UPDATE TO THAT TEMPLATE, YOU MUST CHANGE THIS ACCORDINGLY
 
   do_action( 'woocommerce_before_customer_login_form' );
 
   ?> <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?>> <?php do_action( 'woocommerce_register_form_start' ); ?> <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?> <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"><label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label> <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"><?php // @codingStandardsIgnoreLine ?> </p> <?php endif; ?> <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"><label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label> <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>"><?php // @codingStandardsIgnoreLine ?> </p> <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?> <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"><label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label> <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password"></p> <?php else : ?> <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p> <?php endif; ?> <?php do_action( 'woocommerce_register_form' ); ?> <p class="woocommerce-FormRow form-row"> <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?> <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button></p> <?php do_action( 'woocommerce_register_form_end' ); ?> </form> <?php
     
   return ob_get_clean();
}
/**
 * @snippet       WooCommerce User Login Shortcode
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 4.0
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
  
add_shortcode( 'wc_login_form_bbloomer', 'bbloomer_separate_login_form' );
  
function bbloomer_separate_login_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return; 
   ob_start();
   woocommerce_login_form( array( 'redirect' => 'http://localhost/astor' ) );
   return ob_get_clean();
}

function reset_pass_url() {
  $siteURL = get_option('siteurl');
  return "{$siteURL}/wp-login.php?action=lostpassword";
}
add_filter( 'lostpassword_url', 'reset_pass_url', 11, 0 );


  //custom admin login logo
  function custom_login_logo()
  {
    echo '<style type="text/css">
    .login h1 a { background-image: url(' . get_bloginfo('template_directory') . '/dist/img/logotipo.png) !important; outline: 0 !important;     background-size: contain !important; width: 200px !important;}
    #login { padding: 4% 0 0 !important; }
    .login {background: #f2f2f2 !important;}
    #wp-admin-bar-wp-logo {display: none !important;}
    #nav a, #backtoblog a {color: #151c29 !important;}
    #nav a:hover, #backtoblog a:hover {color: #e74651 !important;} 

  input[type=checkbox]:focus, input[type=text]:focus, input[type=password]:focus {
    border-color: #c2c2c2 !important;
    box-shadow: 0 0 0 1px #000 !important;
  }
  .login .button.wp-hide-pw {
    color: #151c29 !important;
    outline: 0 !important;
  } 

  .login #login_error, .login .message, .login .success {
    border-left: 4px solid #e74651;
  }

  .submit input {background: #151c29 !important; text-transform: uppercase !important; font-weight: 800 !important; text-decoration: none !important; color: #fff !important; padding: 2px 15px !important; border-radius: 50px !important; border: 0 !important; outline: 0 !important;}
  .submit input:hover {background: #e74651 !important; outline: 0 !important;}
  
  </style>';
  }
  add_action('login_head', 'custom_login_logo');


  /*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url() {
  return get_bloginfo( 'url' );
  }
  add_filter( 'login_headerurl', 'my_login_logo_url' );
  
  /*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
  function my_login_logo_url_title() {
  return 'Nome do seu site - Voltar para Home';
  }
  add_filter( 'login_headertitle', 'my_login_logo_url_title' );

  add_action('wp_logout','njengah_homepage_logout_redirect');

function njengah_homepage_logout_redirect(){

    wp_redirect( home_url() );

    exit;

}

/**
 * @snippet       Switch Image Background @ WooCommerce Single Variable Product
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 4.0
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_action( 'woocommerce_after_variations_form', 'bbloomer_switch_image_background_variable_colors' );
 
function bbloomer_switch_image_background_variable_colors() {
    
   wc_enqueue_js( "
    
      $('input.variation_id').change(function(){
         if('' != $('input.variation_id').val()) {
            if($('#pa_color').val() =='azul'){
               $('.woocommerce-product-gallery figure').css('background-color', 'blue');
            } else if($('#pa_color').val() =='amarelo'){
               $('.woocommerce-product-gallery figure').css('background-color', 'yellow');
            } 
         } else {
            $('.woocommerce-product-gallery figure').css('background-color', 'transparent');
         }
      });
    
   ");
    
}

$vendor = apply_filters( 'yith_new_vendor_registration_fields', $vendor );

?>