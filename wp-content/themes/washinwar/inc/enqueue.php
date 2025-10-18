<?php
/**
 * Enqueues scripts and styles.
 *
 */
function washinwar_scripts()
{
	wp_enqueue_style('washinwar-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));

//	if (wp_get_development_mode()) {
//		if (has_nav_menu('primary')) {
//			wp_enqueue_script(
//				'washinwar-primary-navigation-script',
//				get_template_directory_uri() . '/assets/js/frontend/primary-navigation.js',
//				array(),
//				wp_get_theme()->get('Version'),
//				array(
//					'in_footer' => true,
//					'strategy' => 'defer',
//				)
//			);
//		}
//
//		wp_enqueue_script(
//			'washinwar-swiper-custom',
//			get_template_directory_uri() . '/assets/js/frontend/swiper-custom.js',
//			array(),
//			wp_get_theme()->get( 'Version' ),
//			array(
//				'in_footer' => true,
//				'strategy'  => 'defer',
//			)
//		);
//
//        wp_enqueue_script(
//            'washinwar-choicesjs',
//            get_template_directory_uri() . '/assets/js/frontend/choices.js',
//            array(),
//            wp_get_theme()->get( 'Version' ),
//            array(
//                'in_footer' => true,
//                'strategy'  => 'defer',
//            )
//        );
//
//		wp_enqueue_script(
//			'washinwar-misc',
//			get_template_directory_uri() . '/assets/js/frontend/misc.js',
//			array(),
//			wp_get_theme()->get( 'Version' ),
//			array(
//				'in_footer' => true,
//				'strategy'  => 'defer',
//			)
//		);
//	} else {
		wp_enqueue_script(
			'washinwar-main-script',
			get_template_directory_uri() . '/main.js',
			array(
				'jquery'
			),
			wp_get_theme()->get('Version'),
			array(
				'in_footer' => true,
				'strategy' => 'defer',
			)
		);
//	}
}

add_action('wp_enqueue_scripts', 'washinwar_scripts');

//function washinwar_block_editor_script()
//{
//	wp_enqueue_script('washinwar-editor', get_theme_file_uri('/assets/js/editor/editor.js'), array(
//		'wp-blocks',
//		'wp-dom'
//	), wp_get_theme()->get('Version'), array('in_footer' => true));
//}
//
//add_action('enqueue_block_editor_assets', 'washinwar_block_editor_script');

