<?php
  // Define and register starter content to showcase the theme on new sites.
  $starter_content = array(
    'widgets' => array(
      // Place three core-defined widgets in the sidebar area.
      'sidebar-1' => array(
        'text_business_info',
        'search',
        'text_about',
      ),

      // Add the core-defined business info widget to the footer 1 area.
      'sidebar-2' => array(
        'text_business_info',
      ),

      // Put two core-defined widgets in the footer 2 area.
      'sidebar-3' => array(
        'text_about',
        'search',
      ),
    ),

    // Specify the core-defined pages to create and add custom thumbnails to some of them.
    'posts' => array(
      'home',
      'about' => array(
        'thumbnail' => '{{image-sandwich}}',
      ),
      'contact' => array(
        'thumbnail' => '{{image-espresso}}',
      ),
      'blog' => array(
        'thumbnail' => '{{image-coffee}}',
      ),
      'homepage-section' => array(
        'thumbnail' => '{{image-espresso}}',
      ),
    ),

    // Create the custom image attachments used as post thumbnails for pages.
    'attachments' => array(
      'image-espresso' => array(
        'post_title' => _x( 'Espresso', 'Theme starter content', 'es' ),
        'file' => 'assets/images/espresso.jpg', // URL relative to the template directory.
      ),
      'image-sandwich' => array(
        'post_title' => _x( 'Sandwich', 'Theme starter content', 'es' ),
        'file' => 'assets/images/sandwich.jpg',
      ),
      'image-coffee' => array(
        'post_title' => _x( 'Coffee', 'Theme starter content', 'es' ),
        'file' => 'assets/images/coffee.jpg',
      ),
    ),

    // Default to a static front page and assign the front and posts pages.
    'options' => array(
      'show_on_front' => 'page',
      'page_on_front' => '{{home}}',
      'page_for_posts' => '{{blog}}',
    ),

    // Set the front page section theme mods to the IDs of the core-registered pages.
    'theme_mods' => array(
      'panel_1' => '{{homepage-section}}',
      'panel_2' => '{{about}}',
      'panel_3' => '{{blog}}',
      'panel_4' => '{{contact}}',
    ),

    // Set up nav menus for each of the two areas registered in the theme.
    'nav_menus' => array(
      // Assign a menu to the "top" location.
      'top' => array(
        'name' => __( 'Top Menu', 'es' ),
        'items' => array(
          'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
          'page_about',
          'page_blog',
          'page_contact',
        ),
      ),

      // Assign a menu to the "social" location.
      'social' => array(
        'name' => __( 'Social Links Menu', 'es' ),
        'items' => array(
          'link_yelp',
          'link_facebook',
          'link_twitter',
          'link_instagram',
          'link_email',
        ),
      ),
    ),
  );

  $starter_content = apply_filters( 'es_starter_content', $starter_content );

  add_theme_support( 'starter-content', $starter_content );

add_action( 'after_setup_theme', 'es_setup' );
