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
 */

get_header(); ?>

<div class="container">
<?php
if ( have_posts() ) { ?>
	<div class="latest-posts">
		<h1 class="title"><?php single_post_title(); ?></h1>
		<div class="items">
		<?php while ( have_posts() ) {
		the_post(); ?>
			<div class="item">
				<div class="col">
					<p class="subtitle"><?php the_title(); ?></p>
					<p class="desc"><?php echo get_the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn">Читати більше</a>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
<?php } else {
	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );
} ?>
</div>
<?php get_footer();
