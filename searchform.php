<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
*
 * @package Edith
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class=search-form__label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'edith' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" aria-label="submit" class="search-submit"><span class="dashicons dashicons-search"></span></button>
</form>
