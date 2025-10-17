<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

$inc_dir = 'inc';

$includes = [
//	'theme-settings.php',
	'setup.php',
//	'widgets.php',
	'enqueue.php',
//	'customizer.php',
//	'block-editor.php',
//	'misc.php',
//	'fonts-preload.php'
];

foreach ($includes as $file) {
	require_once get_theme_file_path($inc_dir . '/' . $file);
}
