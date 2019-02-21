<?php get_header(); ?>

<div class="container">
  <?php if( have_posts()): while (have_posts()):the_post(); ?>
    <p><?php the_content(); ?></p>
  <?php endwhile; else: ?>
	<br>
	<div>
		<h3 style="text-align: center">抱歉，尚未探索。你可以了解“野生指南”精选推荐路线！</h3>
	</div>
	<br>
  <?php endif; ?>
	
</div>

<?php get_footer(); ?>
