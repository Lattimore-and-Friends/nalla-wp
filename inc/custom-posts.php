<?php


function custom_post_type() {

		$labels = array(
			'name'                  => _x( 'Projects', 'Post Type General Name' ),
			'singular_name'         => _x( 'Project', 'Post Type Singular Name' ),
			'menu_name'             => __( 'Projects' ),
			'name_admin_bar'        => __( 'Project' ),
			'archives'              => __( 'Project Archives', 'project' ),
			'attributes'            => __( 'Project Attributes' ),
			'parent_item_colon'     => __( 'Parent Projects:' ),
			'all_items'             => __( 'All Projects' ),
			'add_new_item'          => __( 'Add New Projects' ),
			'add_new'               => __( 'Add New' ),
			'new_item'              => __( 'New Project' ),
			'edit_item'             => __( 'Edit Project' ),
			'update_item'           => __( 'Update Project' ),
			'view_item'             => __( 'View Project' ),
			'view_items'            => __( 'View Project' ),
			'search_items'          => __( 'Search Project' ),
			'not_found'             => __( 'Not found' ),
			'not_found_in_trash'    => __( 'Not found in Trash' ),
			'featured_image'        => __( 'Featured Image' ),
			'set_featured_image'    => __( 'Set featured image' ),
			'remove_featured_image' => __( 'Remove featured image' ),
			'use_featured_image'    => __( 'Use as featured image' ),
			'insert_into_item'      => __( 'Insert into project' ),
			'uploaded_to_this_item' => __( 'Uploaded to this project' ),
			'items_list'            => __( 'Items list' ),
			'items_list_navigation' => __( 'Items list navigation' ),
			'filter_items_list'     => __( 'Filter items list' ),
		);
		$rewrite = array(
			'slug'                  => 'project',
			'with_front'            => true,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Projects'),
			'labels'                => $labels,
			'supports'              => array( 'thumbnail', 'title', 'editor'),
			'taxonomies'            => array('post_tag' ),
			'menu_icon'				=> 'dashicons-format-aside',
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'show_in_rest'         => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'rewrite'               => $rewrite,
			'capability_type'       => 'post',
		);
		register_post_type('projects' , $args );
	

	
	$labels = array(
		'name'                  => _x( 'Jobs', 'Post Type General Name' ),
		'singular_name'         => _x( 'Job', 'Post Type Singular Name' ),
		'menu_name'             => __( 'Jobs' ),
		'name_admin_bar'        => __( 'Job' ),
		'archives'              => __( 'Job Archives', 'Job' ),
		'attributes'            => __( 'Job Attributes' ),
		'parent_item_colon'     => __( 'Parent Jobs:' ),
		'all_items'             => __( 'All Jobs' ),
		'add_new_item'          => __( 'Add New Jobs' ),
		'add_new'               => __( 'Add New' ),
		'new_item'              => __( 'New Job' ),
		'edit_item'             => __( 'Edit Job' ),
		'update_item'           => __( 'Update Job' ),
		'view_item'             => __( 'View Job' ),
		'view_items'            => __( 'View Job' ),
		'search_items'          => __( 'Search Job' ),
		'not_found'             => __( 'Not found' ),
		'not_found_in_trash'    => __( 'Not found in Trash' ),
		'featured_image'        => __( 'Featured Image' ),
		'set_featured_image'    => __( 'Set featured image' ),
		'remove_featured_image' => __( 'Remove featured image' ),
		'use_featured_image'    => __( 'Use as featured image' ),
		'insert_into_item'      => __( 'Insert into Job' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Job' ),
		'items_list'            => __( 'Items list' ),
		'items_list_navigation' => __( 'Items list navigation' ),
		'filter_items_list'     => __( 'Filter items list' ),
	);
	$rewrite = array(
		'slug'                  => 'job',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Jobs'),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'taxonomies'            => array('post_tag' ),
		'menu_icon'				=> 'dashicons-building',
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type('jobs' , $args );


	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name' ),
		'menu_name'             => __( 'Events' ),
		'name_admin_bar'        => __( 'Event' ),
		'archives'              => __( 'Event Archives', 'Event' ),
		'attributes'            => __( 'Event Attributes' ),
		'parent_item_colon'     => __( 'Parent Events:' ),
		'all_items'             => __( 'All Events' ),
		'add_new_item'          => __( 'Add New Events' ),
		'add_new'               => __( 'Add New' ),
		'new_item'              => __( 'New Event' ),
		'edit_item'             => __( 'Edit Event' ),
		'update_item'           => __( 'Update Event' ),
		'view_item'             => __( 'View Event' ),
		'view_items'            => __( 'View Event' ),
		'search_items'          => __( 'Search Event' ),
		'not_found'             => __( 'Not found' ),
		'not_found_in_trash'    => __( 'Not found in Trash' ),
		'featured_image'        => __( 'Featured Image' ),
		'set_featured_image'    => __( 'Set featured image' ),
		'remove_featured_image' => __( 'Remove featured image' ),
		'use_featured_image'    => __( 'Use as featured image' ),
		'insert_into_item'      => __( 'Insert into Event' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event' ),
		'items_list'            => __( 'Items list' ),
		'items_list_navigation' => __( 'Items list navigation' ),
		'filter_items_list'     => __( 'Filter items list' ),
	);
	$rewrite = array(
		'slug'                  => 'event',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Events'),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'taxonomies'            => array('post_tag' ),
		'menu_icon'				=> 'dashicons-calendar',
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);

	register_post_type('events' , $args );

}

add_action( 'init', 'custom_post_type' );