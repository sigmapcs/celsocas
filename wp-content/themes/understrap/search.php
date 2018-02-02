<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<main class="main" id="search-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">



			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<section class="content" >

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						
							<h1 class="page-title"><?php printf(
							/* translators:*/
							 esc_html__( 'Search Results for: %s', 'understrap' ),
								'<span>' . get_search_query() . '</span>' ); ?></h1>

					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'search' );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</section><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
<!--		--><?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>



</main><!-- Container end -->

<aside class="side-bar side-bar-right">
  <?php get_template_part( 'sidebar-right' ); ?>
</aside>

<?php get_footer(); ?>
