<?php get_header(); ?>
<main>
  <section>
    <div class="datas__comemorativas">
      <div class="container">
        <div class="row no-gutters">
          <div class="breadcrumb_my_account">
            <a href="<?php echo home_url(); ?>">Home</a> <span class="material-icons arrow">navigate_next</span> <span>Datas Comemorativas</span>
          </div>
          <div class="col-12" style="text-align: center;">
            <h2 class="titles_features">Datas Comemorativas</h2>
          </div>
          <?php
          // check if the repeater field has rows of data
          if (have_rows('inserir_datas')) :
            // loop through the rows of data
            while (have_rows('inserir_datas')) : the_row(); $term = get_sub_field('link_datas_comemorativas');?>
          <div class="itemCard col-12 col-md-4 col-xl-3">
            <a href="<?php echo home_url(); ?>/categoria-produto/<?php echo esc_html( $term->slug );  ?>">
              <img src="<?php the_sub_field('banner_datas_comemorativas'); ?>" alt="" class="img-fluid">
            </a>
          </div>
          <?php
        endwhile;
      else : 
      // no rows found
      endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>