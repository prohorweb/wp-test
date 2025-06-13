
<?php 

/**
 * Remove unnecessary links and styles from the WordPress header
 */

function remove_unnecessary_links() {
  // Remove links from the WordPress header
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'index_rel_link' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head' );
  remove_action( 'wp_head', 'parent_post_rel_link' );
  remove_action( 'wp_head', 'start_post_rel_link' );
  remove_action( 'wp_head', 'adjacent_posts_rel_link' );
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'feed_links_extra' );
  remove_action( 'wp_head', 'rest_output_link_wp_head' );
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
  remove_action( 'template_redirect', 'rest_output_link_header' );
  remove_action( 'wp_head', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'rel_canonical' );
}

add_action( 'init', 'remove_unnecessary_links' );

/**
 * Disable Gutenberg styles in the header
 */

function disable_gutenberg_styles() {
  // Disable Gutenberg styles in the header
  wp_dequeue_style( 'global-styles' );
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'classic-theme-styles' );
}

add_action( 'wp_enqueue_scripts', 'disable_gutenberg_styles', 100 );

/**
 * Remove other unnecessary styles and filters
 */

function remove_other_unnecessary_styles() {
  // Remove other unnecessary styles
  wp_dequeue_style( 'cdp-css-global-css' );
  wp_dequeue_style( 'cdp-css-css' );
  wp_dequeue_style( 'cdp-css-user-css' );
  wp_dequeue_style( 'cdp-tooltips-css-css' );
  wp_dequeue_style( 'cdp-css-select-css' );
}

add_action( 'wp_enqueue_scripts', 'remove_other_unnecessary_styles' );

/**
 * Remove filter for max image preview large
 */

remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );

/**
 * Disable emoji SVG URL
 */

add_filter( 'emoji_svg_url', '__return_false' );