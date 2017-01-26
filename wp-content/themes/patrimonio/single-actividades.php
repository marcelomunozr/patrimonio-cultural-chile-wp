<?php $query = get_page_by_path('proyectos'); ?>
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
      <div class="row posts-zone-int">
      	<div class="col-md-10 offset-md-1">
      		<h1><?php the_title(); ?></h1>
      		<div class="other-flow">
      			<?php the_post_thumbnail('full', array('class' => 'img-responsive img-center', 'title' => get_the_title()));?>
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
      <div class="clear30"></div>
  </div>
</section>