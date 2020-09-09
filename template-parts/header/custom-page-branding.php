<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$tagline			= get_field('tagline');

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>

<div class="titleTagWrapper">
	<h1 class="site-title">
		<?php the_title(); ?>
	</h1>
	<h2 class="tagline">
	<?php echo $tagline; ?>
	</h2>
	<?php
					get_template_part( 'template-parts/content/ctaHero' );
			?>
</div>

</div><!-- .site-branding -->
