        <section class="section hero">
            <?php if(have_rows('banner')) : ?>
                <div class="slideshow banner">
                    <?php while(have_rows('banner')) : the_row(); 
                        $image_id = get_sub_field('background_image'); 
                        $title = get_sub_field('title');
                        $excerpt = get_sub_field('excerpt');
                        $image_id = get_sub_field('background_image');
                        $button = get_sub_field('button');
                        $button_alt = get_sub_field('button_alt');
                    ?>
                    <div class="slideshow-slide">
                        <div class="scale-image">
                            <?php echo wp_get_attachment_image( $image_id, 'full'); ?>
                        </div>
                        <div class="centering">
                            <div class="slide-content">
                                <?php if($title) : ?>
                                    <h1 class="h2"><?php echo $title; ?></h1>
                                <?php endif; ?>
                                 <?php if($excerpt) : ?>
                                    <div class="content">
                                        <?php echo $excerpt; ?>
                                    </div>
                                 <?php endif; ?>
                                <div class="button-group">
                                    <a href="<?php echo $button['url']; ?>" class="button"><?php echo $button['title']; ?></a>
                                    <a href="<?php echo $button_alt['url']; ?>" class="button button-transparent"><?php echo $button_alt['title']; ?></a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </section>