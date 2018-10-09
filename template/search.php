<?php get_header(); ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1><?php echo 'Поиск по запросу: ' . get_search_query(); ?></h1>
        <?php showbreadcrumb(); ?>
        <section>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part('loop'); ?>
          <?php endwhile;
            else: echo '<p>Записей нет. Либо ошибка, либо категория пуста.</p>'; endif; ?>
          <?php showpagination(); ?>
        </section>
      </div>
<?php get_sidebar(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>