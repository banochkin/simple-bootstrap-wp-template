<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p><b><?php bloginfo('name'); ?></b>, <?php echo date('Y'); ?></p>
        <p>Разработка: <a title="Руслан Баночкин" href="https://banochkin.com/">Руслан Баночкин</a></p>
      </div>
      <div class="col-md-6">
        <?php $args = array( 'theme_location' => 'footer', 'container'=> 'ul', 'menu_class' => 'footer-menu', 'menu_id' => 'footer-menu' );
          wp_nav_menu($args);
        ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>