<?php

namespace GC\Custom;

/**
 * Custom
 * use it to write your custom functions.
 */
class Custom
{
  /**
     * register default hooks and actions for WordPress
     * @return
     */
  public function register()
  {

  }

  /**
   * Create Custom Post Types
   * @return The registered post type object, or an error object
   */
  // public function speakers_post_type()
  // {
  //   $labels = array(
  //     'name'               => _x( 'Speakers', 'post type general name', 'gc' ),
  //     'singular_name'      => _x( 'Speaker', 'post type singular name', 'gc' ),
  //     'menu_name'          => _x( 'Speakers', 'admin menu', 'gc' ),
  //     'name_admin_bar'     => _x( 'Speaker', 'add new on admin bar', 'gc' ),
  //     'add_new'            => _x( 'Add New', 'Speaker', 'gc' ),
  //     'add_new_item'       => __( 'Add New Speaker', 'gc' ),
  //     'new_item'           => __( 'New Speaker', 'gc' ),
  //     'edit_item'          => __( 'Edit Speaker', 'gc' ),
  //     'view_item'          => __( 'View Speaker', 'gc' ),
  //     'view_items'         => __( 'View Speakers', 'gc' ),
  //     'all_items'          => __( 'All Speakers', 'gc' ),
  //     'search_items'       => __( 'Search Speakers', 'gc' ),
  //     'parent_item_colon'  => __( 'Parent Speakers:', 'gc' ),
  //     'not_found'          => __( 'No Speakers found.', 'gc' ),
  //     'not_found_in_trash' => __( 'No Speakers found in Trash.', 'gc' )
  //   );

  //   $args = array(
  //     'labels'             => $labels,
  //     'description'        => __( 'Description.', 'gc' ),
  //     'public'             => true,
  //     'publicly_queryable' => true,
  //     'show_ui'            => true,
  //     'show_in_menu'       => true,
  //     'menu_icon'          => 'dashicons-megaphone',
  //     'query_var'          => true,
  //     'rewrite'            => array( 'slug' => 'speakers' ),
  //     'capability_type'    => 'post',
  //     'has_archive'        => true,
  //     'hierarchical'       => false,
  //     'menu_position'      => 5, // below post
  //     'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  //   );

  //   register_post_type( 'speaker', $args );
  // }

  // public function talks_post_type()
  // {
  //   $labels = array(
  //     'name'               => _x( 'Talks', 'post type general name', 'gc' ),
  //     'singular_name'      => _x( 'Talk', 'post type singular name', 'gc' ),
  //     'menu_name'          => _x( 'Talks', 'admin menu', 'gc' ),
  //     'name_admin_bar'     => _x( 'Talk', 'add new on admin bar', 'gc' ),
  //     'add_new'            => _x( 'Add New', 'Talk', 'gc' ),
  //     'add_new_item'       => __( 'Add New Talk', 'gc' ),
  //     'new_item'           => __( 'New Talk', 'gc' ),
  //     'edit_item'          => __( 'Edit Talk', 'gc' ),
  //     'view_item'          => __( 'View Talk', 'gc' ),
  //     'view_items'         => __( 'View Talks', 'gc' ),
  //     'all_items'          => __( 'All Talks', 'gc' ),
  //     'search_items'       => __( 'Search Talks', 'gc' ),
  //     'parent_item_colon'  => __( 'Parent Talks:', 'gc' ),
  //     'not_found'          => __( 'No Talks found.', 'gc' ),
  //     'not_found_in_trash' => __( 'No Talks found in Trash.', 'gc' )
  //   );

  //   $args = array(
  //     'labels'             => $labels,
  //     'description'        => __( 'Description.', 'gc' ),
  //     'public'             => true,
  //     'publicly_queryable' => true,
  //     'show_ui'            => true,
  //     'show_in_menu'       => true,
  //     'menu_icon'          => 'dashicons-video-alt3',
  //     'query_var'          => true,
  //     'rewrite'            => array( 'slug' => 'talks' ),
  //     'capability_type'    => 'post',
  //     'has_archive'        => true,
  //     'hierarchical'       => false,
  //     'menu_position'      => 5, // below post
  //     'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  //   );

  //   register_post_type( 'talk', $args );
  // }

  /**
   * Flush Rewrite on CPT activation
   * @return empty
   */
  // public function rewrite_flush()
  // {
  //   // call the CPT init function
  //   $this->speakers_post_type();
  //   $this->talks_post_type();

  //   // Flush the rewrite rules only on theme activation
  //   flush_rewrite_rules();
  // }
}
