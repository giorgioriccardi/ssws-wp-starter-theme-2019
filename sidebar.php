<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SSWS_2019
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<!--<aside id="secondary" class="widget-area">
	<?php // dynamic_sidebar( 'sidebar-1' ); ?>
</aside>--><!-- #secondary -->

<?php
/**
 * The Template for the sidebar containing the main widget area
 *
 * @package  WordPress
 * @subpackage  Timber
 */

Timber::render(array('sidebar.twig'), $data);
