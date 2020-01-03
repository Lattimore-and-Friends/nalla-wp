<?php

function returnDefaultTaxonomyLabels( $singleName, $pluralName, $menuTitle = null ) {

	$lowercasePluralName = strtolower( $pluralName );
	$menuTitle           = empty( $menuTitle ) ? $pluralName : $menuTitle;

	$labels = array(
		'name'                       => $pluralName,
		'singular_name'              => $singleName,
		'menu_name'                  => $menuTitle,
		'all_items'                  => "All $pluralName",
		'edit_item'                  => "Edit $singleName",
		'view_item'                  => "View $singleName",
		'update_item'                => "Update $singleName",
		'add_new_item'               => "Add New $singleName",
		'new_item_name'              => "New $singleName",
		'parent_item'                => "Parent $singleName",
		'parent_item_colon'          => "Parent $singleName:",
		'search_items'               => "Search $pluralName",
		'popular_items'              => "Popular $pluralName",
		'separate_items_with_commas' => "Separate $lowercasePluralName with commas",
		'add_or_remove_items'        => "Add or remove $lowercasePluralName",
		'choose_from_most_used'      => "Choose from most used $lowercasePluralName",
		'not_found'                  => "No $lowercasePluralName found.",
	);

	return $labels;
}

function gst_custom_taxonomies() {
	register_taxonomy( 'post_kind',
			 array( 'post' ), array(
			'labels'            => returnDefaultTaxonomyLabels( 'Kind', 'Kinds' ),
			'hierarchical'      => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'show_in_rest'      => true,
			'rest_base'         => 'postKinds',
		)
	);
	register_taxonomy( 'service',
		 array( 'projects' ), array(
			'labels'            => returnDefaultTaxonomyLabels( 'Service', 'Services' ),
			'hierarchical'      => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'show_in_rest'      => true,
			'rest_base'         => 'services',
		)
	);
	register_taxonomy( 'industry',
	array( 'projects' ), array(
			'labels'            => returnDefaultTaxonomyLabels( 'Industry', 'Industries' ),
			'hierarchical'      => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'show_in_rest'      => true,
			'rest_base'         => 'industries',
		)
	);
	register_taxonomy( 'team',
	 array( 'jobs', 'user'), array(
			'labels'            => returnDefaultTaxonomyLabels( 'Team', 'Teams' ),
			'hierarchical'      => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'show_in_rest'      => true,
			'rest_base'         => 'teams',
		)
	);
}

add_action( 'init', 'gst_custom_taxonomies' );

/* Adds the taxonomy page in the admin. */
add_action( 'admin_menu', 'nal_add_team_admin_page' );

/**
 * Creates the admin page for the 'profession' taxonomy under the 'Users' menu.  It works the same as any
 * other taxonomy page in the admin.  However, this is kind of hacky and is meant as a quick solution.  When
 * clicking on the menu item in the admin, WordPress' menu system thinks you're viewing something under 'Posts'
 * instead of 'Users'.  We really need WP core support for this.
 */
function nal_add_team_admin_page() {

	$tax = get_taxonomy( 'team' );

	add_users_page(
		esc_attr( $tax->labels->menu_name ),
		esc_attr( $tax->labels->menu_name ),
		$tax->cap->manage_terms,
		'edit-tags.php?taxonomy=' . $tax->name
	);
}