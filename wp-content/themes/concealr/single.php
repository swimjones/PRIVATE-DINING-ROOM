<?php get_header(); ?>
<div id=main>
<div id=content>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id=post_atf>
			<div id=atf_content>
				<h1><?php the_title(); ?></h1>
				<br><br>
				<p id=excpt><?php echo the_excerpt();?></p>
				<br><br>
				<p style="font-size:.80em">Story by <?php the_author();?><br>Photography by <?php the_meta(); ?><br><br><?php the_date();?></p>
				<br><br>
				<a href="#single_article"><h2 id=readmore>See full story</h2></a>
				<br><br>
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