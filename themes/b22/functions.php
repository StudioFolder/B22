<?php

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); /* Use featured images in pages*/
	
	/* Change the post excerpt length */
//	add_filter('excerpt_length', 'my_excerpt_length');
//	function my_excerpt_length($length) {
//	return 30; }


	/* Disable the Admin Bar. */
	add_filter( 'show_admin_bar', '__return_false' ); 


	/**
	 * Register Multiple Taxonomies
	 *
	 * @author Bill Erickson
	 * @link http://www.billerickson.net/code/register-multiple-taxonomies/
	 */
	function be_register_taxonomies() {
		$taxonomies = array(
			array(
				'slug'         => 'field',
				'single_name'  => 'Field',
				'plural_name'  => 'Fields',
				'description'  => 'Field description lorem ipsum',
				'post_type'    => 'post',
				'rewrite'      => array( 'slug' => 'field' ),
			),
			array(
				'slug'         => 'collaborator',
				'single_name'  => 'Collaborator',
				'plural_name'  => 'Collaborators',
				'description'  => 'Collaborator description lorem ipsum',
				'post_type'    => 'post',
				'rewrite'      => array( 'slug' => 'collaborator' ),
			),		
			array(
				'slug'         => 'location',
				'single_name'  => 'Location',
				'plural_name'  => 'Locations',
				'description'  => 'Location description lorem ipsum',
				'post_type'    => 'post',
				'rewrite'      => array( 'slug' => 'location' ),
			),		
			array(
				'slug'         => 'size',
				'single_name'  => 'Size',
				'plural_name'  => 'Sizes',
				'description'  => 'Size description lorem ipsum',
				'post_type'    => 'post',
				'rewrite'      => array( 'slug' => 'size' ),
			),		
			array(
				'slug'         => 'typology',
				'single_name'  => 'Typology',
				'plural_name'  => 'Typologies',
				'description'  => 'Typology description lorem ipsum',
				'post_type'    => 'post',
				'rewrite'      => array( 'slug' => 'typology' ),
			),		
			array(
				'slug'         => 'award',
				'single_name'  => 'Award',
				'plural_name'  => 'Awards',
				'description'  => 'Award description lorem ipsum',
				'post_type'    => 'post',
				'rewrite'      => array( 'slug' => 'award' ),
			),		
			array(
				'slug'         => 'date',
				'single_name'  => 'Date',
				'plural_name'  => 'Dates',
				'description'  => 'Date description lorem ipsum',
				'post_type'    => 'post',
				'rewrite'      => array( 'slug' => 'date' ),
			),		
		);
		foreach( $taxonomies as $taxonomy ) {
			$labels = array(
				'name' => $taxonomy['plural_name'],
				'singular_name' => $taxonomy['single_name'],
				'description' =>  $taxonomy['description'],
				'search_items' =>  'Search ' . $taxonomy['plural_name'],
				'all_items' => 'All ' . $taxonomy['plural_name'],
				'parent_item' => 'Parent ' . $taxonomy['single_name'],
				'parent_item_colon' => 'Parent ' . $taxonomy['single_name'] . ':',
				'edit_item' => 'Edit ' . $taxonomy['single_name'],
				'update_item' => 'Update ' . $taxonomy['single_name'],
				'add_new_item' => 'Add New ' . $taxonomy['single_name'],
				'new_item_name' => 'New ' . $taxonomy['single_name'] . ' Name',
				'menu_name' => $taxonomy['plural_name']
			);
			
			$rewrite = isset( $taxonomy['rewrite'] ) ? $taxonomy['rewrite'] : array( 'slug' => $taxonomy['slug'] );
			$hierarchical = isset( $taxonomy['hierarchical'] ) ? $taxonomy['hierarchical'] : true;
		
			register_taxonomy( $taxonomy['slug'], $taxonomy['post_type'], array(
				'hierarchical' => $hierarchical,
				'labels' => $labels,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => $rewrite,
			));
		}
		
	}
	add_action( 'init', 'be_register_taxonomies' );





	// get taxonomies terms links
	function custom_taxonomies_terms_links(){
	  // get post by post id
	  $post = get_post( $post->ID );

	  // get post type by post
	  $post_type = $post->post_type;

	  // get post type taxonomies
	  $taxonomies = get_object_taxonomies( $post_type, 'objects' );

	  $out = array();
	  foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

	    // get the terms related to post
	    $terms = get_the_terms( $post->ID, $taxonomy_slug );

	    if ( !empty( $terms ) ) {
	//	  $out[] = "<h2>" . $taxonomy->label . "</h2>\n<ul>";
	      foreach ( $terms as $term ) {
	        $out[] = $term->slug.' ';
//	          '  <li><a href="'
//	        .    get_term_link( $term->slug, $taxonomy_slug )
//	        .'">'
//	        .    $term->name
//	        . "</a></li>\n";
	      }
//		  $out[] = "</ul>\n";
	    }
	  }

	  return implode('', $out );
	}
?>