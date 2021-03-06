        <?php 
            $excerpt = get_field('excerpt', 'option');
            $content = get_field("content", 'option');
			
        ?>
	    <div class="top-footer">
            <div class="centering">
                <div class="grid">
                    <div class="grid-xs-12 grid-m-4">
                        <div class="footer-logo">
                            <a href="<?php echo site_url(); ?>" title="Back to Homepage">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo.png" alt="Logo" 
                                onerror="this.onerror=null; this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo.png'" alt="<?php bloginfo('name'); ?>" aria-label="<?php echo get_bloginfo('name'); ?> Logo"
                                    aria-label="Xanda Logo" />
						    </a>
                        </div>
                        <?php if($excerpt) : ?>
                            <div class="section-content">
                                <?php echo $excerpt; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="grid-xs-12 grid-m-3">
                        <h3 class="footer-title">contact us</h3>
                        <?php if(have_rows('contact_details', 'option')) : ?>
                        <div class="section-content">
                            <?php while(have_rows('contact_details', 'option')) : the_row();
                                $address_title = get_sub_field('address_title', 'option');
                                $address_excerpt = get_sub_field('address_excerpt', 'option');
                            ?>  
                                <address class="address">
                                    <?php if($address_title) : ?>
                                        <h5 class="address-title"><?php echo $address_title; ?></h5>
                                    <?php endif; ?>
                                    <?php if($address_excerpt) : ?>
                                        <?php echo $address_excerpt; ?>
                                    <?php endif; ?>
                                </address>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <?php get_template_part('components/bookmarks'); ?>
                    </div>
                    <div class="grid-xs-12 grid-m-5">
                        <h3 class="footer-title">message us</h3>
                        <?php if($content) : ?>
                            <?php echo $content; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="centering">
                <div class="footer-credits">
                    <div class="smallprint">
                        <span>&copy; Company Name <?php echo date('Y'); ?>. All rights reserved.</span>
                    </div>

                    <div class="designbyxanda">
                        <a title="Xanda Ltd" href="http://www.xanda.net" target="_blank">Web Design by <span
                                class="screen-reader-text">Xanda Ltd</span>
                            <svg height="20" viewbox="0 0 120 45.974" width="51" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M27.506 45.394h-5.44l-6.135-9.622L9.8 45.394h-5.44l9.112-12.808-8.39-11.853h5.437l5.416 8.623 5.417-8.623h5.437l-8.39 11.808zm16.557-2.533c-2.23 2.08-5.105 3.117-8.624 3.117-2.45 0-4.466-.662-6.047-1.987-1.58-1.325-2.37-3.033-2.37-5.126 0-5.764 4.965-8.646 14.897-8.646h2.14c0-1.767-.092-3.048-.28-3.847-.185-.8-.704-1.46-1.557-1.986-.85-.526-2.208-.79-4.066-.79-3.906 0-5.92 1.394-6.044 4.184h-4.37c.325-5.067 3.874-7.6 10.645-7.6 3.162 0 5.625.626 7.39 1.882 1.768 1.253 2.65 3.717 2.65 7.39v15.944h-4.37V42.86zm0-3.95v-5.46h-2.998c-6.354 0-9.53 1.73-9.53 5.185 0 1.256.465 2.22 1.395 2.895.93.674 2.186 1.01 3.765 1.01 1.44 0 2.835-.325 4.184-.976 1.344-.652 2.405-1.535 3.18-2.65m12.63-15.04c2.185-2.462 4.64-3.694 7.37-3.694 5.562 0 8.344 3.03 8.344 9.088v16.13H68.01V29.45c0-2.015-.36-3.463-1.08-4.348-.72-.882-1.9-1.324-3.545-1.324-2.23 0-4.462 1.317-6.693 3.95v17.666H52.3v-24.66h4.393v3.137zM91.77 42.446c-1.952 2.355-4.3 3.532-7.043 3.532-3.223 0-5.718-1.146-7.484-3.44-1.767-2.292-2.648-5.384-2.648-9.273 0-4.027.985-7.215 2.96-9.562 1.977-2.347 4.46-3.52 7.45-3.52 2.665 0 4.92.82 6.764 2.463V11.32h4.37v34.074h-4.37v-2.952zm0-4.137V26.59c-1.89-2-4.053-3-6.485-3-1.876 0-3.375.81-4.498 2.43-1.125 1.62-1.686 4.033-1.686 7.24 0 3.037.53 5.342 1.592 6.914 1.06 1.574 2.53 2.36 4.402 2.36 2.45 0 4.67-1.41 6.67-4.23m23.856 4.557c-2.23 2.08-5.106 3.117-8.624 3.117-2.45 0-4.463-.662-6.043-1.987-1.58-1.325-2.37-3.033-2.37-5.126 0-5.764 4.964-8.646 14.897-8.646h2.14c0-1.767-.094-3.048-.28-3.847-.186-.8-.705-1.46-1.56-1.986-.85-.526-2.205-.79-4.065-.79-3.905 0-5.92 1.394-6.044 4.184h-4.37c.325-5.067 3.874-7.6 10.645-7.6 3.16 0 5.624.626 7.39 1.882 1.768 1.253 2.65 3.717 2.65 7.39v15.944h-4.37V42.86zm0-3.95v-5.46h-3c-6.353 0-9.53 1.73-9.53 5.185 0 1.256.467 2.22 1.396 2.895.93.674 2.186 1.01 3.766 1.01 1.44 0 2.836-.325 4.184-.976 1.346-.652 2.408-1.535 3.183-2.65"
                                    fill="#fff"></path>
                                <path
                                    d="M0 18.192S19.18 4.214 34.71 4.214c15.528 0 15.465 8.06 32.692 8.06 0 0 10.146-.097 22.122-12.274 0 0-10.717 13.408-24.464 13.408-13.746 0-17.084-7.41-30.435-7.41C21.275 5.998 4.523 15.51 0 18.19"
                                    fill="#7AAEDD"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>