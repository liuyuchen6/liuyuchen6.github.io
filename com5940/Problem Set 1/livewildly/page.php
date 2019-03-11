<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package My Music Band
 */

get_header(); ?>

<section class="home-slider owl-carousel img" style="background-image: url(<?php bloginfo('template_url');?>/images/bg_1.jpg);">
    	  <div class="slider-item" style="background-image: url(<?php bloginfo('template_url');?>/images/bg.jpg);">
     	 	<div class="overlay"></div>
     	   <div class="container">
       	   <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">
							<center><?php the_title();?></center>
							</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo get_home_url(); ?>">回到主页</a></span> <span>下拉继续</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>
<br><br>

	
<div class="container">
      				<div class="info text-center">
      					<div class="text">
							<?php
					if (is_page('cool')) {
					echo "<br><center><h2>登山指南 Guidebook</h2></center><br>";
						$query = new AirpressQuery();
						$query->setConfig("livewildly");
						$query->table("trails");
						$events = new AirpressCollection($query);
                             foreach($events as $e){
						echo "<div class='staff'>
<center><a href='/livewildly/".$e["id"]."' target='_blank' style='font-size:1.5em'>".$e["Name"]."<br></a><br><center>".substr($e["Notes"],0,200)."<center><br><img src=".$e["pic_name"]." width='500'><hr><br></center></div> <hr>";
							 }
					}
							?>
							</div>
      			</div>
	<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
			  <?php if ($wp_query->have_posts()):
   		while ($wp_query->have_posts()) :
      	$wp_query->the_post();
			   endwhile;?>
			  <hr>
            <?php the_content();?>
              <img src="" alt="" class="img-fluid">
		</div>
        </div>
      </div>
    </section> <!-- .section -->
	<?php endif;?>			
<?php get_footer();?>