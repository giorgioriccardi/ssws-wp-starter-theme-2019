<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SSWS_2019
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */
$context = Timber::context();
$context['posts'] = new Timber\PostQuery();
$context['foo'] = 'bar';
$templates = array('index.twig');
if (is_home()) {
    array_unshift($templates, 'front-page.twig', 'home.twig');
}
Timber::render($templates, $context);
?>


<?php
// disable the original _s loop in favour of Timber's loop
// if (have_posts()):
//     if (is_home() && !is_front_page()):
?>
							<!-- <header>
								<h1 class="page-title screen-reader-text"><?php // single_post_title();?></h1>
							</header> -->
							<?php
// endif;
/* Start the Loop */
// while (have_posts()):
//     the_post();
/*
 * Include the Post-Type-specific template for the content.
 * If you want to override this in a child theme, then include a file
 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
 */
//     get_template_part('template-parts/content', get_post_type());
// endwhile;
// the_posts_navigation();
// else:
//     get_template_part('template-parts/content', 'none');
// endif;
// end of _s loop
?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();