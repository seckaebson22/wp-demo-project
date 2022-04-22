<?php 
    $image_id = get_sub_field('image');
    $title = get_sub_field('title');
?>
<section class="section image-text">

        <div class="section-image">
            <?php if($image_id) : ?>
                <div class="scale-image">
                    <?php echo wp_get_attachment_image( $image_id, 'full'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="centering">
            <div class="section-content">
                <?php if($title) : ?>
                    <h2 class="section-title"><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if(have_rows('button_group')) : ?>
                    <div class="section-button button-group">
                        <?php while(have_rows('button_group')) : the_row();
                            $button = get_sub_field('button');
                        ?>
                        <a href="<?php echo $button['url']; ?>" class="button button-secondary"><?php echo $button['title']; ?></a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
</section>