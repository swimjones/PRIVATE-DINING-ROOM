<?php get_header(); ?>
<div id=main>
<div id=content>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--<h2><?php the_title(); ?></h2>
  <h4><?php the_time(F, js, Y) ?></h4> -->
  <p><?php the_content(__('more...')); ?></p>
  <hr> <?php endwhile; else: ?>
  <p><?php _e('WE CAN\'T FIND THAT POST.');?></p><?php endif; ?>
</div>
</div>
<div id=delimiter></div>
<?php get_footer();?>