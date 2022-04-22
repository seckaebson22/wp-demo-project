<?php 

if( have_rows('sections')) :
    while( have_rows('sections')) : the_row();

        $layout = get_row_layout();
        get_template_part('sections/section', $layout);
    endwhile;
endif;

?>