<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(
        ' &hellip; <a href="%s">%s</a>',
        get_permalink(),
        __('Continued', 'hybrid-demo'),
    );
});

/**
 * Add "link" class to primary navigation menu links
 */
add_filter(
    'nav_menu_link_attributes',
    function ($atts, $item, $args) {
        if ($args->theme_location === 'primary_navigation') {
            $atts['class'] = empty($atts['class'])
                ? 'link'
                : $atts['class'] . ' link';
        }

        return $atts;
    },
    10,
    3,
);
