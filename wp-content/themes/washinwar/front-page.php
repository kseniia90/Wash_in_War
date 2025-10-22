<?php
get_header();
if (get_locale() === 'en_US') {
	get_template_part('front-page-en');
} elseif (get_locale() === 'nb_NO') {
	get_template_part('front-page-no');
} else {
	get_template_part('front-page-ua');
}
get_footer();
