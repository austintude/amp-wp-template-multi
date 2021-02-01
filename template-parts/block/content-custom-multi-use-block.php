<?php
/**
 * Block Name: Custom Button
 *
 * This is the template that displays the blcok of cards block.
 */

$button_hover_effects_toggle = get_field('button_hover_effects_toggle');
$button_hover_effect_options = get_field('button_hover_effect_options');
$button_background_color =  get_field('button_background_color');
$box_shadow_color =  get_field('box_shadow_color');
$button_hover_color =  get_field('button_hover_color');
$custom_button_padding = get_field('custom_button_padding');
$custom_button_border_radius = get_field('custom_button_border_radius');
$cta_lightbox_toggle = get_field('cta_lightbox_toggle');
$amp_fx = get_field('amp_fx');
$data_parallax_factor = get_field('data_parallax_factor');
$data_duration =  get_field('data_duration');
$data_margin_start =  get_field('data_margin_start');
$data_margin_end =  get_field('data_margin_end');
$data_easing =  get_field('data_easing');
$data_fly_in_distance =  get_field('data_fly_in_distance');
$data_repeat =  get_field('data_repeat');
$hover_effects_toggle = get_field('hover_effects_toggle');
$hover_effect_options = get_field('hover_effect_options');
$amp_fx_toggle = get_field('amp_fx_toggle');


// create id attribute for specific styling
$id = 'newMulti-' . $block['id'];

// create additionnal class options from block additional css settings
$add_class = $block['className'] ? '' . $block['className'] : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<?php include('acf-style-fields.php'); ?>
<style scoped>
	<?php if ((null != $custom_padding_toggle) || (null != $custom_margins_toggle) || (null != $custom_margins_mobile_toggle) || (null != $custom_paddings_mobile_toggle)) : { include('acf-style-fields/custom-margins.php'); } endif; ?>
	<?php if (null != $font_adjustment_toggle) : {  include('acf-style-fields/custom-font-adjustments.php'); } endif; ?>
	</style>
<section <?php if( null != $amp_fx_toggle ): ?>amp-fx="<?php foreach( $amp_fx as $amp_fxs ): ?><?php echo $amp_fxs; ?> <?php endforeach; ?>"<?php endif; ?> id="<?php echo $id; ?>"  <?php if( null != $data_parallax_factor ):?>data-parallax-factor="<?php the_field('data_parallax_factor');?>" <?php endif; ?>  <?php if( null != $data_duration ):?>data-duration="<?php the_field('data_duration');?>ms" <?php endif; ?> <?php if( null != $data_margin_start ):?>data-margin-start="<?php the_field('data_margin_start');?>%"<?php endif; ?> <?php if( null != $data_margin_end ):?>data-margin-end="<?php the_field('data_margin_end');?>%"<?php endif; ?> <?php if( null != $data_easing ): ?>data-easing="<?php the_field('data_easing'); ?>"<?php endif; ?> <?php if( null != $data_fly_in_distance ):?>data-fly-in-distance="<?php the_field('data_fly_in_distance');?>%"<?php endif; ?> <?php if( null != $data_repeat ): ?>data-repeat<?php endif; ?> class="<?php if(null != $hover_effects_toggle): ?> acf-hover-effect <?php
$hover_effect_options = get_field('hover_effect_options'); if( $hover_effect_options ): foreach( $hover_effect_options as $hover_effect_option ): ?>hvr-<?php echo $hover_effect_option; ?> <?php endforeach; endif; ?><?php endif; ?> <?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>">
<?php
		$template = array(
			array('core/heading', array(
				'level' => 2,
				'content' => 'Title Goes Here',
			)),
			array( 'core/paragraph', array(
				'content' => '<strong>Colorway:</strong> <br /><strong>Style Code:</strong>  <br /><strong>Release Date:</strong> <br /><strong>MSRP:</strong> ',
			) )
		);

		echo '<div class="' . $classes . '"' . $anchor . '>';
			echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
			$form_id = get_option( 'options_be_release_info_form' );
			if( !empty( $form_id ) && function_exists( 'wpforms_display' ) )
				wpforms_display( $form_id, true, true );
		echo '</div>';
		?>

</section>


