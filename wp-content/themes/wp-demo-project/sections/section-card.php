        <?php 
            $title = get_sub_field('card_title');
        ?>
        <section class="section grey-bg">
           <div class="centering">
                <?php if($title) : ?>
                <h2 class="section-title"><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if(have_rows('card_box')) : ?>
                <div class="grid justify-center">
                    <?php while(have_rows('card_box')) : the_row(); 
                        $image_id = get_sub_field('card_image');
                        $card_subtitle = get_sub_field('card_subtitle');
                        $card_excerpt = get_sub_field('card_excerpt');
                        $card_button = get_sub_field('card_button');
                    ?>
                    <div class="grid-xs-12 grid-s-6 grid-md-4">
                        <div class="item">
                            <div class="scale-image item-image">
                                <?php echo wp_get_attachment_image( $image_id, 'full'); ?>
                            </div>
                            <div class="item-content">
                                <?php if($card_subtitle) : ?>
                                    <h3 class="item-title h4"><?php echo $card_subtitle; ?></h3>
                                <?php endif; ?>
                                <?php if($card_excerpt) : ?>
                                <div class="item-excerpt">
                                    <?php echo $card_excerpt; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php if($card_button): ?>
                                <a href="<?php echo $card_button['url']; ?>" class="button item-button"><?php echo $card_button['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
           </div>
        </section>