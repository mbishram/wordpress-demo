<?php

namespace BlockDemo;

function enqueue_gsap()
{
    wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js', array(), false, true);
    wp_enqueue_script('gsap-scroll-trigger', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js', array('gsap'), false, true);
    wp_enqueue_script('gsap-split-text', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/SplitText.min.js', array('gsap'), false, true);
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_gsap');
