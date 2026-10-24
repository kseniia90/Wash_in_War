<?php
if (get_locale() === 'en_US') {
	$team = [
		[
			'name' => 'Olha Sydii',
			'role' => '#WASHinWAR Platform Lead & International Partnerships Coordinator',
			'linkedin_url' => 'https://www.linkedin.com/in/osydii',
			'img' => get_theme_file_uri('assets') . '/img/team/3.avif'
		],
		[
			'name' => 'Tetiana Yatsiuk',
			'role' => 'Head of WASH Programme, Caritas Ukraine',
			'linkedin_url' => 'https://www.linkedin.com/in/tetiana-yatsiuk',
			'img' => get_theme_file_uri('assets') . '/img/team/4.avif'
		],
		[
			'name' => 'Lesia Basarab',
			'role' => 'Advocacy Manager, Caritas Ukraine',
			'linkedin_url' => '',
			'img' => get_theme_file_uri('assets') . '/img/team/2.avif'
		],
		[
			'name' => 'Ivanna Ulei',
			'role' => 'Infrastructure Recovery Project Manager & Operations Expert',
			'linkedin_url' => '',
			'img' => get_theme_file_uri('assets') . '/img/team/1.avif'
		],
	];
} elseif (get_locale() === 'nb_NO') {
	$team = [
		[
			'name' => 'Olha Sydii',
			'role' => 'Leder for #WASHinWAR-plattformen og koordinator for internasjonale partnerskap',
			'linkedin_url' => 'https://www.linkedin.com/in/osydii',
			'img' => get_theme_file_uri('assets') . '/img/team/3.avif'
		],
		[
			'name' => 'Tetiana Yatsiuk',
			'role' => 'Leder for WASH-programmet, Caritas Ukraina',
			'linkedin_url' => 'https://www.linkedin.com/in/tetiana-yatsiuk',
			'img' => get_theme_file_uri('assets') . '/img/team/4.avif'
		],
		[
			'name' => 'Lesia Basarab',
			'role' => 'Leder for påvirkningsarbeid, Caritas Ukraina',
			'linkedin_url' => '',
			'img' => get_theme_file_uri('assets') . '/img/team/2.avif'
		],
		[
			'name' => 'Ivanna Ulei',
			'role' => 'Prosjektleder for gjenoppbygging av infrastruktur og operasjonell ekspert',
			'linkedin_url' => '',
			'img' => get_theme_file_uri('assets') . '/img/team/1.avif'
		],
	];
} else {
	$team = [
		[
			'name' => 'Ольга Сидій',
			'role' => 'Керівниця платформи #WASHinWAR та координаторка міжнародних партнерств',
			'linkedin_url' => 'https://www.linkedin.com/in/osydii',
			'img' => get_theme_file_uri('assets') . '/img/team/3.avif'
		],
		[
			'name' => 'Тетяна Яцюк',
			'role' => 'Керівниця WASH-програми Карітас України',
			'linkedin_url' => 'https://www.linkedin.com/in/tetiana-yatsiuk',
			'img' => get_theme_file_uri('assets') . '/img/team/4.avif'
		],
		[
			'name' => 'Леся Басараб',
			'role' => 'Менеджерка з адвокації Карітас України',
			'linkedin_url' => '',
			'img' => get_theme_file_uri('assets') . '/img/team/2.avif'
		],
		[
			'name' => 'Іванна Улей',
			'role' => 'Менеджерка проєкту з відновлення інфраструктури та операційна експертка',
			'linkedin_url' => '',
			'img' => get_theme_file_uri('assets') . '/img/team/1.avif'
		],
	];
}
?>
<div class="team-grid">
	<?php foreach ($team as $item) { ?>
		<article class="team-card">
			<div class="image-wrapper">
				<img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>" width="640" height="800"
					 loading="lazy">
			</div>
			<div class="content">
				<h3 class="name"><?php echo $item['name'] ?></h3>
				<p class="role"><?php echo $item['role'] ?></p>
				<?php if ($item['linkedin_url']) { ?>
				<a href="<?php echo $item['linkedin_url'] ?>" class="social" target="_blank">
					<svg class="icon" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
						<path fill="currentColor"
							  d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.54a1.62 1.62 0 1 0 0 3.24 1.62 1.62 0 0 0 0-3.24z"/>
					</svg>
				</a>
				<?php } ?>
			</div>
		</article>
	<?php } ?>
</div>
