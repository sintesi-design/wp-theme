<div id="row3">
  <footer class="wrapper">
    <p>Copyright 2015 &copy; <a href="http://www.sintesi-design.it">Sintesi-design.it</a></p>
    <?php if ( has_nav_menu( 'menu-secondario' ) ) { ?>
      <?php wp_nav_menu( array( 'theme_location' => 'menu-secondario' ) ); ?>
    <?php } ?>
  </footer>
</div>
<!-- /#row3 -->
<?php wp_footer(); ?>
</body></html>