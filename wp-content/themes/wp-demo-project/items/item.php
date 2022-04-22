<div id="<?php echo get_post_type(); ?>-<?php echo get_the_ID(); ?>" <?php post_class('item'); ?> role="listitem">

	<div class="item-details">
		<div class="item-meta">
			<span class="date"><?php echo get_the_date(); ?></span>
		</div>

		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	</div>
</div>