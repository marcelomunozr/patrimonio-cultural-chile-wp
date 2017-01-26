<?php get_template_part('templates/page', 'header'); ?>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Lo sentimos, no existen resultados para lo que buscas.', 'sage'); ?>
  </div>
<?php endif; ?>


<?php get_template_part('templates/destacado-homi'); ?>

<?php get_template_part('templates/middle-homi'); ?>
