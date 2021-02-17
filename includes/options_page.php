<?php

add_action('acf/init', 'ifx_acf_op_init');
function ifx_acf_op_init() {
    // Check function exists.
    if( function_exists('acf_add_options_page') ) {
        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Market Report Settings'),
        ));
    }
}