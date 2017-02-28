<?php get_header(); ?>
<div id=main>
<div id=content>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class=testphoto><?php the_post_thumbnail(); ?>
		<h2 class=index_title><?php the_title(); ?></h2>
		<p class=index_excerpt><?php the_excerpt(__('See full story')); ?></p>
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


