<?php
/**
 * Calling functions using ajax on WordPress
 */
function ajax_func_name() {
    $data_array = array();
    echo json_encode($data_array);
    
    //this is needed in ajax requests. See more at https://codex.wordpress.org/AJAX_in_Plugins
    wp_die();
}

add_action( 'wp_ajax_ajax_func_name', 'ajax_func_name');

/* Public access */
add_action( 'wp_ajax_nopriv_ajax_func_name', 'ajax_func_name');
