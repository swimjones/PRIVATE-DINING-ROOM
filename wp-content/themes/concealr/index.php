<?php get_header(); ?>
<div id=main>
<div id=content>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class=feat_img><a href="http://privatediningroom/<?php echo get_post_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<h2 class=index_title><a href="http://privatediningroom/<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class=index_excerpt><?php the_excerpt(); ?></p>
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
