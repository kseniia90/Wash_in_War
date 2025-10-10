<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

get_header();
?>
	<div class="container">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Page not found', 'washinwar' ); ?></h1>
		</header>
		<div class="error-404 not-found">
			<div class="page-content">
				<p><?php esc_html_e( 'The address is incorrect or the page no longer exists.', 'washinwar' ); ?></p>
				<?php //get_search_form(); ?>
			</div>
		</div>
	</div>
<?php
get_footer();
