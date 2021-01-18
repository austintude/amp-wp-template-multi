<?php
/**
 * Template part for aSide Block Layout
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$block1_title	= get_field('block1_title');
$block1_title_2	= get_field('block1_title_2');
$block1_content_left	= get_field('block1_content_left');
$block1_content_right	= get_field('block1_content_right');
$block1_phone_link	= get_field('block1_phone_link');
$block1_phone_txt	= get_field('block1_phone_txt');
$side_bar_menu_items	= get_field('side_bar_menu_items');

// create id attribute for specific styling
$id = 'newAsideSubClock-' . $block['id'];
// create additionnal class options from block additional css settings
$add_class = $block['className'] ? '' . $block['className'] : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

	<InnerBlocks />

