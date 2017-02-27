<div id=sidebar>
<h2><?php _e('TYPES'); ?> </h2>
<ul>
	<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?> 
</ul>
<h2><?php _e('VINTAGE'); ?></h2>
<ul>
	<?php wp_get_archives('type=monthly');?>
</ul>
</div>