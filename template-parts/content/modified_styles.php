<?php if (null != get_theme_mod( 'main_nav_text_color') || get_theme_mod( 'global_styles_options')) : { ?>
	<style amp-custom>
<?php if (null != get_theme_mod( 'global_styles_options')) : { ?>
	:root {
		<?php if (null != get_theme_mod( 'global-font-color')) : { ?>
			--global-font-color: <?php echo get_theme_mod( 'global-font-color') ?>;
		<?php } endif; ?>
		<?php if (null != get_theme_mod( 'global_font_family')) : { ?>
			--global-font-family: <?php echo get_theme_mod( 'global_font_family') ?>;
		<?php } endif; ?>
		<?php if (null != get_theme_mod( 'global-font-size')) : { ?>
			--global-font-size: <?php echo get_theme_mod( 'global-font-size') ?>;
		<?php } endif; ?>
		<?php if (null != get_theme_mod( 'global-font-line-height')) : { ?>
			--global-font-line-height: <?php echo get_theme_mod( 'global-font-line-height') ?>;
		<?php } endif; ?>
		<?php if (null != get_theme_mod( 'highlight-font-family')) : { ?>
			--highlight-font-family: <?php echo get_theme_mod( 'highlight-font-family') ?>;
		<?php } endif; ?>
		<?php if (null != get_theme_mod( 'content-width')) : { ?>
			--content-width: <?php echo get_theme_mod( 'content-width') ?>rem;
		<?php } endif; ?>
		<?php if (null != get_theme_mod( 'color-theme-primary')) : { ?>
			--color-theme-primary: <?php echo get_theme_mod( 'color-theme-primary') ?>;
		<?php } endif; ?>
		<?php if (null != get_theme_mod( 'color-theme-secondary')) : { ?>
			--color-theme-secondary: <?php echo get_theme_mod( 'color-theme-secondary') ?>;
		<?php } endif; ?>
		<?php if (null != get_theme_mod( 'color-link')) : { ?>
			--color-link: <?php echo get_theme_mod( 'color-link') ?>;
		<?php } endif; ?>
		<?php if (null != get_theme_mod( 'color-link-visited')) : { ?>
			--color-link-visited: <?php echo get_theme_mod( 'color-link-visited') ?>;
		<?php } endif; ?>
		<?php if (null != get_theme_mod( 'color-link-active')) : { ?>
			--color-link-active: <?php echo get_theme_mod( 'color-link-active') ?>;
		<?php } endif; ?>
	}
<?php } endif; ?>
<?php if (null != get_theme_mod( 'main_margins_mobile')) : { ?>
.site main#primary {
	margin-left: <?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw;
	margin-right: <?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw;
	width: calc(100vw - calc(<?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw * 2));
}
.site .fullWidth {
	margin-left: -<?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw;
	margin-right: -<?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw;
	min-width: 100vw;
}
<?php } endif; ?>
<?php if (null != get_theme_mod( 'main_margins')) : { ?>
 @media screen and (min-width: 48.1em) {
	.site main#primary {
	margin-left: <?php echo get_theme_mod( 'main_margins', '2' ); ?>vw;
	margin-right: <?php echo get_theme_mod( 'main_margins', '2' ); ?>vw;
	width: calc(100vw - calc(<?php echo get_theme_mod( 'main_margins', '2' ); ?>vw * 2));
	}
	.site .fullWidth {
	margin-left: -<?php echo get_theme_mod( 'main_margins', '2' ); ?>vw;
	margin-right: -<?php echo get_theme_mod( 'main_margins', '2' ); ?>vw;
	min-width: 100vw;
}
}
<?php } endif; ?>
<?php if (null != get_theme_mod( 'desktop_logo_height_adj')) : { ?>
	@media screen and (min-width: 48.1em) {
		.navSecondaryInc .custom-logo {
	height: <?php echo get_theme_mod( 'desktop_logo_height_adj', '3' ); ?>rem;
}
	}
<?php } endif; ?>
<?php  if( get_theme_mod( 'footer-image-height') != null ):  { ?>
	.site-footer .baseBlock #themeLogo img {
		height:<?php echo get_theme_mod( 'footer-image-height', '' );?>vh;
}
	<?php } endif; ?>
	<?php if (null != get_theme_mod( 'top_bar_font_size')) : { ?>
	.secondary-menu-container ul#leftRow li, .secondary-menu-container ul#rightRow li,
	{
		font-size:<?php echo get_theme_mod( 'top_bar_font_size', '' );?>rem;
	}
		<?php } endif; ?>
<?php if (null != get_theme_mod( 'main_nav_text_color')) : { ?>
		.main-navigation a {
    color: <?php echo get_theme_mod( 'main_nav_text_color') ?>;
}
.main-navigation ul li.current-menu-item a {
    color: <?php echo get_theme_mod( 'main_nav_current_color') ?>;
}
<?php if (null != get_theme_mod( 'current_gradient_color_start')) : { ?>
.main-navigation ul li.current-menu-item a:after {
    background: linear-gradient(90deg,<?php echo get_theme_mod( 'current_gradient_color_start') ?>,<?php echo get_theme_mod( 'current_gradient_color_end') ?>);
}
<?php } endif; ?>
<?php if (null != get_theme_mod( 'drop_down_background_color')) : { ?>
			.nav--toggle-sub ul ul {
				background:<?php echo get_theme_mod( 'drop_down_background_color') ?>
			}
		<?php } endif; ?>
<?php if (null != (get_theme_mod( 'drop_down_hover_background_color') || get_theme_mod( 'drop_down_hover_text_color'))): { ?>
.main-navigation ul ul li a:hover {
	background: <?php echo get_theme_mod( 'drop_down_hover_background_color') ?>;
	color: <?php echo get_theme_mod( 'drop_down_hover_text_color') ?>;
}
<?php } endif; ?>
<?php if (null != (get_theme_mod( 'site_text_color') || get_theme_mod( 'site_background_color'))): { ?>
.site { color: <?php echo get_theme_mod( 'site_text_color', '' ); ?>;
	background: <?php echo get_theme_mod( 'site_background_color', '' ); ?>
}
<?php } endif; ?>
<?php } endif; ?>
		</style>
<?php } endif; ?>

