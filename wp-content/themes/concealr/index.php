<?php get_header(); ?>
<div id=main>
<div id=content>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class=content_block>
			<a href="http://privatediningroom/<?php echo get_post_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<div id=index_info>
				<h3 class=index_category></h3>
				<h2 class=index_title>
					<a href="http://privatediningroom/<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<p class=index_excerpt><?php the_excerpt(); ?></p>
				<button class=read_more>
					<a href="http://privatediningroom/<?php echo get_post_permalink(); ?>">Read more</a>
				</button>
			</div> <!-- .index_info end -->
		</div> <!-- .feat_img end -->
		<br><br>
<?php endwhile; else: ?>
<p><?php _e('Sorry! We can\'t find that post :-(.');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>
