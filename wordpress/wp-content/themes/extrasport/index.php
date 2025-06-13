<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= title_header() ?> | <?=  get_bloginfo( 'name' );?></title>

    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/favicon/site.webmanifest">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Core theme CSS -->
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/legacy.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/carousel.css" rel="stylesheet">

    <?php wp_head();
  
    if (is_page('front-clubs')) { ?>
        <style>
        .main video {
            z-index: -1;
            position: fixed;
        }

        header .masthead {
            position: relative;
        }
    </style>
    <?php } else { ?>
            <link href="<?php bloginfo('template_url'); ?>/assets/css/club.css" rel="stylesheet">
     <style>
       
    </style>
    <?php }?>

</head>

<body id="page-top">

        <?php  // Front page
            if (is_front_page())  {
                get_template_part('page/front');
            }
            
            elseif (is_page('front-clubs')) {
                get_template_part('page/front-clubs');
            }

            elseif (is_category( 'events' )) {
                get_template_part('section/news');
            } elseif (is_category('news')) {
                get_template_part('page/list');
            } elseif (is_category('anonses')) {
                get_template_part('page/col');
            }
            elseif ( in_category( 'news' ) || in_category('anonses')) {
                get_template_part('page/list_single');
            } 

            elseif (is_category( 'about' )) {
                get_template_part('page/about');
            } elseif (is_category( 'gallery' )) {
                get_template_part('page/col');
            } 
            
             elseif (is_page()) {
                get_template_part('page/page_single');
            } 

            elseif (is_single()) {
                get_template_part('page/post_single');
            } 
            
            elseif (is_category( )) {
                get_template_part('page/post_list');
            }

            elseif( is_404() ){
                get_template_part('page/not_found');
            }
         ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

     <script src="https://extrasport.ru/js/app.js"></script>
    
    <script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/assets/js/<?php if (is_page('front-clubs')) {  
            echo'carousel-main.js';} else {echo'carousel.js';}?>"></script>

    <script src="<?php bloginfo('template_url'); ?>/assets/js/scroll.js"></script>
    <?php wp_footer(); ?>

</body>

</html>