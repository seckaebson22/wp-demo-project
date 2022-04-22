<?php if (get_the_content()) : ?>
	<div class="section content">
		<div class="centering">
			<?php the_content(); ?>
		</div>
	</div>
<?php  endif; ?>
<?php get_template_part("components/page-builder"); ?>
