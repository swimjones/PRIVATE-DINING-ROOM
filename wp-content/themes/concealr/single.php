<?php get_header(); ?>
<div id=main>
<div id=content>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<p class=index_excerpt><?php the_content(); ?></p>
		</div>
	<br>
	<div class=delimiter></div>
	<br>
	<br>
<?php endwhile; else: ?>
<p><?php _e('Sorry! We can\'t find that post :-(.');?></p><?php endif; ?>
</div>
</div>
<?php get_footer();?>