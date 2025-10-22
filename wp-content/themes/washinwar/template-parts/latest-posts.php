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
		<h2 class="title"><?php esc_html_e( 'News', 'washinwar' ); ?></h2>
		<div class="posts-grid">
			<?php while ( $latest_posts_query->have_posts() ) : ?>
				<?php $latest_posts_query->the_post(); ?>
				<?php get_template_part( 'template-parts/block/post-item' ); ?>
			<?php endwhile; ?>
		</div>
		<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn more-news"><?php esc_html_e( 'All news', 'washinwar' ); ?></a>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>
