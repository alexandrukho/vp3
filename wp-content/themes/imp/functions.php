<?php

add_theme_support('menus');

//COUNTER
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//END COUNTER
//avatar
add_filter( 'avatar_defaults', 'add_default_avatar_option' );

function add_default_avatar_option( $avatars ){
    $url = get_stylesheet_directory_uri() . '/images/lol.jpg';
    $avatars[ $url ] = 'Аватар сайта';
    return $avatars;
}
//end avatar

function getPostImage()
{
    $url = get_the_post_thumbnail_url();
    if (!empty($url)) {
        return $url;
    } else {
        return bloginfo("template_url") . "/images/pic01.jpg";
    }
}

function custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
    return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');






// Register Custom Post Type
function partnerposttype() {

$labels = array(
'name'                  => _x( 'Партнёры', 'Post Type General Name', 'text_domain' ),
'singular_name'         => _x( 'Партнёр', 'Post Type Singular Name', 'text_domain' ),
'menu_name'             => __( 'Партнёры', 'text_domain' ),
'name_admin_bar'        => __( 'Партнёры', 'text_domain' ),
'archives'              => __( 'Item Archives', 'text_domain' ),
'attributes'            => __( 'Item Attributes', 'text_domain' ),
'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
'all_items'             => __( 'All Items', 'text_domain' ),
'add_new_item'          => __( 'Add New Item', 'text_domain' ),
'add_new'               => __( 'Add New', 'text_domain' ),
'new_item'              => __( 'New Item', 'text_domain' ),
'edit_item'             => __( 'Edit Item', 'text_domain' ),
'update_item'           => __( 'Update Item', 'text_domain' ),
'view_item'             => __( 'View Item', 'text_domain' ),
'view_items'            => __( 'View Items', 'text_domain' ),
'search_items'          => __( 'Search Item', 'text_domain' ),
'not_found'             => __( 'Not found', 'text_domain' ),
'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
'featured_image'        => __( 'Featured Image', 'text_domain' ),
'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
'items_list'            => __( 'Items list', 'text_domain' ),
'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
);
$args = array(
'label'                 => __( 'Партнёр', 'text_domain' ),
'description'           => __( 'Post Type Description', 'text_domain' ),
'labels'                => $labels,
'supports'              => array( 'title', 'editor' ),
'taxonomies'            => array( 'category', 'post_tag' ),
'hierarchical'          => false,
'public'                => true,
'show_ui'               => true,
'show_in_menu'          => true,
'menu_position'         => 5,
'show_in_admin_bar'     => true,
'show_in_nav_menus'     => true,
'can_export'            => true,
'has_archive'           => true,
'exclude_from_search'   => false,
'publicly_queryable'    => true,
'capability_type'       => 'page',
);
register_post_type( 'partner', $args );

}
add_action( 'init', 'partnerposttype', 0 );