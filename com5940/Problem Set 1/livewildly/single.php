<?php get_header(); ?>
<?php if (have_posts()):while (have_posts()): the_post(); ?>

    <section class="home-slider owl-carousel img" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bgimg.jpg);">

      <div class="slider-item" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bgimg.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread"><?php the_title(); ?></h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="/cool/">回到前页</a></span> <span>Blog Single</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3"><?php the_title(); ?></h2>
            <?php the_content();?>
              <img src="" alt="" class="img-fluid">
        
		</div>
        </div>
      </div>
    </section> <!-- .section -->
<?php endwhile;endif; ?>
<?php get_footer(); ?>
