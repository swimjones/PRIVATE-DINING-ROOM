<?php get_header(); ?>
<div id=main>
<div id=content>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class=post-atf>
			<h1 id="post-title"><?php the_title(); ?></h1>
			<h3><?php the_excerpt(); ?></h3>
			<h4>Story by <?php the_author(); ?></h4>
			<h4>Photography by <?php the_meta(); ?></h4>
			<h2>Published <?php the_date(); ?></h2>
		</div>
		<?php the_post_thumbnail(); ?>
		<div class=single-article>
			<?php the_content(); ?>
			<div class=article-catch>
				<h2>Love this story?</h2>
				<h2>So will your friends.</h2>
					<div>
						<a>
							<img src="<?php echo get_stylesheet_directory_uri();?>/resources/fb.png">
						</a>
						<a class=twitter-share-button href="https://twitter.com/share" data-url="<?php echo get_permalink();?>">
								<script async src="<?php echo get_stylesheet_directory_uri();?>/js/twitter.js" charset="utf-8"></script>
							<img src="<?php echo get_stylesheet_directory_uri();?>/resources/twitter.png">
						</a>
					</div>
			</div>	
		</div>
	<?php endwhile; else: ?>
<p><?php _e('POST NOT FOUND');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<!--<a href="https://twitter.com/share" class="twitter-share-button" data-text="title" data-url="https://me.com/" data-via="swimjones" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>-->