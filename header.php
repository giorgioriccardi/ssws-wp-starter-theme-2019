<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SSWS_2019
 */

?>
<!-- <!doctype html>
<html <?php //language_attributes();?>>
<head>
	<meta charset="<?php //bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php //wp_head();?>
</head>

<body <?php body_class();?>> -->
<?php //wp_body_open();?>
<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'ssws-2019');?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding"> -->
			<?php
// the_custom_logo();
// if (is_front_page() && is_home()):
?>
				<!-- <h1 class="site-title"><a href="<?php //echo esc_url(home_url('/')); ?>" rel="home"><?php //bloginfo('name');?></a></h1> -->
				<?php
// else:
?>
				<!-- <p class="site-title"><a href="<?php //echo esc_url(home_url('/')); ?>" rel="home"><?php //bloginfo('name');?></a></p> -->
				<?php
// endif;
// $ssws_2019_description = get_bloginfo('description', 'display');
// if ($ssws_2019_description || is_customize_preview()):
?>
				<!-- <p class="site-description"><?php //echo $ssws_2019_description; /* WPCS: xss ok. */ ?></p> -->
			<?php //endif;?>
		<!--</div>--><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e('Primary Menu', 'ssws-2019');?></button> -->
			<?php
// wp_nav_menu(array(
//     'theme_location' => 'menu-1',
//     'menu_id' => 'primary-menu',
// ));
?>
		<!--</nav>--><!-- #site-navigation -->
	<!--</header>--><!-- #masthead -->

	<!-- <div id="content" class="site-content"> -->

<?php
/**
 * Third party plugins that hijack the theme will call wp_head() to get the header template.
 * We use this to start our output buffer and render into the view/page-plugin.twig template in footer.php
 *
 * If you're not using a plugin that requries this behavior (ones that do include Events Calendar Pro and
 * WooCommerce) you can delete this file and footer.php
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */
echo '<pre>GRC this is a Timber part8</pre>';
$GLOBALS['timberContext'] = Timber::context();
ob_start();