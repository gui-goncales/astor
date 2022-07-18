<?php get_header(); ?>
<main>
  <div class="pageLogin">
    <div class="container">
      <div class="row no-gutters">
        <div class="column col-11 col-sm-8 col-md-7 col-lg-6 col-xl-5">
          <h2 class="titles_features col-12">Criar cadastro</h2>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="formulario col-12"><?php the_content(); ?></div>

          <?php endwhile;
          else : ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  </section>
</main>
<?php get_footer(); ?>