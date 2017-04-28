<?php
/**
 * melody functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package melody
 */

if (!function_exists('melody_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function melody_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on melody, use a find and replace
         * to change 'melody' to the name of your theme in all the template files.
         */
        load_theme_textdomain('melody', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'melody'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('melody_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'melody_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function melody_content_width()
{
    $GLOBALS['content_width'] = apply_filters('melody_content_width', 640);
}

add_action('after_setup_theme', 'melody_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function melody_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'melody'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'melody'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'melody_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function melody_scripts()
{
    //wp_enqueue_style( 'melody-style', get_stylesheet_uri() );

    wp_enqueue_style('melody-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '', false);
    wp_enqueue_style('melody-styles', get_template_directory_uri() . '/css/styles.min.css', array(), '', false);
    wp_enqueue_style('melody-libs', get_template_directory_uri() . '/css/libs.min.css', array(), '', false);



    wp_enqueue_script('melody-jq', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '', true);
    wp_enqueue_script('melody-jqHslider', get_template_directory_uri() . '/js/jquery.HSlider.min.js', array(), '', true);
    wp_enqueue_script('melody-lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array(), '', true);
    wp_enqueue_script('melody-scriptmin', get_template_directory_uri() . '/js/script.min.js', array(), '', true);
    wp_enqueue_script('melody-common', get_template_directory_uri() . '/js/common.js', array(), '', true);

    wp_localize_script('melody-common', 'myajax', array(
        'url' => admin_url('admin-ajax.php')
    ));
}

add_action('wp_enqueue_scripts', 'melody_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

show_admin_bar(false);

add_action('wp_ajax_sendcallback', 'sendCallback');
add_action('wp_ajax_nopriv_sendcallback', 'sendCallback');

function sendCallback()
{
    if ($_POST) {
        $admin_email = get_option('admin_email');

        $name = $_POST['name'];
        $email = $_POST['email'];

        $msg = 'Вам отправили запрос на обратную связь: ';
        $msg .= '<br>Имя: '.$name;
        $msg .= '<br>Email: '.$email;

        if (wp_mail($admin_email, 'Обратная связь', $msg, 'content-type: text/html')) {
            wp_send_json(['status' => 'success']);
        } else {
            wp_send_json(['status' => 'error']);
        }
    }
    wp_die();
}