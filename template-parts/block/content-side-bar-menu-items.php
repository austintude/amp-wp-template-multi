<?php
/**
 * Template part for aSide Block
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$side_bar_menu_items	= get_field('side_bar_menu_items');


// create id attribute for specific styling
$id = 'newAside-' . $block['id'];
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
<div id="<?php echo $id; ?>" class="aSide <?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>">
	<aside class="asideBlock">
	<?php
		$template = array(
			array('core/heading', array(
				'level' => 2,
				'content' => 'Update/Replace This Block ',
			)),
			array( 'core/list', array(
				'content' => '<a href="#menuitem1anchor">Menu Item 1</a> <br /> <small>Do not forget to update anchor links w matching anchor IDs </small>',
			) )
		);

		echo '<div class="' . $classes . '"' . $anchor . '>';
			echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
			$form_id = get_option( 'options_be_release_info_form' );
			if( !empty( $form_id ) && function_exists( 'wpforms_display' ) )
				wpforms_display( $form_id, true, true );
		echo '</div>';
		?>
	</aside>
</div><!-- .sideBar -->
