<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php /*
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. *
		esc_html_e( 'Skip to content', 'washinwar' );
		?>
	</a>
	<?php get_template_part( 'template-parts/header/site-header' ); ?>
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
*/ ?>

<header class="main-header">
    <div class="container">
        <div class="site-logo">
			<a href="<?php echo home_url('/') ?>">
				<img src="<?php echo get_theme_file_uri('assets') ?>/img/logo.svg" class="desktop-only" width="237" height="48" alt="logo">
				<img src="<?php echo get_theme_file_uri('assets') ?>/img/logo-m.svg" class="mobile-only" width="31" height="40" alt="logo">
			</a>
        </div>
		<?php
		if (is_front_page()) {
			$news_url = home_url('/') . '#news';
		} else {
			$news_url = esc_url(get_permalink(get_option('page_for_posts')));
		}
		?>
		<?php if (get_locale() === 'en_US') { ?>
			<nav class="main-menu">
				<div class="main-menu-wrapper">
					<ul>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#about-project">About the Project</a></li>
						<li class="menu-item"><a href="<?php echo $news_url ?>">News</a></li>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#map">Map</a></li>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#stories">Stories</a></li>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#contact">Contacts</a></li>
					</ul>
				</div>
			</nav>
			<div class="main-right">
				<?php if ( $switcher = do_shortcode( '[bogo]' ) ) : ?>
					<div class="language-switcher">
						<?php echo $switcher; ?>
					</div>
				<?php endif; ?>
				<div class="support-btn">
					<a class="btn support-us" href="<?php echo home_url('/') ?>#support-us">Support</a>
				</div>
			</div>
		<?php } elseif (get_locale() === 'nn_NO') { ?>
			<nav class="main-menu">
				<div class="main-menu-wrapper">
					<ul>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#about-project">Om prosjektet</a></li>
						<li class="menu-item"><a href="<?php echo $news_url ?>">Nyheter</a></li>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#map">Kart</a></li>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#stories">Historier</a></li>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#contact">Kontakter</a></li>
					</ul>
				</div>
			</nav>
			<div class="main-right">
				<?php if ( $switcher = do_shortcode( '[bogo]' ) ) : ?>
					<div class="language-switcher">
						<?php echo $switcher; ?>
					</div>
				<?php endif; ?>
				<div class="support-btn">
					<a class="btn support-us" href="<?php echo home_url('/') ?>#support-us">Støtte</a>
				</div>
			</div>
		<?php } else { ?>
			<nav class="main-menu">
				<div class="main-menu-wrapper">
					<ul>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#about-project">Про проєкт</a></li>
						<li class="menu-item"><a href="<?php echo $news_url ?>">Новини</a></li>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#map">Мапа</a></li>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#stories">Історії</a></li>
						<li class="menu-item"><a href="<?php echo home_url('/') ?>#contact">Контакти</a></li>
					</ul>
				</div>
			</nav>
			<div class="main-right">
				<?php if ( $switcher = do_shortcode( '[bogo]' ) ) : ?>
					<div class="language-switcher">
						<?php echo $switcher; ?>
					</div>
				<?php endif; ?>
				<div class="support-btn">
					<a class="btn support-us" href="<?php echo home_url('/') ?>#support-us">Підтримати</a>
				</div>
			</div>
		<?php } ?>
        <div class="mobile-menu-toggle"></div>
    </div>
</header>
<main>
