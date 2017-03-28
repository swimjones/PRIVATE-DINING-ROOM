<?php get_header(); ?>
<div id=main>
<div id=content>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry! We can\'t find that post :-(.');?></p><?php endif; ?>
</div> <!-- #content end -->
</div> <!-- #main end -->
<?php get_footer();?>
