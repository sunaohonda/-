<?php get_header(); ?>
<?php get_template_part('template-part/navigation'); ?>

  <!-- Header -->
    <div class="page-head">
		  <div>
        <?php echo get_main_image('detail'); ?>
      </div>
      <?php
if(function_exists('bread_crumb')):
  bread_crumb();
endif;
?>
    </div>
  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
<?php
$works_pages=get_child_pages(-1, $works_obj->ID);
if($works_pages->have_posts()):
  while($works_pages->have_posts()): $works_pages->the_post();
?>
          <div class="col-lg-12 mb-5">
            <a class="portfolio-item" href="<?php the_permalink(); ?>">
              <span class="caption">
                <span class="caption-content">
                  <h2><?php the_title(); ?></h2>
                  <p class="mb-0"><?php echo get_the_excerpt(); ?></p>
                </span>
              </span>
              <img class="img-fluid" src="<?php the_post_thumbnail(''); ?>
            </a>
          </div>
<?php endwhile;
wp_reset_postdata();
endif;
?>
      </div>
  </section>

<?php get_footer(); ?>
