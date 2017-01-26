<footer>
  <div class="col-md-10 offset-md-1">
    <?php dynamic_sidebar('sidebar-footer'); ?>
	<?php
	if (has_nav_menu('menu_header')) :
		wp_nav_menu(['theme_location' => 'menu_footer', 'menu_class' => 'footer-nav']);
	endif;
	?>
  </div>
</footer>
