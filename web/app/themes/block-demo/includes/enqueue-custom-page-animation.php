<?php

namespace BlockDemo;

function enqueue_custom_page_animation()
{
    if (is_single('custom-page')) {
        wp_enqueue_script('custom-page-animation', get_template_directory_uri() . '/assets/js/custom-page-animation.js', array('gsap'), false, true);
    }
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_custom_page_animation');
