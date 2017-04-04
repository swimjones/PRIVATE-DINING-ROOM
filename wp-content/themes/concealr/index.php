<?php get_header(); ?>
<div id=main>
<div id=content>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class=post_box>
			<a href="<?php echo get_post_permalink();?>"><?php echo get_the_post_thumbnail(); ?></a>
				<div class=post_content>
					<div class=vert_bar></div>
					<h2><a class=title_link href="<?php echo get_post_permalink();?>"><?php echo the_title(); ?></a></h2>
					<p class=date><?php echo the_date(); ?> — <?php echo the_time(); ?></p>
					<p><?php echo the_excerpt();?></p>
				</div>
			</div>
	<?php endwhile; else: ?>
<p><?php _e('Sorry! We can\'t find that post :-(.');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>
