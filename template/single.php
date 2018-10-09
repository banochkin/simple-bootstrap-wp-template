<?php get_header(); ?>
<section>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1><?php the_title(); ?></h1>
        <?php showbreadcrumb(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php the_content(); ?>
          <p>Опубликовано: <?php the_time('j M Y'); ?> в <?php the_time('g:i'); ?></p>
          <p>Категории: <?php the_category(', ') ?></p>
          <?php the_tags('<p>Метки: ', ', ', '</p>'); ?>
        </article>
      </div>
<?php get_sidebar(); ?>
    </div>
  </div>
  <?php endwhile; ?>
  <?php comments_template(); ?>
</section>
<?php get_footer(); ?>