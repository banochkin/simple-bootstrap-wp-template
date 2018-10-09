<?php get_header(); ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1><?php
          if (is_day()) : echo 'Архив за день: ' . get_the_date();
          elseif (is_month()) : echo 'Архив за месяц: ' . get_the_date('F Y');
          elseif (is_year()) : echo 'Архив за год: ' . get_the_date('Y');
          else : echo 'Архив';
          endif; ?></h1>
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