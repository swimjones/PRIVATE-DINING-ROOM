<?php get_header(); ?>
<div id=main>
<div id=content>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class=post-box>
			<a href="<?php echo get_post_permalink();?>"><?php echo get_the_post_thumbnail(); ?></a>
				<div class=post-content>
					<a class=title-link href="<?php echo get_post_permalink();?>"><?php echo the_title(); ?></a>
					<?php echo the_excerpt();?>
				</div>
			</div>
	<?php endwhile; else: ?>
<p><?php _e('Sorry! We can\'t find that post :-(.');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->