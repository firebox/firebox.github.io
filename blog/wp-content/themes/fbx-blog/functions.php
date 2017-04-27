<?php

/*  Register Scripts and Style */

function theme_register_scripts() {
    wp_enqueue_style( 'olympos-css', get_stylesheet_uri() );
    wp_enqueue_script( 'olympos-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'js/olympos.min.js' ), array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );


/* Add menu support */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/* Add post image support */
add_theme_support( 'post-thumbnails' );


/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
    //add_image_size( 'custom-image-size', 500, 500, true );
}

/* Add widget support */
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name'          => 'SidebarOne',
        'id'            => 'SidebarOne',
	    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name'          => 'SidebarTwo',
        'id'            => 'SidebarTwo',
	    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));


/*  EXCERPT
    Usage:

    <?php echo excerpt(100); ?>
*/

// Make sure featured images are enabled

// Add other useful image sizes for use through Add Media modal
add_image_size( 'full-width', 750 );
add_image_size( 'medium-width', 600 );
add_image_size( 'small-width', 450 );

function wpshout_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'full-width' => __( 'Full width' ),
        'medium-width' => __( '80% width' ),
        'small-width' => __( '60% width' ),
    ) );
}

add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
add_filter( 'use_default_gallery_style', '__return_false' );

function image_size($atts) {
    $a = shortcode_atts($atts);
    return "<img src='{$a['src']}' title='{$a['title']}' alt='{$a['alt']}' width='{$a['width']}%' class='single-post__image-size'>";

}

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}
