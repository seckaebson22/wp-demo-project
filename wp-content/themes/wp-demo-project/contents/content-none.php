<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage xtheme
 * @since xtheme 1.0
 */
;?>

<article id="not-found" class="article not-found error 404">

	<h1 class="entry-title"><?php echo get_page_title(); ?></h1>

	<div class="entry-content">
		<p><?php _e("It seems we can't find what you're looking for. Perhaps searching can help.", 'xtheme');?></p>
	</div>

</article>