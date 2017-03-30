<?php get_header(); ?>
<div id=main>
<div id=content>
<div id=post_block>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php echo get_the_post_thumbnail(); ?>
			<h2><?php echo the_title(); ?></h2>
	<?php endwhile; else: ?>
</div>
<p><?php _e('Sorry! We can\'t find that post :-(.');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>
