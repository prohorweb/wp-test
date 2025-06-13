<?php 

// admin_init action works better than admin_menu in modern wordpress (at least v5+)
add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {

  global $user_ID;

   remove_menu_page('index.php'); // Dashboard
   remove_menu_page('link-manager.php'); // Links
   remove_menu_page('edit-comments.php'); // Comments
   remove_menu_page('users.php'); // Users
   remove_menu_page('tools.php'); // Tools
   remove_menu_page('edit.php?post_type=pgc_simply_gallery'); // Gallery
  
}

function redirect_admin_index() {
    if ($_SERVER['PHP_SELF'] == '/wp-admin/index.php') {
        wp_redirect(admin_url('edit.php'));
        exit;
    }
}

add_action('admin_init', 'redirect_admin_index');

add_theme_support('post-thumbnails');
