<?php
// Pagination function
function havoc_pagination() {
    the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => __('« Previous', 'havoc'),
        'next_text' => __('Next »', 'havoc'),
    ));
}
?>