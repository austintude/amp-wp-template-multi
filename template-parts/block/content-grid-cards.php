<?php
/**
 * Block Name: Block of Cards
 *
 * This is the template that displays the blcok of cards block.
 */

$button_hover_effects_toggle = get_field('button_hover_effects_toggle');
$button_hover_effect_options = get_field('button_hover_effect_options');
$button_background_color =  get_field('button_background_color');
$box_shadow_color =  get_field('box_shadow_color');
$button_hover_color =  get_field('button_hover_color');
$customize_grid_dimensions_toggle =  get_field('customize_grid_dimensions_toggle');

// create id attribute for specific styling
$id = 'newGrid-' . $block['id'];

// create additionnal class options from block additional css settings
$add_class = $block['className'] ? '' . $block['className'] : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<?php include('acf-style-fields.php'); ?>
<style scoped>
	<?php if ((null != $custom_padding_toggle) || (null != $custom_margins_toggle) || (null != $custom_margins_mobile_toggle) || (null != $custom_paddings_mobile_toggle)) : { include('acf-style-fields/custom-margins.php'); } endif; ?>
	<?php if (null != $font_adjustment_toggle) : {  include('acf-style-fields/custom-font-adjustments.php'); } endif; ?>
	<?php if (null != $customize_grid_dimensions_toggle) : { $card_size =  get_field('card_size'); ?>
		@media screen and (min-width: 48.1em) {
			#<?php echo $id; ?>.gridCardLoop {
		grid-template-columns: repeat(auto-fit, minmax(<?php echo $card_size; ?>px, 1fr));
			}
	<?php } endif; ?>
	</style>
<section id="<?php echo $id; ?>" class="gridCardLoop newGrid<?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>">
<InnerBlocks  />

</section>
