<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Post;
use WP_Comment;

class Sidebar extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = ['sections.sidebar'];

    /**
     * Retrieve `$max_count` number of recent posts
     *
     * @param int $max_count
     *
     * @return WP_Post[]
     */
    public function recent_posts(int $max_count = 3): array
    {
        return get_posts(['numberposts' => $max_count]);
    }

    /**
     * Retrieve `$max_count` number of recent posts
     *
     * @param int $max_count
     *
     * @return WP_Comment[]
     */
    public function recent_comments(int $max_count = 3): array
    {
        return get_comments(['number' => $max_count]);
    }
}
