<?php get_header(); ?>
<main>
  <section>
    <div class="bannerSinglePost">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-md-7">
            <h2 class="title"><?php the_title(); ?></h2>
            <div class="infos_post"><?php $author_id = $post->post_author;the_author_meta('user_nicename', $author_id); ?> <span> | </span> <?php echo get_the_date(); ?> </div>
          </div>
          <div class="col-12 col-md-5"><img src="<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); echo $url; ?>" alt="" class="img-fluid"></div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="textoSinglePost">
      <div class="container">
        <div class="row no-gutters">
          <?php while (have_posts()) : the_post(); ?>
          <div class="texto_blog"><?php the_content(); ?></div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>