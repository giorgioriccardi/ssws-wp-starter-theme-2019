<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package SSWS_2019
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php // if ( have_posts() ) : ?>

			<!-- <header class="page-header">
				<h1 class="page-title"> -->
					<?php
/* translators: %s: search query. */
// printf( esc_html__( 'Search Results for: %s', 'ssws-2019' ), '<span>' . get_search_query() . '</span>' );
?>
				</h1>
			<!--</header>--><!-- .page-header -->

			<?php
//     /* Start the Loop */
//     while ( have_posts() ) :
//         the_post();

//         /**
//          * Run the loop for the search to output the results.
//          * If you want to overload this in a child theme then include a file
//          * called content-search.php and that will be used instead.
//          */
//         get_template_part( 'template-parts/content', 'search' );

//     endwhile;

//     the_posts_navigation();

// else :

//     get_template_part( 'template-parts/content', 'none' );

// endif;
?>

<?php
/**
 * Search results page
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$templates = array('search.twig', 'archive.twig', 'index.twig');

$context = Timber::context();
$context['title'] = 'Search results for ' . get_search_query();
$context['posts'] = new Timber\PostQuery();

Timber::render($templates, $context);
?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
