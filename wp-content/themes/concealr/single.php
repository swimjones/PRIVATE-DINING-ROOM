<?php get_header(); ?>
<div id=main>
<div id=content>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id=post_atf>
			<h1><?php the_title(); ?></h1>
			<br>
			<p class=atf_info class=thin-helv>Story by <?php the_author();?></p>
			<p class=atf_info class=thin-helv><?php the_date();?></p>
			<br><br>
			<?php echo the_excerpt();?>
			<br><br>
			<p><a href="#single_article">See full story</a></p>
			<br><br>
		</div>
	<?php endwhile; else: ?>
<p><?php _e('Sorry! We can\'t find that post :-(.');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>