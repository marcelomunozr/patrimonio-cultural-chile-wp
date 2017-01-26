
<div class="relative">
  <div class="lupita-zone">
    <div class="left-box"></div>
    <div class="right-box"><span class="lupa"></span></div>
  </div>
  <div class="owl-carousel carousel-homi">
    <?php
    $i=0;
    $query = new WP_Query( array( 'post_type' => 'destacados',  'posts_per_page' => -1));//,'categoria'=>'almacen'
    if ($query->have_posts() ) {?>
    <?php
      while ( $query->have_posts() ) { 
        $query->the_post();?>
            <div class="item">
              <div class="bwWrapper">
                <div class="captione">
                  <h2><?php the_title(); ?></h2>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="txt">
                        <?php the_content(); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                  if(has_post_thumbnail()):
                    $thumb_id = get_post_thumbnail_id($post->ID);
                    $thumb = wp_get_attachment_image_src($thumb_id, 'full');
                ?>
                    <img src="<?php echo $thumb[0]?>" class="img-responsive img-center" />
                <?php else: ?>
                    <img src="http://placehold.it/1920x880" alt="<?php the_title(); ?>" class="img-responsive img-center">
                <?php endif; ?>
              </div>
            </div>
            <?php $i++; ?>
          <?php
          }
        wp_reset_postdata();
      }
    ?>
  </div>
</div>
