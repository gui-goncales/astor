<!DOCTYPE html><html lang="pt_BR"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title> <?php
    if (is_home()) :

      bloginfo('name');

    elseif (is_category()) :

      single_cat_title();
      echo ' - ';
      bloginfo('name');

    elseif (is_single()) :
      single_cat_title();
      single_post_title();
      echo ' - ';
      bloginfo('name');

    elseif (is_page()) :
      
      single_post_title();
      echo ' - ';
      bloginfo('name');

    else :
      
      wp_title('', true);

    endif;

    ?> </title><!-- Favicon --><!-- <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-16.png" sizes="16x16" type="image/png"> --><!-- <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_favicon_.png" sizes="32x32" type="image/png"> --><!-- <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-48.png" sizes="48x48" type="image/png"> --><link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon.png" sizes="62x62" type="image/png"><!--  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-192.png" sizes="192x192" type="image/png"> --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-theme-classic"><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Depêndencias --><link href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/style.css" rel="stylesheet"><style type="text/css"> <?php 
  // $url=get_bloginfo('template_directory') . '/dist/css/style.css';

  // $ch=curl_init();

  // curl_setopt($ch, CURLOPT_URL, $url);

  // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  // $contents=curl_exec($ch);

  // if (curl_errno($ch)) : echo curl_error($ch);

  // $contents='';

  // else : curl_close($ch);

  // endif;

  // if ( !is_string($contents) || !strlen($contents)) : $contents='';

  // endif;

  // $contents=str_replace('../img/', get_bloginfo('template_directory') . '/dist/img/', $contents);

  // $contents=str_replace('../fonts/', get_bloginfo('template_directory') . '/dist/fonts/', $contents);

  // echo $contents;
  ?> </style> <?php
  // CALL TO SVG
  include 'svg.php';
  global $woocommerce;
  global $current_user; wp_get_current_user();
  

  ?> </head><header><h1 class="ocultar">Astor Brindes Corporativos</h1><div class="header__top"><div class="container-fluid"><div class="row no-gutters"><div class="item col-12"><a href="mailto:comercial@astorbrindes.com.br"><span class="material-icons icon_header">email</span> comercial@astorbrindes.com.br</a></div><div class="item col-12"><a href="tel:1936484006"><span class="material-icons icon_header">phone</span> (19) 3648.4006</a></div><div class="item col-12"><a href="https://api.whatsapp.com/send?phone=5519987174691&text=Ol%C3%A1%2C%20tudo%20bem%3F%20gostaria%20de%20saber%20sobre..." target="_blank"><span class="material-icons icon_header">whatsapp</span> Atendimento via whatsapp (19) 98717-4691</a></div></div></div></div><div class="settings"><div class="header__middle"><div class="container-fluid"><div class="row no-gutters"><div class="logo col-8 col-sm-4 col-md-3 col-lg-2"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logotipo.png" alt="" class="img-fluid" width="200"></a></div><div class="logoMostrar col-3 col-md-1"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon.png" alt="" class="img-fluid" width="40"></a></div><div class="search col-12 col-sm-6 col-lg-5"><div class="nav-search"><div class="search-input"><input type="text" placeholder="O que você procura..." id="search-input"><div class="search-dropdown" id="hits-container"></div><i class="close-search material-icons">close</i> <i class="material-icons search-icon">search</i></div></div></div><div class="welcome col-4 col-lg-3 col-xl-2">Bem-vindo<?php if (is_user_logged_in()) { 
          echo ", "; 
          echo($current_user->first_name);
        ?> (:<br><a href="<?php echo home_url(); ?>/minha-conta">Minha conta</a> <span>|</span> <a href="<?php echo home_url(); ?>//minha-conta/customer-logout/">Sair</a> <?php } else { ?> (:<br><a href="<?php echo home_url(); ?>/login">Entre</a> <span>ou</span> <a href="<?php echo home_url(); ?>/cadastrar">cadastre-se</a> <?php } ?> </div><!-- <div class="subtitle"></div> --><div class="takeIcon col-4 col-md-3 col-lg-2"> <?php echo do_shortcode('[yith_ywraq_mini_widget_quote]'); ?> <!-- <div class="cart_menu"><a href="<?php echo home_url(); ?>/carrinho"><?php//  echo $cart; ?> </a></div> --></div></div></div></div></div><div class="menu_mobile col-12"><span class="itemMenu"> <?php echo $hamburger; ?> Todas as categorias <span class="material-icons arrowDown">keyboard_arrow_down</span></span><div class="takeSubmenuMobile"><div class="submenuMobile"> <?php 
             $args = array(
             'taxonomy' => 'product_cat',
             'hide_empty' => false,
             'parent'   => 0
            );
            $product_cat = get_terms( $args );
            
            foreach ($product_cat as $parent_product_cat)
            {
              // echo "<pre>";
              // var_dump($parent_product_cat);
              // echo "</pre>";
              $iconName = get_field("icon_category",$parent_product_cat->taxonomy . '_' . $parent_product_cat->term_id);
              
            ?> <div class="item col-6"><div class="title col-12"><a href="<?php echo home_url() . "/categoria-produto/" .  $parent_product_cat->slug; ?>" class="col-12" style="font-weight: bold;"><span class="material-icons"><?php echo $iconName; ?></span> <?php echo $parent_product_cat->name; ?> </a></div></div> <?php } ?> </div></div></div><div class="menu_desktop"><div class="container-fluid"><div class="row no-gutters"><ul><li><button><?php echo $hamburger; ?> <span class="itemMenu">Todas as categorias <span class="material-icons arrowDown">keyboard_arrow_down</span></span></button><div class="takeSubmenu"><div class="submenu"> <?php 
             $args = array(
             'taxonomy' => 'product_cat',
             'hide_empty' => false,
             'parent'   => 0
            );
            $product_cat = get_terms( $args );
            
            foreach ($product_cat as $parent_product_cat)
            {
              // echo "<pre>";
              // var_dump($parent_product_cat);
              // echo "</pre>";
             $iconName = get_field("icon_category",$parent_product_cat->taxonomy . '_' . $parent_product_cat->term_id);
             
            ?> <div class="item col-3 col-lg-2"><!-- <button aria-expanded="false" style="width: 100%; text-align: left;"> --><div class="title col-12 col-md-10"><a href="<?php echo home_url() . "/categoria-produto/" .  $parent_product_cat->slug; ?>" class="col-12" style="font-weight: bold;"><span class="material-icons"><?php echo $iconName; ?></span><?php echo $parent_product_cat->name; ?> </a></div><!-- </button> --></div> <?php } ?> </div></div></li><li class="launch"><a href="<?php echo home_url(); ?>/categoria-produto/lancamentos"><span class="itemMenu"><?php echo $launch;?></span>Lançamentos</a></li><li class="offer"><a href="<?php echo home_url(); ?>/categoria-produto/promocoes"><span class="itemMenu"><?php echo $offer;?></span>Ofertas</a></li><li class="segmentos"><a href="<?php echo home_url(); ?>/categoria-produto/segmentos"><span class="itemMenu"><?php echo $segmentos;?></span>Segmentos<div class="material-icons arrowDown">keyboard_arrow_down</div></a><div class="takeSubmenu takeanothersubmenu"><div class="submenuanother" style="padding: 10px 10px;"> <?php 
             $args = array(
             'taxonomy' => 'product_cat',
             'terms' => array( 'segmentos' ),
             'include_children' => true,
            );
            $product_cat = get_terms( $args );
            
            foreach ($product_cat as $parent_product_cat)
            {
              $child_args = array(
                'taxonomy' => 'product_cat',
                'hide_empty' => false,
                'parent'   => $parent_product_cat->term_id
                );
                $child_product_cats = get_terms( $child_args );
                if($parent_product_cat->name === 'Segmentos') {
                foreach ($child_product_cats as $child_product_cat)
                {
            ?> <div class="item col-12" style="margin-bottom: 10px;"><a href="<?php echo home_url() . "/categoria-produto/" .  $child_product_cat->slug; ?>"><?php echo $child_product_cat->name; ?></a></div> <?php }
                }
                } ?> </div></div></li><li class="calendar"><a href="<?php echo home_url(); ?>/datas-comemorativas"><span class="itemMenu"><?php echo $calendar;?></span>Datas Comemorativas</a></li><li class="sales"><a href="<?php echo home_url(); ?>/categoria-produto/destaque"><span class="itemMenu"><?php echo $sales;?></span>+ Vendidos</a></li><li class="sales"><a href="<?php echo home_url(); ?>/contato"><span class="itemMenu"><?php echo $talk;?></span>Envie sua Ideia</a></li></ul></div></div></div><div class="mobileList"> <?php echo do_shortcode('[yith_ywraq_mini_widget_quote]'); ?> </div><div class="whatsappFixed"><a href="https://api.whatsapp.com/send?phone=5519997771976&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Gostaria%20de%20saber%20sobre..." target="_blank"><span class="material-icons">whatsapp</span></a></div><div class="welcome_mobile">Bem-vindo<?php if (is_user_logged_in()) { 
          echo ", "; 
          echo($current_user->first_name);
        ?> (:<br><a href="<?php echo home_url(); ?>/minha-conta">Minha conta</a> <span>|</span> <a href="<?php echo home_url(); ?>//minha-conta/customer-logout/">Sair</a> <?php } else { ?> (:<br><a href="<?php echo home_url(); ?>/login">Entre</a> <span>ou</span> <a href="<?php echo home_url(); ?>/cadastrar">cadastre-se</a> <?php } ?> </div> <?php wp_head(); ?> </header></html>