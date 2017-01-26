<header class="header-patrimonio">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 relative">
        <?php
        if (has_nav_menu('menu_header_top')) :
          wp_nav_menu(['theme_location' => 'menu_header_top', 'menu_class' => 'navbar header-top']);
        endif;
        ?>
        <div class="clearfix"></div>
        <nav class="navbar navbar-light">
          <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><span class="logo"></span><?php //bloginfo('name'); ?></a>
          <?php
          if (has_nav_menu('menu_header')) :
            wp_nav_menu(['theme_location' => 'menu_header', 'menu_class' => 'nav navbar-nav']);
          endif;
          ?>
        </nav>
      </div>
      <div class="col-sm-2">
        <a href="http://www.entel.cl"><span class="logo-entel"></span></a>
        <div class="lupita"></div>
      </div>
      
    </div>
  </div>
</header>
<?php get_search_form(); ?>