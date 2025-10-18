<?php
// Display 5 latest posts ordered by date
$latest_posts_query = new WP_Query( array(
	'posts_per_page' => 3,
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC'
));

if ( $latest_posts_query->have_posts() ) : ?>
	<div class="latest-posts">
		<h2 class="title">Новини</h2>
		<div class="posts-grid">
			<?php while ( $latest_posts_query->have_posts() ) : ?>
				<?php $latest_posts_query->the_post(); ?>
				<?php get_template_part( 'template-parts/block/post-item' ); ?>
			<?php endwhile; ?>
		</div>
		<div class="items">
<!--			--><?php //while ( $latest_posts_query->have_posts() ) : $latest_posts_query->the_post(); ?>
<!--				<div class="item">-->
<!--					<div class="col">-->
<!--						<p class="subtitle">--><?php //the_title(); ?><!--</p>-->
<!--						<p class="desc">--><?php //echo get_the_excerpt(); ?><!--</p>-->
<!--						<a href="--><?php //the_permalink(); ?><!--" class="btn">Читати більше</a>-->
<!--					</div>-->
<!--				</div>-->
<!--			--><?php //endwhile; ?>
		</div>
		<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn more-news">Всі новини</a>
	</div>
	<?php wp_reset_postdata(); ?>
<?php else : ?>
	<p><?php esc_html_e('Немає новин для показу.', 'washinwar'); ?></p>
<?php endif; ?>




<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
    <header class="page-header alignwide">
        <h1 class="page-title"><?php single_post_title(); ?></h1>
    </header>
<?php endif; ?>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
//        get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
    }
} else {
    // If no content, include the "No posts found" template.
    get_template_part( 'template-parts/content/content-none' );
}
