<?php get_header(); ?>

<?php get_template_part('template-part/navigation'); ?>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1"><?php bloginfo(); ?></h1>
      <h3 class="mb-5">
        <em><?php bloginfo('description'); ?></em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out more..</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2>About</h2>
          <p class="lead mb-5">本田直（ホンダスナオ）と申します。</p>
          <div class="container text-center mt-4">
            <a class="btn btn-primary btn-xl" href="<?php echo esc_url(home_url('about')); ?>">more..</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0">Services</h3>
        <h2 class="mb-5">What i Offer</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-screen-smartphone"></i>
          </span>
          <h4>
            <strong>Direction</strong>
          </h4>
          <p class="offer-caption">ディレクション</p>
          <p class="text-faded mb-0">方向転換は頻繁に。</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pencil"></i>
          </span>
          <h4>
            <strong>Design</strong>
          </h4>
          <p class="offer-caption">デザイン</p>
          <p class="text-faded mb-0">シンプルで無駄なく。<br>「必要にして十分」なデザイン。</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-like"></i>
          </span>
          <h4>
            <strong>Maintenance</strong>
          </h4>
          <p class="offer-caption">メンテナンス</p>
          <p class="text-faded mb-0">実在しないものでも<br>長く使えるように、大切に。</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-mustache"></i>
          </span>
          <h4>
            <strong>Anything</strong>
          </h4>
          <p class="offer-caption">何でも</p>
          <p class="text-faded mb-0">I mustache you a question...</p>
        </div>
      </div>
    </div>
    
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
<?php
$works_obj=get_page_by_path('works');
$post=$works_obj;
setup_postdata($post);
$works_title=get_the_title();
?>
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Portfolio</h3>
        <h2 class="mb-5"><?php the_title(); ?></h2>
      </div>
<?php wp_reset_postdata(); ?>
      <div class="row no-gutters">
<?php
$works_pages=get_child_pages(4, $works_obj->ID);
if($works_pages->have_posts()):
  while($works_pages->have_posts()): $works_pages->the_post();
?>
          <div class="col-lg-6">
            <a class="portfolio-item" href="<?php the_permalink('link'); ?>">
              <span class="caption">
                <span class="caption-content">
                  <h2><?php the_title(); ?></h2>
                  <p class="mb-0"><?php echo get_the_excerpt(); ?></p>
                </span>
              </span>
              <img class="" src="<?php the_post_thumbnail('works'); ?>
            </a>
          </div>
<?php endwhile; 
wp_reset_postdata();
endif;
?>
      </div>
    </div>
    <div class="container text-center mt-4">
    <a class="btn btn-primary btn-xl" href="<?php echo esc_url(home_url('works')); ?>">more..</a>
  </section>

  <!-- About -->
  <section class="content-section bg-light" id="contact">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2>Contact</h2>
          <p class="lead mb-5">お問い合わせ</p>
          <div class="container text-center mt-4">
            <a class="btn btn-primary btn-xl" href="<?php echo esc_url(home_url('contact')); ?>">send message..</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>