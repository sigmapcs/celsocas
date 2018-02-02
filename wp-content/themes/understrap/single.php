<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<main class="main" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">



			<!-- Do the left sidebar check -->
<!--			--><?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<div class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #main -->

  </div><!-- #primary -->

		<!-- Do the right sidebar check -->
<!--		--><?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>



</main><!-- Container end -->

<aside class="side-bar side-bar-right">
  <?php get_template_part( 'sidebar-right' ); ?>
</aside>

<?php get_footer(); ?>
