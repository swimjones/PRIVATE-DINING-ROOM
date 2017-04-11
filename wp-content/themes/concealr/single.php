<?php get_header(); ?>
<div id=main>
<div id=content>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id=post_atf>
			<div id=atf_content>
				<h1><?php the_title(); ?></h1>
				<br><br>
				<p class=thin-helv>Story by <?php the_author();?></p>
				<p class=thin-helv><?php the_date();?></p>
				<br><br>
				<?php echo the_excerpt();?>
				<br><br>
				<p><a id=readmore href="#single_article">See full story</a></p>
				<br><br>
				<p><a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-show-count="false">Tweet</a></p>
				<br><br>
			</div>
		</div>
		<div id=single_article>
			<?php the_content(); ?>
		</div>
	<?php endwhile; else: ?>
<p><?php _e('Sorry! We can\'t find that post :-(.');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>