<?php

//add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('bogo_use_flags', '__return_false');

add_filter('bogo_language_switcher_links', 'washinwar_bogo_language_switcher_links', 10, 2);

function washinwar_bogo_language_switcher_links($links, $args)
{
	if (empty($links)) {
		return $links;
	}

	$current_locale = get_locale();
	$current_lang_link = null;

	foreach ($links as $key => $link) {
		if (isset($link['locale']) && $link['locale'] === $current_locale) {
			$current_lang_link = $link;
			unset($links[$key]);
			break;
		}
	}

	if ($current_lang_link) {
		array_unshift($links, $current_lang_link);
	}

	foreach ($links as &$link) {
		if ($link['native_name'] === 'English') {
			$link['native_name'] = 'EN';
		}
		if ($link['native_name'] === 'Українська') {
			$link['native_name'] = 'UA';
		}
		if ($link['native_name'] === 'Norsk nynorsk') {
			$link['native_name'] = 'NO';
		}
	}

	return $links;
}
