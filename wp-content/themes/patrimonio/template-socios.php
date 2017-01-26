<?php
/**
 * Template Name: Template Socios
 */
?>
<?php the_post(); ?>
<div class="relative">
  <div class="lupita-zone">
    <div class="left-box"></div>
    <div class="right-box"><span class="lupa"></span></div>
  </div>
  <div class="container relative">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="row">
          <div class="col-md-3 relative fixed-sidebar"><?php dynamic_sidebar( 'sidebar-socios' ); ?></div>    
        </div>
      </div>
    </div>
  </div>
  <div class="owl-carousel carousel-interno">
    <div class="item">
      <div class="item">
        <div class="bwWrapper">
          <div class="captione">
            <h2><?php the_title(); ?></h2>
          </div>
          <?php the_post_thumbnail('full', array('class' => 'img-responsive img-center', 'title' => get_the_title()));?>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="contenido-boxes row socios">
  <div class="col-md-9 left-boxer"></div>
  <div class="col-md-3 right-boxer"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-5 offset-md-1">
        <div class="breadcrumbs" typeof="BreadcrumbList">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
        </div>
      </div>
    </div>
    <div class="row posts-zone-int">
      <div class="col-md-10 offset-md-1">
        <div class="row">
          <div class="col-md-6">
            <?php $texto =  get_field('texto');?>
            <?php $img =  get_field('img');?>
            <h4><?php echo wp_strip_all_tags( $texto); ?></h4>
          </div>
          <div class="col-md-5 offset-md-1 relative">
            <img src="<?php echo $img; ?>" alt="<?php the_title(); ?>" class="img-responsive img-center">
            <a href="#" class="btn-socios"><img src="<?php bloginfo('template_url'); ?>/assets/images/btn-socios.jpg" alt="Hazte Socio" class="img-responsive"></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <?php dynamic_sidebar( 'sidebar-socios' ); ?>
          </div>
          <div class="col-md-9">
            <div class="el-content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>