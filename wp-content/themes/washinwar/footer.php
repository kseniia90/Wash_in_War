<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
</main>
<footer class="main-footer" id="contact">
    <div class="container footer-cols">
        <div class="col col-1">
            <div class="site-logo">
				<a href="<?php echo home_url('/') ?>">
                	<img src="<?php echo get_theme_file_uri('assets') ?>/img/logo.svg" width="177" height="36" alt="logo">
				</a>
                <a href="https://caritas.ua"><img src="<?php echo get_theme_file_uri('assets') ?>/img/logo-footer2.svg" width="177" height="33" alt="logo"></a>
            </div>
        </div>
        <div class="col col-2">
			<?php if (get_locale() === 'en_US') { ?>
				<div class="footer-address">
					<p class="subtitle">National Office:</p>
					<ul>
						<li>Bohdana Khmelnytskoho 48a, Kyiv</li>
						<li><a href="mailto:secretary@caritas.ua">secretary@caritas.ua</a></li>
					</ul>
				</div>
				<div class="footer-address">
					<p class="subtitle">Mailing Address:</p>
					<ul>
						<li>04053</li>
						<li>Kyiv-53</li>
						<li>P.O. Box 81</li>
					</ul>
				</div>
			<?php } elseif (get_locale() === 'nb_NO') { ?>
				<div class="footer-address">
					<p class="subtitle">Nasjonalt kontor:</p>
					<ul>
						<li>Bohdana Khmelnytskoho 48a, Kyiv</li>
						<li><a href="mailto:secretary@caritas.ua">secretary@caritas.ua</a></li>
					</ul>
				</div>
				<div class="footer-address">
					<p class="subtitle">Postadresse:</p>
					<ul>
						<li>04053</li>
						<li>Kyiv-53</li>
						<li>P.O. Box 81</li>
					</ul>
				</div>
			<?php } else { ?>
				<div class="footer-address">
					<p class="subtitle">Національний офіс:</p>
					<ul>
						<li>Богдана Хмельницького 48а, Київ</li>
						<li><a href="mailto:secretary@caritas.ua">secretary@caritas.ua</a></li>
					</ul>
				</div>
				<div class="footer-address">
					<p class="subtitle">Адреса для листування:</p>
					<ul>
						<li>04053</li>
						<li>Київ-53</li>
						<li>а/с-81</li>
					</ul>
				</div>
			<?php } ?>
		</div>
    </div>
    <div class="container social">
        <a class="facebook" href="https://www.facebook.com/caritasukraine" target="_blank">
            <svg width="20" height="30" viewBox="0 0 12 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 8.5H0V12.5H3V24.5H8V12.5H11.642L12 8.5H8V6.833C8 5.878 8.192 5.5 9.115 5.5H12V0.5H8.192C4.596 0.5 3 2.083 3 5.115V8.5Z" fill="black"/>
            </svg>
        </a>
        <a class="linkedin" href="https://www.linkedin.com/company/caritasukraine" target="_blank">
            <svg fill="#000000" height="27" width="27" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310" xml:space="preserve">
                    <g>
                        <path d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73 C77.16,101.969,74.922,99.73,72.16,99.73z"/>
                        <path d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4 c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z"/>
                        <path d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599 c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319 c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995 C310,145.43,300.549,94.761,230.454,94.761z"/>
                    </g>
                </svg>
        </a>
        <a class="insta" href="https://www.instagram.com/caritasukraine" target="_blank">
            <svg width="30" height="30" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2.663C15.204 2.663 15.584 2.675 16.85 2.733C20.102 2.881 21.621 4.424 21.769 7.652C21.827 8.917 21.838 9.297 21.838 12.501C21.838 15.706 21.826 16.085 21.769 17.35C21.62 20.575 20.105 22.121 16.85 22.269C15.584 22.327 15.206 22.339 12 22.339C8.796 22.339 8.416 22.327 7.151 22.269C3.891 22.12 2.38 20.57 2.232 17.349C2.174 16.084 2.162 15.705 2.162 12.5C2.162 9.296 2.175 8.917 2.232 7.651C2.381 4.424 3.896 2.88 7.151 2.732C8.417 2.675 8.796 2.663 12 2.663ZM12 0.5C8.741 0.5 8.333 0.514 7.053 0.572C2.695 0.772 0.273 3.19 0.073 7.552C0.014 8.833 0 9.241 0 12.5C0 15.759 0.014 16.168 0.072 17.448C0.272 21.806 2.69 24.228 7.052 24.428C8.333 24.486 8.741 24.5 12 24.5C15.259 24.5 15.668 24.486 16.948 24.428C21.302 24.228 23.73 21.81 23.927 17.448C23.986 16.168 24 15.759 24 12.5C24 9.241 23.986 8.833 23.928 7.553C23.732 3.199 21.311 0.773 16.949 0.573C15.668 0.514 15.259 0.5 12 0.5ZM12 6.338C8.597 6.338 5.838 9.097 5.838 12.5C5.838 15.903 8.597 18.663 12 18.663C15.403 18.663 18.162 15.904 18.162 12.5C18.162 9.097 15.403 6.338 12 6.338ZM12 16.5C9.791 16.5 8 14.71 8 12.5C8 10.291 9.791 8.5 12 8.5C14.209 8.5 16 10.291 16 12.5C16 14.71 14.209 16.5 12 16.5ZM18.406 4.655C17.61 4.655 16.965 5.3 16.965 6.095C16.965 6.89 17.61 7.535 18.406 7.535C19.201 7.535 19.845 6.89 19.845 6.095C19.845 5.3 19.201 4.655 18.406 4.655Z" fill="black"/>
            </svg>
        </a>
        <a class="youtube" href="https://www.youtube.com/caritasukraine" target="_blank">
            <svg width="35" height="30" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.615 0.684003C16.011 0.438003 7.984 0.439003 4.385 0.684003C0.488 0.950003 0.029 3.304 0 9.5C0.029 15.685 0.484 18.049 4.385 18.316C7.985 18.561 16.011 18.562 19.615 18.316C23.512 18.05 23.971 15.696 24 9.5C23.971 3.315 23.516 0.951003 19.615 0.684003ZM9 13.5V5.5L17 9.493L9 13.5Z" fill="black"/>
            </svg>
        </a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
