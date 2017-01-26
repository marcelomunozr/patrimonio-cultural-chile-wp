
<?php $query = get_page_by_path('actividades'); ?>
<?php $gallery = get_field('galeria', $query->ID); ?>
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
    <?php if(!empty($gallery)){?>
		<?php $i=0;?>
		<?php foreach ($gallery as $photo): ?>
            <div class="item">
              <div class="bwWrapper">
                <div class="captione">
                  <h2><?php echo get_the_title($query); ?></h2>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="txt">
                        <?php the_content(); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $photourl = $photo['sizes']['full'] ? $photo['sizes']['full'] : $photo['url']; ?>
				        <img src="<?php echo $photourl; ?>" alt="<?php the_title(); ?>" class="img-center img-responsive">
              </div>
            </div>
			<?php $i++; ?>
		<?php endforeach; 
		wp_reset_postdata();?>
    <?php }?>
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
    <div class="row posts-zone">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      
      $query = new WP_Query( array( 'post_type' => 'actividades', 'posts_per_page' => 6, 'paged' => $paged));//'categoria' => 'eventos,sesiones,todos', 'posts_per_page' => 6, 

      if ($query->have_posts() ) {
        $i = 0;
        $col = 3;
        $caja = 'small';
          while ( $query->have_posts() ) { ?>
          <?php
            $query->the_post();
						if($i % 6 == 2 || $i % 6 == 3){
							$col = 6;
              $caja = 'big';
						} else {
							$col = 3;
              $caja = 'small';
						}     
            ?>
              <div class="col-md-<?php echo $col;?> article">
                <a href="<?php the_permalink(); ?>" class="the-box bg<?php echo $i+1;?>">
                  <div class="flow-image"><?php the_post_thumbnail('caja-'.$caja, array('class' => 'img-responsive img-center grayscale', 'title' => get_the_title()));?></div>
                  <div class="texts">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words( get_the_excerpt(), 10, '...' ); ?></p>
                  </div>
                </a>
              </div>
            <?php
            $i++;
          }?>
        <?php wp_reset_postdata();?> 
      <?php } ?>

    </div>
    <div class="row invisible">
      <div class="col-md-12 text-center">
          <?php wp_pagenavi( array( 'query' => $query ) ); ?>
      </div>
    </div>
  </div>
</section>