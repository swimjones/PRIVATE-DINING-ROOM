<?php get_header(); ?>
<div id=main>
<div id=content>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id=post_atf>
			<div id=atf_content>
				<h1><?php the_title(); ?></h1>
				<p><?php echo the_excerpt();?></p>
				<p>Story by <?php the_author();?><br><?php the_date();?></p>
				<p><a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-show-count="false">Tweet</a></p>
			</div>
		</div>
		<div id=single_article>
			<?php the_content(); ?>
		</div>
	<?php endwhile; else: ?>
<p><?php _e('POST NOT FOUND');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>