<?php get_header(); ?>
<div id=main>
<div id=content>
<h2 style="width:70%;margin:auto;font-size:4em;text-align:center;color:pink;padding:15px 0 30px 0;">I WISH A NIGGA WOULD... BUT KODAK WOULD KILL ME</h2>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class=post_box>
			<a href="<?php echo get_post_permalink();?>"><?php echo get_the_post_thumbnail(); ?></a>
				<div class=post_content>
					<h2><a class=title_link href="<?php echo get_post_permalink();?>"><?php echo the_title(); ?></a></h2>
					<p class=thin-helv class=date style="font-style:italic;"><?php echo the_date(); ?> — <?php echo the_time(); ?></p>
					<p><?php echo the_excerpt();?></p>
					<p><a class="twitter-share-button"
						  href="https://twitter.com/share"
						  data-size="large"
						  data-text=""
						  data-url="<?php echo get_permalink(); ?>">Tweet
				 	</a></p>
				</div>
			</div>
	<?php endwhile; else: ?>
<p><?php _e('Sorry! We can\'t find that post :-(.');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>
