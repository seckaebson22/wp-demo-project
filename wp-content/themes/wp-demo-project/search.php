<?php get_header(); ?>

	<h1 class="entry-title"><?php echo get_page_title(); ?></h1>
	<div class="posts-list" role="list">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'items/item', 'search' );
				endwhile;
			else :
				get_template_part( 'items/item-empty', 'search' );
			endif;
		?>
	</div>
	<?php get_template_part( 'components/pagination' ); ?>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>