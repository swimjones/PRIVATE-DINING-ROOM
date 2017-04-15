<?php get_header(); ?>
<div id=main>
<div id=content>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id=post_atf>
			<h1><?php the_title(); ?></h1>
			<br><br>
			<p id=excpt><?php echo the_excerpt();?></p>
			<br><br>
			<p style="font-size:.80em">Story by <?php the_author();?><br>Photography by <?php the_meta(); ?></p>
			<br><br>
			<a href="#single_article"><h2 id=readmore>&#8595;</h2></a>
			<br><br>
		</div>
		<div id=single_article>
			<?php the_content(); ?>
			<p style="margin-top:20px;"><a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-show-count="false">Tweet</a></p>
		</div>
	<?php endwhile; else: ?>
<p><?php _e('POST NOT FOUND');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>