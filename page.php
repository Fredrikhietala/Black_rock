<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="panel panel-primary panel-transparent">
            <div class="panel-body">
                <h1 class="title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>