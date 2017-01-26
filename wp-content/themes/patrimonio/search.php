<div class="container">
	<?php //get_template_part('templates/page', 'header'); ?>

	<?php if (!have_posts()) : ?>
		<section class="error-404">
			<div class="container">
				<div class="error-zone">
					<h1><strong>Ups!</strong> Un error</h1>
					<h6>El contenido que estás buscando no existe, por favor prueba una vez más.</h6>
					<p>¿Qué andas buscando?</p>
					<div class="lupita-error">
						<img src="<?php bloginfo('template_url'); ?>/dist/images/lupa-error.jpg" alt="Error 404">
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', 'search'); ?>
	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>
</div>