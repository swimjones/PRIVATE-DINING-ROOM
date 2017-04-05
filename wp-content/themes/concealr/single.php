<?php get_header(); ?>
<div id=main>
<div id=content>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id=post_atf>
			<div id=atf_content>
				<h1><?php the_title(); ?></h1>
				<br>
				<p class=atf_info class=thin-helv>Story by <?php the_author();?></p>
				<p class=atf_info class=thin-helv><?php the_date();?></p>
				<br><br>
				<?php echo the_excerpt();?>
				<br><br>
				<p><a href="#single_article">Read more</a></p>
				<br><br>
			</div>
		</div>
		<div id=single_article>
			<?php the_content(); ?>
		</div>
		<div id=social_buttons>
			<div id=fb><img src="<?php echo get_stylesheet_directory_uri();?>/resources/svg/fb.svg"></div>
			<div id=twit><img src="<?php echo get_stylesheet_directory_uri();?>/resources/svg/twitter.svg"></div>
		</div>
	<?php endwhile; else: ?>
<p><?php _e('Sorry! We can\'t find that post :-(.');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>