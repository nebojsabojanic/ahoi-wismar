<?php

/**
* Enqueue stylesheet
*
* Uses the modification timestamp of the style.css file
*/
// function sd_assets() {

//     wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
//     //wp_enqueue_script('themejs', get_template_directory_uri() . '/js/app.js', array('jquery'),'0', true );

// }
// add_action( 'wp_enqueue_scripts', 'sd_assets' );


/**
* Disable Gutenberg Editor
*/
add_filter('use_block_editor_for_post', '__return_false', 10);



/**
* Remove Gutenberg Block Library CSS from loading on the frontend
*
*/

function sd_remove_wp_block_library_css(){
wp_dequeue_style( 'wp-block-library' );
wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'sd_remove_wp_block_library_css' );


/**
* Wordrpress Titles
*/
function sd_wp_title( $title, $sep ) {
    global $paged, $page;
    if ( is_feed() ) {
        return $title;
    } 
    // Add the site name.
    $title .= get_bloginfo( 'name' );
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title = "$title $sep $site_description";
    }
    return $title;
} 
add_filter( 'wp_title', 'sd_wp_title', 10, 2 );


/**
* Remove all dashboard widgets
*/

function remove_dashboard_widgets() {
    global $wp_meta_boxes;

    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );

    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );

/**
* Remove unnecessary header information
*/

function remove_header_info() {
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head',10,0); // for WordPress >= 3.0
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
}
add_action('init', 'remove_header_info');

/**
* Disable the emoji's
*/
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );	
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );


    // Remove from TinyMCE
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
* Filter out the tinymce emoji plugin.
*/
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}



/**
* Modify admin footer text
* Who created theme
*/
function modify_footer() {
    echo '<p>HANDCRAFTED by <a target="_blank" href="http://mediavuk.com">Mediavuk D.O.O.</a></p>';
}
add_filter( 'admin_footer_text', 'modify_footer' );



/**
* Support featured images
*/
add_theme_support( 'post-thumbnails' );



/**
* Create custom thumbnail size
*/
add_image_size( 'pv-thumbnail', 390, 250, true );
add_image_size( 'single-blog-thumbnail',900, 600, true );

/**
* Add new user profile fields
*
*/
if ( ! function_exists( 'sd_contact_methods' ) ) :

function sd_contact_methods( $contactmethods ) {
    $contactmethods['linkedin'] = __( 'Linked In' );

    // optional fields
    // $contactmethods['youtube'] = __( 'YouTube' );
    // $contactmethods['instagram'] = __( 'Instagram' );

    return $contactmethods;
}
add_filter('user_contactmethods','sd_contact_methods', 10, 1);

endif;

    
/**
 * Remove Contact 7 Form style from other pages
 *
 */

add_action( 'wp_print_scripts', 'deregister_cf7_javascript', 100 );
        function deregister_cf7_javascript() {
        if ( !is_page(array(7)) ) {
            wp_deregister_script( 'contact-form-7' );
        }
    }
    add_action( 'wp_print_styles', 'deregister_cf7_styles', 100 );
    function deregister_cf7_styles() {
        if ( !is_page(array(7)) ) {
            wp_deregister_style( 'contact-form-7' );
        }
    }


/**
 * Add Custom Class Contact 7 Form
 */


add_filter( 'wpcf7_form_class_attr', 'custom_custom_form_class_attr' );

function custom_custom_form_class_attr( $class ) {
    $class .= ' form form-default';
    return $class;
}

/**
 * Clean Wordpress Header
 */

function sd_remove_version() {
    return '';
}
add_filter('the_generator', 'sd_remove_version');
 
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
 
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
 
function sd_cleanup_query_string( $src ) { 
    $parts = explode( '?', $src ); 
    return $parts[0]; 
} 
add_filter( 'script_loader_src', 'sd_cleanup_query_string', 15, 1 ); 
add_filter( 'style_loader_src', 'sd_cleanup_query_string', 15, 1 );


function disable_embed() {
    wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'disable_embed' );


/**
 *  Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');


/**
 *  Disable Jquery Migrate
 */
function deregister_jquery() { 
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
    }
} 
add_action('wp_enqueue_scripts', 'deregister_jquery');

    
/**
 *  Disable Dashicons on Front-end
 */

function wpdocs_dequeue_dashicon() {
    if (current_user_can( 'update_core' )) {
        return;
    }
    wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );
