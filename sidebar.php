<aside>
  <h2>Sidebar</h2>
<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'left-sidebar' ); ?>
         <?php wp_meta(); ?>
	</ul>
<?php endif; ?>
</aside>
