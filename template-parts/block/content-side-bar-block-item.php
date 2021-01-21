<?php
/**
 * Block Name: Has Side Bar Block
 *
 * This is the template that displays the blcok of cards block.
 */

$custom_margins_toggle =  get_field('custom_margins_toggle');
$custom_margins_top =  get_field('custom_margins_top');
$custom_margins_bottom =  get_field('custom_margins_bottom');
$custom_margins_right =  get_field('custom_margins_right');
$custom_margins_left =  get_field('custom_margins_left');
$custom_margins_mobile_toggle =  get_field('custom_margins_mobile_toggle');
$custom_margins_top_mobile =  get_field('custom_margins_top_mobile');
$custom_margins_bottom_mobile =  get_field('custom_margins_bottom_mobile');
$custom_margins_right_mobile =  get_field('custom_margins_right_mobile');
$custom_margins_left_mobile =  get_field('custom_margins_left_mobile');
$custom_paddings_toggle =  get_field('custom_paddings_toggle');
$custom_paddings_top =  get_field('custom_paddings_top');
$custom_paddings_bottom =  get_field('custom_paddings_bottom');
$custom_paddings_right =  get_field('custom_paddings_right');
$custom_paddings_left =  get_field('custom_paddings_left');
$custom_paddings_mobile_toggle =  get_field('custom_paddings_mobile_toggle');
$custom_paddings_top_mobile =  get_field('custom_paddings_top_mobile');
$custom_paddings_bottom_mobile =  get_field('custom_paddings_bottom_mobile');
$custom_paddings_right_mobile =  get_field('custom_paddings_right_mobile');
$custom_paddings_left_mobile =  get_field('custom_paddings_left_mobile');
// create id attribute for specific styling
$id = 'side-bar-block-item-' . $block['id'];

// create additionnal class options from block additional css settings
$add_class = $block['className'] ? '' . $block['className'] : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// create anchor id ("id") from block setting ("anchor")
$anchor_id = $block['anchor'] ? '' . $block['anchor'] : '';
?>
<?php

// vars
$side_bar_menu_item_anchor_link = get_field('side_bar_menu_item_anchor_link');
$side_bar_menu_item_text = get_sub_field('side_bar_menu_item_text');

?>
<?php include('acf-style-fields.php'); ?>
<style scoped>
	<?php include('acf-style-fields/custom-margins.php'); ?>
	<?php include('acf-style-fields/custom-font-adjustments.php'); ?>
	</style>
<div id="<?php echo $id; ?>" class="blockLayout <?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>" >

	<InnerBlocks />
</div>

