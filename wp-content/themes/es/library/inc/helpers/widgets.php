<?php
function es_widgets_init() {
	register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'es' ),
			'id'            => 'sidebar',
			'description'   => esc_attr__( 'Add widgets here.', 'es' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
			) );
  register_sidebar( array(
      'name'          => esc_html__( 'Footer 1', 'es' ),
      'id'            => 'footer1',
      'description'   => esc_attr__( 'Add widgets here.', 'es' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5>',
      'after_title'   => '</h5>',
      ) );
  register_sidebar( array(
      'name'          => esc_html__( 'Footer 2', 'es' ),
      'id'            => 'footer2',
      'description'   => esc_attr__( 'Add widgets here.', 'es' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5>',
      'after_title'   => '</h5>',
      ) );
  register_sidebar( array(
      'name'          => esc_html__( 'Footer 3', 'es' ),
      'id'            => 'footer3',
      'description'   => esc_attr__( 'Add widgets here.', 'es' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5>',
      'after_title'   => '</h5>',
      ) );
  register_sidebar( array(
      'name'          => esc_html__( 'Footer 4', 'es' ),
      'id'            => 'footer4',
      'description'   => esc_attr__( 'Add widgets here.', 'es' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5>',
      'after_title'   => '</h5>',
      ) );
  register_sidebar( array(
      'name'          => esc_html__( 'Footer 5', 'es' ),
      'id'            => 'footer5',
      'description'   => esc_attr__( 'Add widgets here.', 'es' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5>',
      'after_title'   => '</h5>',
      ) );
  register_sidebar( array(
      'name'          => esc_html__( 'Footer 6', 'es' ),
      'id'            => 'footer6',
      'description'   => esc_attr__( 'Add widgets here.', 'es' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5>',
      'after_title'   => '</h5>',
      ) );
}
add_action( 'widgets_init', 'es_widgets_init' );
