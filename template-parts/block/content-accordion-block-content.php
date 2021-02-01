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
$id = 'newAccordionSection-' . $block['id'];

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

<section class="customAccordionSection" id="<?php echo $id; ?>">
<?php
		$template = array(
			array( 'core/paragraph', array(
				'content' => '<strong>This block can be any block type: <ul><li>A simple paragraph or two </li> <li> A Grid block with one, two, 20 cards </li> <li> Any logical combination of a group of blocks </li> </ul> </strong> ',
			))
		);
			echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
			$form_id = get_option( 'options_be_release_info_form' );
			if( !empty( $form_id ) && function_exists( 'wpforms_display' ) )
				wpforms_display( $form_id, true, true );
		?>

	</section>


