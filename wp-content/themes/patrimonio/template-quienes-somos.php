<?php
/**
 * Template Name: Template Quiénes Somos
 */
?>
<div class="relative">
  <div class="lupita-zone">
    <div class="left-box"></div>
    <div class="right-box"><span class="lupa"></span></div>
  </div>
  <div class="container relative">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="row">
          <div class="col-md-3 relative fixed-sidebar"><?php dynamic_sidebar( 'sidebar-somos' ); ?></div>    
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
<?php the_post(); ?>
<section class="contenido-boxes row somos">
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
    <?php if (is_page('historia')): ?>
      <div class="row posts-zone-int">
        <div class="col-md-10 offset-md-1">
          <div class="row">
            <div class="col-md-6">
              <?php $texto =  get_field('texto');?>
              <?php $img =  get_field('img');?>
              <h4><?php echo wp_strip_all_tags( $texto); ?></h4>
            </div>
            <div class="col-md-4 offset-md-1">
              <img src="<?php echo $img; ?>" alt="<?php the_title(); ?>" class="img-responsive img-center">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <?php dynamic_sidebar( 'sidebar-somos' ); ?>
            </div>
            <div class="col-md-9">
              <div class="el-content">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php elseif (is_page('mision-y-vision')): ?>
      <div class="row posts-zone-int">
        <div class="col-md-10 offset-md-1">
          <div class="row">
            <div class="col-md-3">
              <?php dynamic_sidebar( 'sidebar-somos' ); ?>
            </div>
            <div class="col-md-9">
              <div class="el-content">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php elseif (is_page('directorio')): ?>
      <?php $directorio = get_field('directorio'); ?>
      <?php $directores = get_field('directores'); ?>
      <div class="row posts-zone-int">
        <div class="col-md-12">
          <div class="text-center">
            <h2>Directorio</h2>
          </div>
          <?php if (!empty($directorio)): ?>
            <ul class="personajes">
              <?php foreach ($directorio as $personaje): ?>
                <li>
                  <div class="img-directorio">
                    <img src="<?php echo $personaje['foto'];?>" alt="<?php echo $personaje['nombre']; ?>" class="img-responsive img-center grayscale">
                  </div>
                  <h5><?php echo $personaje['nombre']; ?></h5>
                  <h6><?php echo $personaje['cargo']; ?></h6>
                </li>
              <?php endforeach ?>
            </ul>
          <?php endif ?>
          <div class="text-center">
            <h2>Directores</h2>
          </div>
          <?php if (!empty($directores)): ?>
            <ul class="personajes">
              <?php foreach ($directores as $director): ?>
                <li>
                  <div class="img-directorio">
                    <img src="<?php echo $director['foto'];?>" alt="<?php echo $director['nombre']; ?>" class="img-responsive img-center grayscale">
                  </div>
                  <h5><?php echo $director['nombre']; ?></h5>
                  <h6><?php echo $director['cargo']; ?></h6>
                </li>
              <?php endforeach ?>
            </ul>
          <?php else: ?>
            <div class="row posts-zone-int">
              <div class="col-md-10 offset-md-1">
                <div class="row">
                  <div class="row">
                    <div class="col-md-3">
                      <?php dynamic_sidebar( 'sidebar-somos' ); ?>
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
          <?php endif ?>
        </div>
      </div>
    <?php endif ?>
    <div class="clear30"></div>
  </div>
</section>
