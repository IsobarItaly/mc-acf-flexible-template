<?php
/*
* Register CPT 
*/
defined( 'ABSPATH' ) or die( 'Cheatin&#8217; uh?' );

// Register Custom Post Type
function mc_acf_ft_register_cpt() {

    $labels = array(
        'name'                  => _x( 'ACF Templates', 'Post Type General Name', 'mc-acf-ft-template' ),
        'singular_name'         => _x( 'ACF Template', 'Post Type Singular Name', 'mc-acf-ft-template' ),
        'menu_name'             => __( 'ACF Templates', 'mc-acf-ft-template' ),
        'name_admin_bar'        => __( 'ACF Template', 'mc-acf-ft-template' ),
        'archives'              => __( 'ACF Template Archives', 'mc-acf-ft-template' ),
        'attributes'            => __( 'ACF Template Attributes', 'mc-acf-ft-template' ),
        'parent_item_colon'     => __( 'Parent Item:', 'mc-acf-ft-template' ),
        'all_items'             => __( 'All Items', 'mc-acf-ft-template' ),
        'add_new_item'          => __( 'Add New Item', 'mc-acf-ft-template' ),
        'add_new'               => __( 'Add New', 'mc-acf-ft-template' ),
        'new_item'              => __( 'New Item', 'mc-acf-ft-template' ),
        'edit_item'             => __( 'Edit Item', 'mc-acf-ft-template' ),
        'update_item'           => __( 'Update Item', 'mc-acf-ft-template' ),
        'view_item'             => __( 'View Item', 'mc-acf-ft-template' ),
        'view_items'            => __( 'View Items', 'mc-acf-ft-template' ),
        'search_items'          => __( 'Search Item', 'mc-acf-ft-template' ),
        'not_found'             => __( 'Not found', 'mc-acf-ft-template' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'mc-acf-ft-template' ),
        'featured_image'        => __( 'Featured Image', 'mc-acf-ft-template' ),
        'set_featured_image'    => __( 'Set featured image', 'mc-acf-ft-template' ),
        'remove_featured_image' => __( 'Remove featured image', 'mc-acf-ft-template' ),
        'use_featured_image'    => __( 'Use as featured image', 'mc-acf-ft-template' ),
        'insert_into_item'      => __( 'Insert into item', 'mc-acf-ft-template' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'mc-acf-ft-template' ),
        'items_list'            => __( 'Items list', 'mc-acf-ft-template' ),
        'items_list_navigation' => __( 'Items list navigation', 'mc-acf-ft-template' ),
        'filter_items_list'     => __( 'Filter items list', 'mc-acf-ft-template' ),
    );
    $args = array(
        'label'                 => __( 'ACF Template', 'mc-acf-ft-template' ),
        'description'           => __( 'ACF Template', 'mc-acf-ft-template' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 80,
        'menu_icon'             => 'dashicons-layout',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'map_meta_cap'        => true,
        'capability_type'       => 'post',
        'capabilities' => array(
            'create_posts' => false,
// Removes support for the "Add New" function ( use 'do_not_allow' instead of false for multisite set ups )
        ),
        'show_in_rest'          => true,
    );
    register_post_type( 'acf_template', $args );

}
add_action( 'init', 'mc_acf_ft_register_cpt', 0 );

// Register Custom Taxonomy
function mc_acf_ft_register_tax() {

    $labels = array(
        'name'                       => _x( 'ACF Template categories', 'Taxonomy General Name', 'mc-acf-ft-template' ),
        'singular_name'              => _x( 'ACF Template category', 'Taxonomy Singular Name', 'mc-acf-ft-template' ),
        'menu_name'                  => __( 'ACF Template categories', 'mc-acf-ft-template' ),
        'all_items'                  => __( 'All Items', 'mc-acf-ft-template' ),
        'parent_item'                => __( 'Parent Item', 'mc-acf-ft-template' ),
        'parent_item_colon'          => __( 'Parent Item:', 'mc-acf-ft-template' ),
        'new_item_name'              => __( 'New Item Name', 'mc-acf-ft-template' ),
        'add_new_item'               => __( 'Add New Item', 'mc-acf-ft-template' ),
        'edit_item'                  => __( 'Edit Item', 'mc-acf-ft-template' ),
        'update_item'                => __( 'Update Item', 'mc-acf-ft-template' ),
        'view_item'                  => __( 'View Item', 'mc-acf-ft-template' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'mc-acf-ft-template' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'mc-acf-ft-template' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'mc-acf-ft-template' ),
        'popular_items'              => __( 'Popular Items', 'mc-acf-ft-template' ),
        'search_items'               => __( 'Search Items', 'mc-acf-ft-template' ),
        'not_found'                  => __( 'Not Found', 'mc-acf-ft-template' ),
        'no_terms'                   => __( 'No items', 'mc-acf-ft-template' ),
        'items_list'                 => __( 'Items list', 'mc-acf-ft-template' ),
        'items_list_navigation'      => __( 'Items list navigation', 'mc-acf-ft-template' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
        'show_tagcloud'              => false,
        'rewrite'                    => false,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'acf_template_tax', array( 'acf_template' ), $args );

    // if we have transient, create default term after cpt and tax setup
    if( get_transient( 'mc-acf-ft-default-term' ) ) {
        wp_insert_term( 'Default', 'acf_template_tax' );
        delete_transient( 'mc-acf-ft-default-term' );
    }

}
add_action( 'init', 'mc_acf_ft_register_tax', 0 );

// Register custom column in admin

add_filter( 'manage_acf_template_posts_columns', 'set_custom_edit_acf_template_columns' );
add_action( 'manage_acf_template_posts_custom_column' , 'custom_acf_template_column', 10, 2 );

function set_custom_edit_acf_template_columns($columns) {
    //unset( $columns['author'] );
    $columns['acf_template_group'] = __( 'Saved from field :', 'mc-acf-ft-template' );
    return $columns;
}

function custom_acf_template_column( $column, $post_id ) {
    switch ( $column ) {

        case 'acf_template_group' :
            $layout_parent_key = get_post_meta($post_id, '_flex_layout_parent', true );
            $layout_parent_obj = get_field_object($layout_parent_key);
            if ( $layout_parent_obj )
                echo $layout_parent_obj['label'];
            else
                _e( 'Unable to get parent flexible', 'mc-acf-ft-template' );
            break;
    }
}

/*
* Set default term for CPT 
* https://gist.github.com/mayeenulislam/f208b4fd408fd4742c06
*/
function mc_acf_ft_set_default_object_terms( $post_id, $post ) {
    if ( 'publish' === $post->post_status && $post->post_type === 'acf_template' ) {
        $defaults = array(
            'acf_template_tax' => array( 'default' ),
        );
        $taxonomies = get_object_taxonomies( $post->post_type );
        foreach ( (array) $taxonomies as $taxonomy ) {
            $terms = wp_get_post_terms( $post_id, $taxonomy );
            if ( empty( $terms ) && array_key_exists( $taxonomy, $defaults ) ) {
                wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
            }
        }
    }
}
add_action( 'save_post', 'mc_acf_ft_set_default_object_terms', 100, 2 );