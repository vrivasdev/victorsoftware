<?php

function victorsoftware_custom_post_type(){
	$labels = [
		'name'               => 'Portfolio',
		'singular_name'      => 'Portfolio',
		'add_new'            => 'Add Item',
		'all_items'          => 'All items',
		'add_new_item'       => 'Add Item',
		'edit_item'          => 'Edit Item',
		'new_item'           => 'New Item',
		'view_item'          => 'View Item',
		'search_item'        => 'Search Portfolio',
		'not_found'          => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon'  => 'Parent Item'
    ];

	$args = [
		'labels'             => $labels,
		'public'             => true,
		'has_archive'        => true,
		'publicly_queryable' => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'supports' => [
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions'
        ],
		//'taxonomies'          => array('category', 'post_tag'), // enabled general tags and categories
		'menu_position'       => 5,
		'exclude_from_search' => false // I don't want this element excluded from the search result
    ];

	register_post_type('portfolio', $args);
}

add_action('init', 'victorsoftware_custom_post_type');