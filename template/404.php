<?php get_header(); ?>
<section>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1>404</h1>
        <?php showbreadcrumb(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <p>Тут страницы нет.</p>
        </article>
      </div>
<?php get_sidebar(); ?>
    </div>
  </div>
  <?php endwhile; ?>
</section>
<?php get_footer(); ?>