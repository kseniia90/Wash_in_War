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
				<a class="linkedin" href="https://www.linkedin.com/company/caritasukraine" target="_blank">
					<svg fill="#fff" height="27" width="27" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310" xml:space="preserve">
						<g>
							<path d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73 C77.16,101.969,74.922,99.73,72.16,99.73z"></path>
							<path d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4 c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z"></path>
							<path d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599 c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319 c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995 C310,145.43,300.549,94.761,230.454,94.761z"></path>
						</g>
					</svg>
				</a>
				<?php if ( $switcher = do_shortcode( '[bogo]' ) ) : ?>
					<div class="language-switcher">
						<?php echo $switcher; ?>
					</div>
				<?php endif; ?>
				<div class="support-btn">
					<a class="btn support-us" href="<?php echo home_url('/') ?>#support-us">Support</a>
				</div>
			</div>
		<?php } elseif (get_locale() === 'nb_NO') { ?>
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
				<a class="linkedin" href="https://www.linkedin.com/company/caritasukraine" target="_blank">
					<svg fill="#fff" height="27" width="27" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310" xml:space="preserve">
						<g>
							<path d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73 C77.16,101.969,74.922,99.73,72.16,99.73z"></path>
							<path d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4 c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z"></path>
							<path d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599 c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319 c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995 C310,145.43,300.549,94.761,230.454,94.761z"></path>
						</g>
					</svg>
				</a>
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
				<a class="linkedin" href="https://www.linkedin.com/company/caritasukraine" target="_blank">
					<svg fill="#fff" height="27" width="27" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310" xml:space="preserve">
						<g>
							<path d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73 C77.16,101.969,74.922,99.73,72.16,99.73z"></path>
							<path d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4 c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z"></path>
							<path d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599 c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319 c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995 C310,145.43,300.549,94.761,230.454,94.761z"></path>
						</g>
					</svg>
				</a>
				<?php if ( shortcode_exists( 'bogo' ) ) : ?>
					<div class="language-switcher">
						<?php echo do_shortcode( '[bogo]' ) ?>
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
