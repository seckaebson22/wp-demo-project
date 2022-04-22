<?php 
    $bookmarks = get_bookmarks(
        array(
            'orderby' =>'rating',
            'order' => 'ASC',
        )
    );

if(!empty($bookmarks) ) : ?>
    <div class="widgets">
        <ul class="menu menu-social">
            <?php foreach($bookmarks as $bookmark) : ?>
                <li class="menu-item"><a class="icon-social" href="<?php echo $bookmark->link_url; ?>" target="<?php echo $bookmark->link_target; ?>"></a>
                <!-- <span class="srceen-reader-text"><?php echo $bookmark->link_name; ?> Icon</span> //This will basically print the social name -->
            </li>    
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>