<?php include 'svg.php'; ?>

<footer>
  <div class="footer">
    <div class="container-fluid">
      <div class="row no-gutters col-12 col-md-11">
        <div class="col-12 col-md-4">
          <div class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logotipo_astor_white.png" alt="" class="img-fluid" width="240"></div>
          <div class="description">A ASTOR Brindes é uma empresa especializada no ramo promocional, atuante no mercado de Brindes Personalizados há 13 anos. Com a experiência adquirida tem crescido e se solidificado cada vez mais, tendo como pilares a confiança e o respeito ao cliente.</div>
        </div>
        <div class="col-12 col-md-4 col-lg-3 col-xl-2">
          <div class="title_footer">Insititucional</div>
          <ul>
            <li><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
            <li><a href="<?php echo home_url(); ?>/sobre">Quem Somos</a></li>
            <li><a href="<?php echo home_url(); ?>/politica-de-privacidade">Privacidade e Segurança</a></li>
            <li><a href="<?php echo home_url(); ?>/contato">Fale Conosco</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-4 col-lg-3 col-xl-2">
          <div class="title_footer">Minha conta</div>
          <?php if (is_user_logged_in()) { ?>

          <ul>
            <li><a href="<?php echo home_url(); ?>/minha-conta">Sua Conta</a></li>
            <li><a href="<?php echo home_url(); ?>/carrinho">Seu Carrinho</a></li>
            <li><a href="<?php echo home_url(); ?>/minha-conta/quotes/">Pedidos</a></li>
          </ul>
          <?php } else { ?>
          <ul>
            <li><a href="<?php echo home_url(); ?>/login">Fazer Login</a></li>
            <li><a href="<?php echo home_url(); ?>/cadastrar">Cadastrar</a></li>
            <li><a href="<?php echo home_url(); ?>/carrinho">Carrinho de Compras</a></li>
            <!-- <li><a href="#" id="order_details_btn_modal_footer">Acompanhar Pedido</a></li> -->
          </ul>
          <?php } ?>

        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <div class="title_footer">Contatos</div>
          <ul>
            <li><a href="<?php echo home_url(); ?>/minha-conta"><span class="material-icons icon_footer">phone</span> (19) 3648.4006</a></li>
            <li><a href="<?php echo home_url(); ?>/minha-conta/orders"><span class="material-icons icon_footer">whatsapp</span> (19) 98717-4691</a></li>
            <li><a href="<?php echo home_url(); ?>/wishlist"><span class="material-icons icon_footer">email</span> comercial@astorbrindes.com.br</a></li>
            <li class="social_media"><a href="<?php echo home_url(); ?>/carrinho"><?php echo $facebook;?> /AstorBrindes</a> <a href="#"><?php echo $instagram;?> /AstorBrindes</a></li>
            <!-- <li><a href="#" id="order_details_btn_modal_footer">Acompanhar Pedido</a></li> -->
          </ul>
        </div>

        <div class="allrights col-12">
          <span>® ASTOR Brindes Corporativos – CNPJ: 11.728.594/0001-78. Todos os direitos reservados. Endereço eletrônico: www.astorbrindes.com.br</span>
          <span>Desenvolvido por <a href="https://dfgcomunic.com" target="_blank">DFG</a></span>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js" type="text/javascript"></script>
<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/js/iziModal.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script> -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/js/instantsearch.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/js/app.js"></script>
</body>

</html>