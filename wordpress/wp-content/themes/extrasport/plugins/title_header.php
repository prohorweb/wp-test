<?php 
function title_header() {
    if (is_home()) {
        bloginfo('description');
    } elseif (is_category()) {
        single_cat_title();
        bloginfo('description');
    } elseif (is_single()) {
        single_post_title();
    } elseif (is_page()) {
        bloginfo('description');
        single_post_title();
    } else {
        wp_title('', true);
    }
}
add_action('init', 'title_header');