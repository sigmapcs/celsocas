<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<main class="main" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">



			<!-- Do the left sidebar check -->
<!--			--><?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<section class="content" >

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</section><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
<!--		--><?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>


</main><!-- Container end -->


<aside class="side-bar side-bar-right">
  <?php get_template_part( 'sidebar-right' ); ?>
</aside>

<?php get_footer(); ?>


