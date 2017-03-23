<?php get_header(); ?>

	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-primary panel-transparent">
				<?php while (have_posts()) : the_post(); ?>
					<div class="panel-body">
	                	<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	                	<p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y'); ?></p>
	                	<p><?php the_content(''); ?></p>
					
					<div class="panel-footer">                	
                	<?php comments_template( '/comments.php', false ); ?>
                	</div>
              	<?php endwhile; wp_reset_query(); ?> 
              	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-primary panel-transparent">
				<div class="panel-body">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>