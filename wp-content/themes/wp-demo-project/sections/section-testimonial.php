    <?php 
        $title = get_sub_field('title');
    ?>
    <section class="section">
            <div class="centering">
                <?php if($title) : ?>
                    <h2 class="section-title"><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if(have_rows('testimonial_loop')): ?>
                    <div class="grid stretch slideshow multi-slide">
                        <?php while(have_rows('testimonial_loop')) : the_row();
                            $image_id = get_sub_field('image');
                            $subtitle = get_sub_field('subtitle');
                            $excerpt = get_sub_field('excerpt');
                            $button = get_sub_field('button');
                        ?>
                            <div class="grid-xs-12 grid-s-6 grid-m-4 slideshow-slide">
                                <div class="item item-readmore">
                                    <div class="scale-image item-image">
                                        <?php echo wp_get_attachment_image( $image_id, 'full'); ?>
                                    </div>
                                    <div class="item-content">
                                        <?php if($subtitle) : ?>
                                            <h3 class="item-title h4"><?php echo $subtitle; ?></h3>
                                        <?php endif; ?>
                                        <?php if($excerpt) : ?>
                                            <div class="item-excerpt">
                                                <?php echo $excerpt; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php if($button) : ?>
                                        <a href="<?php echo $button['url']; ?>" class="button item-button"><?php echo $button['title']; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>