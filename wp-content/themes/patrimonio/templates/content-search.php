<article <?php post_class(); ?>>
	<div class="row">
	
		<div class="col-2">
		Aqui deberia ir la imagen
		</div>
		
		<div class="col-6">
		  <header>
		    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		    <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
		  </header>
		  <div class="entry-summary">
		    <?php the_excerpt(); ?>
		  </div>
		</div>
	</div>
</article>
