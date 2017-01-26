<div class="middle-homi container">
  <div class="row">
    <div class="col-md-6 left-mid">
      <div class="first-zone">
        <?php $first = get_field('first','option'); ?>
        <?php if($first[0]): 
          $post = $first[0];
          setup_postdata($post);
          ?>
            <a href="<?php the_permalink(); ?>">
              <div class="bwWrapper">
                <div class="overlay"></div>
                <div class="captione">
                  <h5><?php the_field('adicional'); ?></h5>
                  <h2><?php the_title(); ?></h2>
                  <div class="txt">
                    <?php echo get_the_excerpt( $primero->ID ); ?>
                  </div>
                </div>
                <?php
                  if(has_post_thumbnail($primero->ID)):
                    $thumb_id = get_post_thumbnail_id($primero->ID);
                    $thumb = wp_get_attachment_image_src($thumb_id, 'full');
                ?>
                    <img src="<?php echo $thumb[0]?>" class="img-responsive img-center" />
                <?php else: ?>
                    <img src="http://placehold.it/708x827" alt="<?php the_title(); ?>" class="img-responsive img-center">
                <?php endif; ?>
              </div>
            </a>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-6 right-mid">
      <div class="second-zone">
        <?php $second = get_field('second','option'); ?>
        <?php if($second[0]): 
          $post = $second[0];
          setup_postdata($post);
          ?>
            <a href="<?php the_permalink(); ?>">
              <div class="bwWrapper">
                <div class="overlay"></div>
                <div class="captione">
                  <h5><?php the_field('adicional'); ?></h5>
                  <h2><?php the_title(); ?></h2>
                  <div class="txt">
                    <?php echo get_the_excerpt( $primero->ID ); ?>
                  </div>
                </div>
                <?php
                  if(has_post_thumbnail($primero->ID)):
                    $thumb_id = get_post_thumbnail_id($primero->ID);
                    $thumb = wp_get_attachment_image_src($thumb_id, 'second-zone');
                ?>
                    <img src="<?php echo $thumb[0]?>" class="img-responsive img-center" />
                <?php else: ?>
                    <img src="http://placehold.it/708x827" alt="<?php the_title(); ?>" class="img-responsive img-center">
                <?php endif; ?>
              </div>
            </a>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="third-zone">
        <?php $third = get_field('third','option'); ?>
        <?php if($third[0]): 
          $post = $third[0];
          setup_postdata($post);
          ?>
            <a href="<?php the_permalink(); ?>">
              <div class="bwWrapper">
                <div class="overlay"></div>
                <div class="captione">
                  <h2><?php the_title(); ?></h2>
                  <h5><?php the_field('adicional'); ?></h5>
                  <div class="txt">
                    <?php echo get_the_excerpt( $primero->ID ); ?>
                  </div>
                </div>
                <?php
                  if(has_post_thumbnail($primero->ID)):
                    $thumb_id = get_post_thumbnail_id($primero->ID);
                    $thumb = wp_get_attachment_image_src($thumb_id, 'third-zone');
                ?>
                    <img src="<?php echo $thumb[0]?>" class="img-responsive img-center" />
                <?php else: ?>
                    <img src="http://placehold.it/708x827" alt="<?php the_title(); ?>" class="img-responsive img-center">
                <?php endif; ?>
              </div>
            </a>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="fourth-zone">
        <?php $fourth = get_field('fourth','option'); ?>
        <?php if($fourth[0]): 
          $post = $fourth[0];
          setup_postdata($post);
          ?>
            <a href="<?php the_permalink(); ?>">
              <div class="bwWrapper">
                <div class="overlay"></div>
                <div class="captione">
                  <h5><?php the_field('adicional'); ?></h5>
                  <h2><?php the_title(); ?></h2>
                  <div class="txt">
                    <?php echo get_the_excerpt( $primero->ID ); ?>
                  </div>
                </div>
                <?php
                  if(has_post_thumbnail($primero->ID)):
                    $thumb_id = get_post_thumbnail_id($primero->ID);
                    $thumb = wp_get_attachment_image_src($thumb_id, 'full');
                ?>
                    <img src="<?php echo $thumb[0]?>" class="img-responsive img-center" />
                <?php else: ?>
                    <img src="http://placehold.it/708x827" alt="<?php the_title(); ?>" class="img-responsive img-center">
                <?php endif; ?>
              </div>
            </a>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

