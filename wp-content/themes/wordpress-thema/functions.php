<?php

register_nav_menus(array(
    'primary' => __( 'Primary Menu',    'twentyfitheen' ),
    'social' => __( 'Social links menu',    'twentyfitheen' ),
));

function theme_styles()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

register_sidebar( array(
    'name' => 'Footer Area 1',
    'id' => 'footer-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => 'Footer Area 2',
    'id' => 'footer-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => 'Footer Area 3',
    'id' => 'footer-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => 'Footer Area 4',
    'id' => 'footer-4',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

function theme_social_menu() {
    if (has_nav_menu('social')) {
        wp_nav_menu(
            array(
                'theme_location' => 'social',
                'container' => 'div',
                'container_class' => 'theme-social-menu',
                'depth' => 1, // No need to allow sub-menu for social icons
                'menu_class' => 'menu-social',
                'fallback_cb' => false, // No fallback setting
                'link_before' => '<span class="screen-reader-text">', // Hide the social links text
                'link_after' => '</span>', // Hide the social links text
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            )
        );
    }
}

add_filter( 'wp_nav_menu_secondary_items','wpsites_loginout_menu_link' );

function wpsites_loginout_menu_link( $menu ) {
    $loginout = wp_loginout($_SERVER['REQUEST_URI'], false );
    $menu .= $loginout;
    return $menu;
}

