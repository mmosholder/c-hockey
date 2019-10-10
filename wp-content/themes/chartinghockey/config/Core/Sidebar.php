<?php
namespace GC\Core;
/**
 * Sidebar.
 */
class Sidebar
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'widgets_init', array( $this, 'widgets_init' ) );
    }
    /*
        Define the sidebar
    */
    public function widgets_init()
    {
        register_sidebar( array(
            'name' => esc_html__('Footer About', 'gc'),
            'id' => 'footer_about',
            'description' => esc_html__('Default sidebar to add all your widgets.', 'gc'),
            'before_widget' => '<section id="%1$s" class="widget %2$s p-2">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => esc_html__('Footer 1', 'gc'),
            'id' => 'footer1',
            'description' => esc_html__('Default sidebar to add all your widgets.', 'gc'),
            'before_widget' => '<section id="%1$s" class="widget %2$s p-2">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => esc_html__('Footer 2', 'gc'),
            'id' => 'footer2',
            'description' => esc_html__('Default sidebar to add all your widgets.', 'gc'),
            'before_widget' => '<section id="%1$s" class="widget %2$s p-2">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => esc_html__('Footer 3', 'gc'),
            'id' => 'footer3',
            'description' => esc_html__('Default sidebar to add all your widgets.', 'gc'),
            'before_widget' => '<section id="%1$s" class="widget %2$s p-2">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => esc_html__('Footer Get In Touch', 'gc'),
            'id' => 'footer_git',
            'description' => esc_html__('Default sidebar to add all your widgets.', 'gc'),
            'before_widget' => '<section id="%1$s" class="widget %2$s p-2">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => esc_html__('Footer Social Media', 'gc'),
            'id' => 'footer_sm',
            'description' => esc_html__('Default sidebar to add all your widgets.', 'gc'),
            'before_widget' => '<section id="%1$s" class="widget %2$s p-2">',
            'after_widget' => '</section>',
            // 'before_title' => '<h3 class="widget-title">',
            // 'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => esc_html__('Footer Community', 'gc'),
            'id' => 'footer_community',
            'description' => esc_html__('Default sidebar to add all your widgets.', 'gc'),
            'before_widget' => '<section id="%1$s" class="widget %2$s p-2">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => esc_html__('Footer Copyright', 'gc'),
            'id' => 'footer_base',
            'description' => esc_html__('Default sidebar to add all your widgets.', 'gc'),
            'before_widget' => '<section id="%1$s" class="widget %2$s p-2">',
            'after_widget' => '</section>',
            // 'before_title' => '<h3 class="widget-title">',
            // 'after_title' => '</h3>',
        ) );
    }
}
