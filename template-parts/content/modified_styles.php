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
<?php if (null != get_theme_mod( 'hero_text_grid_toggle') ) : { ?>
	<?php if ('center' != get_theme_mod( 'hero_title_grid_area') ) : { ?>
		@media screen and (min-width: 48.1em) {
			.titleTagWrapper.heroTextgrid {
				grid-template-columns: 1fr 1fr 1fr;
			}
			.heroButtons {
				top: 0;
				align-self: center;
			}
			.titleTagWrapper.heroTextgrid .centerHero {
			    grid-gap: 1rem;
}
		}
	<?php } endif; ?>
	<?php if ('center' != get_theme_mod( 'hero_title_grid_area') ) : { ?>

		<?php } endif; ?>
<?php } endif; ?>
<?php if (null != get_theme_mod( 'secondary_top_bar_on_mobile') ) : { ?>
	@media screen and (max-width: 48em) {
	.navSecondaryInc #secondary-top-bar, .secondary-menu-container {
		display: grid;
		z-index: 4;
	}
	.nav--toggled-on .secondary-menu-container {
		display: none;
	}
	#secondary-top-bar {
			top: 0;
			height: 2rem;
			background: pink;
			width: 100vw;
			display: grid;
			position: fixed;
			z-index: 1;
		}
		.secondary-menu-container {
		grid-area: secondary;
		display: grid;
		grid-template-columns: 1fr 1fr;
		margin: auto;
		width: 100vw;
		top: -.2rem;
		left: 0;
		position: fixed;
		z-index: 5;
	}
	.secondary-menu-container ul#leftRow {
			display: grid;
			grid-template-columns: 1fr;
			font-size: .4rem;
			place-items: center;
			z-index: 2;
    height: fit-content;
	}
	.secondary-menu-container ul#leftRow li {
		display: none;
	}
	.secondary-menu-container ul#leftRow li:first-child {
				font-size: .8rem;
				padding-top: .2rem;
				display:grid;
			}


			.secondary-menu-container ul#rightRow {
			    display: grid;
				grid-template-columns: repeat(auto-fill,minmax(10px,1fr));
				justify-content: space-around;
				align-items: baseline;
				grid-gap: 1.6rem;
				margin: auto 1rem;
				text-align: center;
				direction: rtl;
				place-items: center;
				z-index: 2;
			}
			.secondary-menu-container ul#rightRow li {
				font-size: .8rem;
				padding-top: .1rem;
				margin: 0;
			}
			.secondary-menu-container ul#rightRow li  img {
					width: 1.5rem;
				}

				.titleTagWrapper {
    margin-top: 0rem;
}
			}

	<?php } endif; ?>
<?php if (null != get_theme_mod( 'main_margins_mobile')) : { ?>
.site main#primary {
	margin-left: <?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw;
	margin-right: <?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw;
	width: calc(100vw - calc(<?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw * 2));
}
@media screen and (max-width: 48em) {
.single main#primary {
		margin: 0 0 auto 0;
		width: calc(100vw - calc(<?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw * 2));

		/* & .entry-footer,
		& .comments-area,
		& .primary-sidebar {
			padding-left: 0;
			padding-right: 0;
			margin: 0 2.5rem 2em 0;
		}
		& .widget-area .widget {
			margin-left: 0;
			margin-right: 2rem;
		}
		& .site-main .post-navigation {
			padding: 0 0 2em;
			margin: 0 2.5rem 2em auto;
		} */
	}
	.site .fullWidth {
	margin-left: -<?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw;
	margin-right: -<?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw;
	min-width: 100vw;
}

.site .fullWidthMobile {
	margin-left: -<?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw;
	margin-right: -<?php echo get_theme_mod( 'main_margins_mobile', '2' ); ?>vw;
	min-width: 100vw;
}
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
.site .fullWidthDesktop {
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
<?php if (null != get_theme_mod( 'desktop_hero_height_adj')) : { ?>
	@media screen and (min-width: 48.1em) {
		.header-image, .header-image.polygon, .header-image.wave { {
	height: <?php echo get_theme_mod( 'desktop_hero_height_adj', '30' ); ?>rem;
}
	}
<?php } endif; ?>
<?php  if( get_theme_mod( 'footer-image-height') != null ):  { ?>
	.site-footer .baseBlock #themeLogo img {
		height:<?php echo get_theme_mod( 'footer-image-height', '' );?>vh;
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
<?php if ((null != get_theme_mod( 'secondary_top_bar')) || (null != get_theme_mod( 'secondary_top_bar_on_mobile'))) : { ?>
	.secondary-menu-container ul#leftRow li
	{
		font-size:<?php echo get_theme_mod( 'top_bar_font_size', '' );?>rem;
		color: <?php echo get_theme_mod( 'top_bar_text_color') ?>;
	}
	.secondary-menu-container ul#rightRow li {
		font-size:<?php echo get_theme_mod( 'top_bar_font_size', '' );?>rem;
		color: <?php echo get_theme_mod( 'top_bar_text_color') ?>;
	}
	.main-navigation .secondary-menu-container a {
		color: <?php echo get_theme_mod( 'top_bar_anchor_text_color') ?>;
	}
	.main-navigation .secondary-menu-container a:active {
		color: <?php echo get_theme_mod( 'top_bar_anchor_text_color') ?>;
	}
	.main-navigation .secondary-menu-container a:visited {
		color: <?php echo get_theme_mod( 'top_bar_anchor_text_color') ?>;
	}
	.main-navigation .secondary-menu-container a:hover {
		color: <?php echo get_theme_mod( 'top_bar_anchor_text_color') ?>;
	}
		<?php } endif; ?>
		<?php $contactfooterloop = new \WP_Query( array( 'post_type' => 'contact_items', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $contactfooterloop->have_posts() ) : $contactfooterloop->the_post();

			$total_footer_columns			= get_field('total_footer_columns');
			$column_1_toggle			= get_field('column_1_toggle');
			$column_2_toggle			= get_field('column_2_toggle');
			$column_3_toggle			= get_field('column_3_toggle');
			$total_footer_rows			= get_field('total_footer_rows');
			$show_map_in_footer			= get_field('show_map_in_footer');
			$show_address_in_footer			= get_field('show_address_in_footer');
			$show_social_andor_contact_in_footer			= get_field('show_social_andor_contact_in_footer');

			?>
<?php if (null != $total_footer_columns) : { ?>
			<?php if (1 == $column_1_toggle) : { ?>
			.site-footer .topBlock .leftBlock {
			grid-area: left;
		}
		<?php } endif; ?>
		<?php if (2 == $column_1_toggle) : { ?>
			.site-footer .topBlock .middleBlock {
			grid-area: left;
		}
		<?php } endif; ?>
		<?php if (3 == $column_1_toggle) : { ?>
			.site-footer .topBlock .rightBlock {
			grid-area: left;
		}
		<?php } endif; ?>
		<?php if (1 == $column_2_toggle) : { ?>
			.site-footer .topBlock .leftBlock {
			grid-area: middle;
		}
		<?php } endif; ?>
		<?php if (2 == $column_2_toggle) : { ?>
			.site-footer .topBlock .middleBlock {
			grid-area: middle;
		}
		<?php } endif; ?>
		<?php if (3 == $column_2_toggle) : { ?>
			.site-footer .topBlock .rightBlock {
			grid-area: middle;
		}
		<?php } endif; ?>
		<?php if (1 == $column_3_toggle) : { ?>
			.site-footer .topBlock .leftBlock {
			grid-area: right;
		}
		<?php } endif; ?>
		<?php if (2 == $column_3_toggle) : { ?>
			.site-footer .topBlock .middleBlock {
			grid-area: right;
		}
		<?php } endif; ?>
		<?php if (3 == $column_3_toggle) : { ?>
			.site-footer .topBlock .rightBlock {
			grid-area: right;
		}
		<?php } endif; ?>
	@media screen and (min-width: 48.1em)  {
		<?php if (1 == $total_footer_columns): { ?>
			.site-footer .topBlock {
			grid-template-columns: 1fr;
			grid-template-areas:
			"left"
			"middle"
			"right";
		}
		<?php } endif; ?>
		<?php if (2 == $total_footer_columns) : { ?>
			.site-footer .topBlock {
			grid-template-columns: 1fr 1fr;
			grid-template-areas:
			"left middle"
			"right right";
		}
		<?php } endif; ?>
		<?php if (3 == $total_footer_columns) : { ?>
			.site-footer .topBlock {
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-areas: "left middle right";
		}
		<?php } endif; ?>
	}
	.site-footer .topBlock .leftBlock, .site-footer .topBlock .middleBlock, .site-footer .topBlock .rightBlock {
	display: none;
}
	<?php if (null != $show_map_in_footer) : { ?>
		.site-footer .topBlock .leftBlock {
	display: grid;
}
		<?php } endif; ?>
		<?php if (null != $show_address_in_footer) : { ?>
			.site-footer .topBlock .middleBlock {
	display: grid;
}
		<?php } endif; ?>
		<?php if (null != $show_social_andor_contact_in_footer) : { ?>
			.site-footer .topBlock .rightBlock {
	display: grid;
}
		<?php } endif; ?>
	<?php } endif; ?>
	<?php endwhile;  wp_reset_query(); ?>
<?php if( get_theme_mod( 'hero_clip_select') == 10 ): { ?>
@media screen and (min-width: 48.1em)  {
	.page main#primary {
		margin-top: 0rem;
		}
	}
@media screen and (min-width: 48.1em)  {
	.home.page main#primary {
		margin-top: 0rem;
		}
	}



	<?php } endif; ?>

		</style>
<?php } endif; ?>

