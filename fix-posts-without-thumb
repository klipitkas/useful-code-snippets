<?php

include 'wp-config.php';

$args = array(
    "post_type" => "post",
    "posts_per_page" => "-1"
);

$posts_list = get_posts( $args );

foreach($posts_list as $post) {

    if (! has_post_thumbnail( $post->ID ) ) {
        $media_id = 'your-post-media-attach-id-here';
        set_post_thumbnail( $post->ID, $media_id );
    }
}
