<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
<!--	<label class="assistive-text" for="s">--><?php //esc_html_e( 'Search', 'understrap' ); ?><!--</label>-->
	<div class="input-group">
		<input class="field form-control" id="s" name="s" type="text"
			placeholder="Buscar" value="<?php the_search_query(); ?>">
    <button class="btn btn-search icon-search" id="searchsubmit" name="submit" type="submit"
            value=""> </button>
	</div>
</form>


