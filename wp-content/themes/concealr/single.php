<?php get_header(); ?>
<div id=main>
<div id=content>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class=post-atf>
			<h1><?php echo the_title(); ?></h1>
			<h3><?php the_excerpt(); ?></h3>
			<h4>Story by <?php the_author(); ?></h4>
			<h4>Photography by <?php the_meta(); ?></h4>
			<h2>Published <?php echo the_date(); ?></h2>
			<?php echo get_the_post_thumbnail(); ?>
		</div>
		<div class=post-content>
		</div>
	<?php endwhile; else: ?>
<p><?php _e('POST NOT FOUND');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>