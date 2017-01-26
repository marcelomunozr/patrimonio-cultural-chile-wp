<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php wp_head(); ?>
  <?php if (!is_single()) { ?>
    <!-- MAMASONRY -->
    <script src="<?php bloginfo('template_url'); ?>/assets/scripts/masonry/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/scripts/masonry/jquery.isotope.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/scripts/masonry/jquery.infinitescroll.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/scripts/masonry/animated-masonry-gallery.js"></script>
    <!-- /MAMASONRY -->
  <?php } ?>
  
  <?php $imagenes = get_field('imagenes','options'); ?>
  <style type="text/css">
  	<?php foreach ($imagenes as $imagen) { ?>
  		.navbar-nav .<?php echo $imagen['class'];?> .sub-menu{
  			background: #fff url(<?php echo $imagen['image']?>) no-repeat 130% 0;/* right top*/
			-webkit-column-count: <?php echo $imagen['columns']?>;
			-moz-column-count: <?php echo $imagen['columns']?>;
			column-count: <?php echo $imagen['columns']?>;
  		}
  	<?php }?>
  </style>
</head>
