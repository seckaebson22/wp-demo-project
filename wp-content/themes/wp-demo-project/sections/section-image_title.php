<?php 
    $title = get_sub_field('title');
?>
<section class="section">
    <div class="centering">
        <?php if($title) : ?>
            <h2 class="section-title"><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if(have_rows('image_loop')) : ?>
        <div class="grid justify-center">
            <?php while(have_rows('image_loop')) : the_row();
                $image_id = get_sub_field('image');
                $title = get_sub_field('title');
            ?>
                <div class="grid-xs-12 grid-s-3 grid-md-3">
                    <div class="item item-flag">
                        <?php if($image_id) : ?>
                            <div class="item-image">
                                <?php echo wp_get_attachment_image( $image_id, 'full'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="item-content">
                            <?php if($title) : ?>
                                <h3 class="item-title h4"><?php echo $title; ?></h3>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>