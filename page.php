<?php get_header(); ?>
<?php get_template_part('template-part/navigation'); ?>

  <!-- Header -->
    <div class="page-head">
		  <div>
        <img src="<?php echo get_template_directory_uri();?>/img/black.png ">
      </div>
      <div class="wrapper">
        <h2 class="page-title"><?php the_title(); ?></h2>
      </div>
      <?php
if(function_exists('bread_crumb')):
  bread_crumb();
endif;
?>
    </div>
              <div class="page-main">
                <div class="lead-inner">
<?php
if( have_posts() ):
	while( have_posts() ):the_post();
		the_content();
	endwhile;
endif;
?>
                </div>
              </div>
<?php get_footer(); ?>
