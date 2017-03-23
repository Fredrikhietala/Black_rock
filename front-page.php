<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	<div class="panel panel-primary panel-transparent">
  		<div class="panel-body">
    		<p><?php the_content(); ?></p>
    	</div>	
	</div>
<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>