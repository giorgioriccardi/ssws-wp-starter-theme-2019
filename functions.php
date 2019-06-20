<?php
/**
 * SSWS 2019 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SSWS_2019
 */

// if (!function_exists('ssws_2019_setup')):
//     /**
//      * Sets up theme defaults and registers support for various WordPress features.
//      *
//      * Note that this function is hooked into the after_setup_theme hook, which
//      * runs before the init hook. The init hook is too late for some features, such
//      * as indicating support for post thumbnails.
//      */
//     function ssws_2019_setup()
// {
//         /*
//          * Make theme available for translation.
//          * Translations can be filed in the /languages/ directory.
//          * If you're building a theme based on SSWS 2019, use a find and replace
//          * to change 'ssws-2019' to the name of your theme in all the template files.
//          */
//         load_theme_textdomain('ssws-2019', get_template_directory() . '/languages');

//         // Add default posts and comments RSS feed links to head.
//         add_theme_support('automatic-feed-links');

//         /*
//          * Let WordPress manage the document title.
//          * By adding theme support, we declare that this theme does not use a
//          * hard-coded <title> tag in the document head, and expect WordPress to
//          * provide it for us.
//          */
//         add_theme_support('title-tag');

//         /*
//          * Enable support for Post Thumbnails on posts and pages.
//          *
//          * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
//          */
//         add_theme_support('post-thumbnails');

//         // This theme uses wp_nav_menu() in one location.
//         register_nav_menus(array(
//             'menu-1' => esc_html__('Primary', 'ssws-2019'),
//         ));

//         /*
//          * Switch default core markup for search form, comment form, and comments
//          * to output valid HTML5.
//          */
//         add_theme_support('html5', array(
//             'search-form',
//             'comment-form',
//             'comment-list',
//             'gallery',
//             'caption',
//         ));

//         // Set up the WordPress core custom background feature.
//         add_theme_support('custom-background', apply_filters('ssws_2019_custom_background_args', array(
//             'default-color' => 'ffffff',
//             'default-image' => '',
//         )));

//         // Add theme support for selective refresh for widgets.
//         add_theme_support('customize-selective-refresh-widgets');

//         /**
//          * Add support for core custom logo.
//          *
//          * @link https://codex.wordpress.org/Theme_Logo
//          */
//         add_theme_support('custom-logo', array(
//             'height' => 250,
//             'width' => 250,
//             'flex-width' => true,
//             'flex-height' => true,
//         ));
//     }
// endif;
// add_action('after_setup_theme', 'ssws_2019_setup');

// /**
//  * Set the content width in pixels, based on the theme's design and stylesheet.
//  *
//  * Priority 0 to make it available to lower priority callbacks.
//  *
//  * @global int $content_width
//  */
// function ssws_2019_content_width()
// {
//     // This variable is intended to be overruled from themes.
//     // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
//     // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
//     $GLOBALS['content_width'] = apply_filters('ssws_2019_content_width', 640);
// }
// add_action('after_setup_theme', 'ssws_2019_content_width', 0);

// /**
//  * Register widget area.
//  *
//  * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
//  */
// function ssws_2019_widgets_init()
// {
//     register_sidebar(array(
//         'name' => esc_html__('Sidebar', 'ssws-2019'),
//         'id' => 'sidebar-1',
//         'description' => esc_html__('Add widgets here.', 'ssws-2019'),
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<h2 class="widget-title">',
//         'after_title' => '</h2>',
//     ));
// }
// add_action('widgets_init', 'ssws_2019_widgets_init');

// /**
//  * Enqueue scripts and styles.
//  */
// function ssws_2019_scripts()
// {
//     wp_enqueue_style('ssws-2019-style', get_stylesheet_uri());

//     wp_enqueue_script('ssws-2019-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

//     wp_enqueue_script('ssws-2019-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

//     if (is_singular() && comments_open() && get_option('thread_comments')) {
//         wp_enqueue_script('comment-reply');
//     }
// }
// add_action('wp_enqueue_scripts', 'ssws_2019_scripts');

// /********************************************************/
// /* Register and enqueue a script that does not depend on a JavaScript library.
// /********************************************************/
// add_action('wp_enqueue_scripts', 'child_add_scripts');
// function child_add_scripts()
// {
//     wp_register_script(
//         'ssws-custom-js',
//         get_stylesheet_directory_uri() . '/js/app.min.js', // support for child-theme
//         // get_template_directory_uri() . '/js/app.min.js', // support for parent-theme
//         false,
//         '1.0',
//         true
//     );
//     wp_enqueue_script('ssws-custom-js');
// }
// // FYI in case you are writing some custom jQuery scripts:
// // http://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

// /**
//  * Implement the Custom Header feature.
//  */
// require get_template_directory() . '/inc/custom-header.php';

// /**
//  * Custom template tags for this theme.
//  */
// require get_template_directory() . '/inc/template-tags.php';

// /**
//  * Functions which enhance the theme by hooking into WordPress.
//  */
// require get_template_directory() . '/inc/template-functions.php';

// /**
//  * Customizer additions.
//  */
// require get_template_directory() . '/inc/customizer.php';

// /**
//  * Load Jetpack compatibility file.
//  */
// if (defined('JETPACK__VERSION')) {
//     require get_template_directory() . '/inc/jetpack.php';
// }

// /**
//  * Load WooCommerce compatibility file.
//  */
// if (class_exists('WooCommerce')) {
//     require get_template_directory() . '/inc/woocommerce.php';
// }

// #################################################################
// ######################### TIMBER ################################
// #################################################################

/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */
if (!class_exists('Timber')) {
    add_action('admin_notices', function () {
        echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
    });
    add_filter('template_include', function ($template) {
        return get_stylesheet_directory() . '/static/no-timber.html';
    });
    return;
}
// initialize the Timber object
$timber = new Timber\Timber();
/**
 * Sets the directories (inside your theme) to find .twig files
 */
Timber::$dirname = array('templates', 'views', 'twig-templates');
/**
 * By default, Timber does NOT autoescape values. Want to enable Twig's autoescape?
 * No prob! Just set this value to true
 */
Timber::$autoescape = false;
/**
 * We're going to configure our theme inside of a subclass of Timber\Site
 * You can move this to its own file and include here via php's include("MySite.php")
 */
class StarterSite extends Timber\Site
{
    /** Add timber support. */
    public function __construct()
    {
        add_action('after_setup_theme', array($this, 'theme_supports'));
        add_filter('timber/context', array($this, 'add_to_context'));
        add_filter('timber/twig', array($this, 'add_to_twig'));
        add_action('init', array($this, 'register_post_types'));
        add_action('init', array($this, 'register_taxonomies'));
        parent::__construct();
    }
    /** This is where you can register custom post types. */
    public function register_post_types()
    {
    }
    /** This is where you can register custom taxonomies. */
    public function register_taxonomies()
    {
    }
    /** This is where you add some context
     *
     * @param string $context context['this'] Being the Twig's {{ this }}.
     */
    public function add_to_context($context)
    {
        $context['foo'] = 'bar';
        $context['stuff'] = 'I am a value set in your functions.php file';
        $context['notes'] = 'These values are available everytime you call Timber::context();';
        $context['menu'] = new Timber\Menu();
        $context['site'] = $this;
        return $context;
    }
    public function theme_supports()
    {
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
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5', array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support(
            'post-formats', array(
                'aside',
                'image',
                'video',
                'quote',
                'link',
                'gallery',
                'audio',
            )
        );
        add_theme_support('menus');
    }
    /** This Would return 'foo bar!'.
     *
     * @param string $text being 'foo', then returned 'foo bar!'.
     */
    public function myfoo($text)
    {
        $text .= ' bar!';
        return $text;
    }
    /** This is where you can add your own functions to twig.
     *
     * @param string $twig get extension.
     */
    public function add_to_twig($twig)
    {
        $twig->addExtension(new Twig_Extension_StringLoader());
        $twig->addFilter(new Twig_SimpleFilter('myfoo', array($this, 'myfoo')));
        return $twig;
    }
}
new StarterSite();
