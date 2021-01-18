<?php
/**
 * Template part for aSide Block
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
$id = 'newAside-' . $block['id'];
// create additionnal class options from block additional css settings
$add_class = $block['className'] ? '' . $block['className'] : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>
<div id="<?php echo $id; ?>" class="aSide <?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>">
	<aside class="asideBlock">
		<ul class="asideUl">
			<?php while (have_rows('side_bar_menu_items')) : the_row();

			// vars
			$side_bar_menu_item_text = get_sub_field('side_bar_menu_item_text');

			$side_bar_menu_item_anchor_link = get_sub_field('side_bar_menu_item_anchor_link');
			?>

		<li class="asideListItem">
			<a href="#<?php echo $side_bar_menu_item_anchor_link; ?>" option="" role="option" aria-selected="true" tabindex="0">
				<?php echo $side_bar_menu_item_text; ?>
			</a>
		</li>
			<?php endwhile; wp_reset_query();?>

		</ul>
	</aside>
</div><!-- .sideBar -->
