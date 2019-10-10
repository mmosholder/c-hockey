<?php
namespace GC\Setup;
class Setup
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'after_setup_theme', array( $this, 'setup' ) );
        add_action( 'after_setup_theme', array( $this, 'content_width' ), 0);
        add_filter('timber_context', array( $this, 'add_to_context'));
    }
    public function setup()
    {
        /*
         * You can activate this if you're planning to build a multilingual theme
         */
        //load_theme_textdomain( 'gc', get_template_directory() . '/languages' );
        /*
         * Default Theme Support options better have
         */
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        add_theme_support( 'custom-background', apply_filters( 'awps_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
        /*
         * Activate Post formats if you need
         */
        add_theme_support( 'post-formats', array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        ) );
        // Add Options for ACF
        if( function_exists('acf_add_options_page') ) {
            $args = array(
            /* (string) The title displayed on the options page. Required. */
            'page_title' => 'Site Options',
            /* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
            'menu_title' => '',
            /* (string) The URL slug used to uniquely identify this options page.
            Defaults to a url friendly version of menu_title */
            'menu_slug' => '',
            /* (string) The capability required for this menu to be displayed to the user. Defaults to edit_posts.
            Read more about capability here: http://codex.wordpress.org/Roles_and_Capabilities */
            'capability' => 'edit_posts',
            /* (int|string) The position in the menu order this menu should appear.
            WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays!
            Risk of conflict can be reduced by using decimal instead of integer values, e.g. '63.3' instead of 63 (must use quotes).
            Defaults to bottom of utility menu items */
            'position' => false,
            /* (string) The slug of another WP admin page. if set, this will become a child page. */
            'parent_slug' => '',
            /* (string) The icon class for this menu. Defaults to default WordPress gear.
            Read more about dashicons here: https://developer.wordpress.org/resource/dashicons/ */
            'icon_url' => 'dashicons-layout',
            /* (boolean) If set to true, this options page will redirect to the first child page (if a child page exists).
            If set to false, this parent page will appear alongside any child pages. Defaults to true */
            'redirect' => true,
            /* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2').
            Defaults to 'options'. Added in v5.2.7 */
            'post_id' => 'options',
            /* (boolean)  Whether to load the option (values saved from this options page) when WordPress starts up.
            Defaults to false. Added in v5.2.8. */
            'autoload' => false,
            /* (string) The update button text. Added in v5.3.7. */
            'update_button'     => __('Update', 'acf'),
            /* (string) The message shown above the form on submit. Added in v5.6.0. */
            'updated_message'   => __("Perfect! Your options have been updated.", 'acf'),
        );
            acf_add_options_page($args);
        }
    }
    /*
        Define a max content width to allow WordPress to properly resize your images
    */
    public function content_width()
    {
        $GLOBALS[ 'content_width' ] = apply_filters( 'content_width', 1440 );
    }
    /*
        Add to context a the get_query_var for archive date.
    */
    public function add_to_context($data)
    {
        $data['archive_year'] = get_query_var('year');
        return $data;
    }
}
