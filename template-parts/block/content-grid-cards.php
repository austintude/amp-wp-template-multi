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

// create id attribute for specific styling
$id = 'newCard-' . $block['id'];

// create additionnal class options from block additional css settings
$add_class = $block['className'] ? '' . $block['className'] : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<?php include('acf-style-fields.php'); ?>
<style scoped>
	<?php include('acf-style-fields/custom-margins.php'); ?>
	<?php include('acf-style-fields/custom-font-adjustments.php'); ?>
	</style>
<?php wp_reset_query();?>
<section id="<?php echo $id; ?>" class="gridCardLoop newCard<?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>">
<InnerBlocks  />

</section>
