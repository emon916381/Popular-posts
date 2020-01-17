<?php

/*
 * Set post views count using post meta
 * 
 * @ This code have to paste your #functions.php file
 * 
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
    return $count;
}
/* This hook use to remove unnecessery views count */
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
