<?php
/**
 * Block Name: Has Side Bar Block
 *
 * This is the template that displays the blcok of cards block.
 */

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
	<?php if ((null != $custom_padding_toggle) || (null != $custom_margins_toggle) || (null != $custom_margins_mobile_toggle) || (null != $custom_paddings_mobile_toggle)) : { include('acf-style-fields/custom-margins.php'); } endif; ?>
	<?php if (null != $font_adjustment_toggle) : {  include('acf-style-fields/custom-font-adjustments.php'); } endif; ?>
	</style>
<div id="<?php echo $id; ?>" class="blockLayout <?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>" >

	<InnerBlocks />
</div>

