<?php 

function remove_unnecessary_links() {
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

function disable_gutenberg_styles() {
  wp_dequeue_style( 'global-styles' );
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'classic-theme-styles' );
}

add_action( 'wp_enqueue_scripts', 'disable_gutenberg_styles', 100 );

function remove_other_unnecessary_styles() {
  wp_dequeue_style( 'cdp-css-global-css' );
  wp_dequeue_style( 'cdp-css-css' );
  wp_dequeue_style( 'cdp-css-user-css' );
  wp_dequeue_style( 'cdp-tooltips-css-css' );
  wp_dequeue_style( 'cdp-css-select-css' );
}

add_action( 'wp_enqueue_scripts', 'remove_other_unnecessary_styles' );

remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );

add_filter( 'emoji_svg_url', '__return_false' );

function remove_wp_emoji_settings() {
  remove_action( 'wp_head', 'wp_resource_hints', 2 );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'emoji_svg_url', '__return_false' );
}

add_action( 'init', 'remove_wp_emoji_settings' );

function remove_cdp_meta_tag() {
  ob_start();
}

add_action('wp_head', 'remove_cdp_meta_tag', 1);

function remove_cdp_meta_tag_end() {
  $html = ob_get_contents();
  $html = str_replace('<meta name="cdp-version" content="1.4.9" />', '', $html);
  ob_end_clean();
  echo $html;
}

add_action('wp_head', 'remove_cdp_meta_tag_end', 100);

function remove_rss_link() {
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
}

add_action('init', 'remove_rss_link');

function remove_rss_link_end() {
  $html = ob_get_contents();
  $html = str_replace('<link rel="alternate" type="application/rss+xml" title="Николо-Богоявленский морской собор &raquo; Лента рубрики Новости" href="http://sobor.loc/./events/news/feed/" />', '', $html);
  ob_end_clean();
  echo $html;
}

add_action('wp_head', 'remove_rss_link_end', 100);

include_once 'plugins/admin_menu.php';

include_once 'plugins/title_header.php';

include_once 'section/block/gallery/gallery.php';

include_once 'section/block/breadcrumbs.php';

include_once 'section/block/pagination.php';