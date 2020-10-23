<?php

if ( ! function_exists('projects_func') ) {

    // Register Custom Post Type
    function projects_func() {
    
        $labels = array(
            'name'                  => _x( 'Proyectos', 'Post Type General Name', 'master-template-woo' ),
            'singular_name'         => _x( 'Proyecto', 'Post Type Singular Name', 'master-template-woo' ),
            'menu_name'             => __( 'Proyectos', 'master-template-woo' ),
            'name_admin_bar'        => __( 'Proyectos', 'master-template-woo' ),
            'archives'              => __( 'Item Archives', 'master-template-woo' ),
            'attributes'            => __( 'Item Attributes', 'master-template-woo' ),
            'parent_item_colon'     => __( 'Parent Item:', 'master-template-woo' ),
            'all_items'             => __( 'All Items', 'master-template-woo' ),
            'add_new_item'          => __( 'Add New Item', 'master-template-woo' ),
            'add_new'               => __( 'Add New', 'master-template-woo' ),
            'new_item'              => __( 'New Item', 'master-template-woo' ),
            'edit_item'             => __( 'Edit Item', 'master-template-woo' ),
            'update_item'           => __( 'Update Item', 'master-template-woo' ),
            'view_item'             => __( 'View Item', 'master-template-woo' ),
            'view_items'            => __( 'View Items', 'master-template-woo' ),
            'search_items'          => __( 'Search Item', 'master-template-woo' ),
            'not_found'             => __( 'Not found', 'master-template-woo' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'master-template-woo' ),
            'featured_image'        => __( 'Featured Image', 'master-template-woo' ),
            'set_featured_image'    => __( 'Set featured image', 'master-template-woo' ),
            'remove_featured_image' => __( 'Remove featured image', 'master-template-woo' ),
            'use_featured_image'    => __( 'Use as featured image', 'master-template-woo' ),
            'insert_into_item'      => __( 'Insert into item', 'master-template-woo' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'master-template-woo' ),
            'items_list'            => __( 'Items list', 'master-template-woo' ),
            'items_list_navigation' => __( 'Items list navigation', 'master-template-woo' ),
            'filter_items_list'     => __( 'Filter items list', 'master-template-woo' ),
        );
        $rewrite = array(
            'slug'                  => 'proyectos',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __( 'Proyecto', 'master-template-woo' ),
            'description'           => __( 'Post Type Description', 'master-template-woo' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-gallery',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'post',
        );
        register_post_type( 'projects', $args );
    
    }
    add_action( 'init', 'projects_func', 0 );
    
}