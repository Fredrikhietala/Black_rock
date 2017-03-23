<?php get_header(); ?>

<div class="row">
    <div class="col-md-9">
        <?php if (have_posts()) : ?>

            <?php if (is_category()) { ?>
                <h3 class="title"><?php single_cat_title(); ?></h3>
            <?php } elseif (is_month()) { ?>
                <h3 class="title"><?php the_time('F, Y'); ?></h3>
            <?php } ?>


            <?php while ( have_posts() ) : the_post(); ?>
                <div class="date">
                    <p><?php the_time('d '); ?><?php the_time('M'); ?></p>
                </div>
                <div class="panel panel-primary panel-transparent">
                    <div class="panel-body">
                        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="text-muted">Postat av <?php the_author(); ?> den <?php the_time('F jS, Y'); ?></p>
                        <p><?php the_excerpt(); ?></p>

                        <div class="panel-footer">
                        <ul class="post-meta">
                            <li>Postat i <?php the_category(', '); ?> </li> 
                            <li><a href="<?php the_permalink(); ?>#comments"><?php comments_number('Inga kommentarer', '1 kommentar', '% kommentarer'); ?></a></li> 
                            <li class="read-more"><a href="<?php the_permalink(); ?>">Läs mer</a></li>
                        </ul>
                        </div>
                    </div>
                </div>

            <?php endwhile; wp_reset_query(); ?>

            <div class="pagination">
                <p class="older"><?php next_posts_link('Äldre inlägg'); ?></p>
                <p class="newer"><?php previous_posts_link('Nyare inlägg'); ?></p>
            </div>

            <?php endif; ?>
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