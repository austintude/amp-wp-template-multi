<?php
/**
 * Block Name: Accordion Title Block
 *
 * This is the template that displays the title for the accordion block.
 */

$button_hover_effects_toggle = get_field('button_hover_effects_toggle');
$button_hover_effect_options = get_field('button_hover_effect_options');
$button_background_color =  get_field('button_background_color');
$box_shadow_color =  get_field('box_shadow_color');
$button_hover_color =  get_field('button_hover_color');
$marker_customization_toggle =  get_field('marker_customization_toggle');
// create id attribute for specific styling
// $id = 'newAccordionTitle-' . $block['id'];
$id = 'newAccordionTitle-' . $block['id'];

// create additionnal class options from block additional css settings
$add_class = $block['className'] ? '' . $block['className'] : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<?php include('acf-style-fields.php'); ?>
<style scoped>
	<?php if ((null != $custom_padding_toggle) || (null != $custom_margins_toggle) || (null != $custom_margins_mobile_toggle) || (null != $custom_paddings_mobile_toggle)) : { include('acf-style-fields/custom-margins.php'); } endif; ?>
	<?php if (null != $font_adjustment_toggle) : {  include('acf-style-fields/custom-font-adjustments.php'); } endif; ?>
	<?php
if (!empty($marker_customization_toggle)) : {
	$marker_color =  get_field('marker_color');
	$marker_background_color =  get_field('marker_background_color');
	$marker_display =  get_field('marker_display');
	?>
#<?php echo $id; ?> {
	background: <?php echo $marker_background_color; ?>;
}<?php if (null != $custom_margins_toggle) : { ?>
@media only screen and (min-width: 48.1rem) {
summary#<?php echo $id; ?> > * {
	<?php if (!empty($custom_margins_top)) : echo 'margin-top:'; the_field('custom_margin_top');  echo 'rem; '; endif; if (!empty($custom_margins_bottom)) : echo 'margin-bottom:'; the_field('custom_margin_bottom');  echo 'rem; '; endif;?>
}
}
<?php } endif;?>
<?php if (null != $custom_margins_mobile_toggle) : { ?>
	@media only screen and (max-width: 48rem) {
		summary#<?php echo $id; ?> > * {
	<?php if (!empty($custom_margins_top_mobile)) : echo 'margin-top:'; the_field('custom_margin_top_mobile');  echo 'rem; '; endif; if (!empty($custom_margins_bottom_mobile)) : echo 'margin-bottom:'; the_field('custom_margin_bottom_mobile');  echo 'rem; '; endif;?>
}
	}
<?php } endif;?>
summary#<?php echo $id; ?>::-webkit-details-marker {
	/* margin-left: -5rem; */
		color: <?php echo $marker_color; ?>;
		/* color: black; */
		<?php if (null == $marker_display) : ?>
		display:none;
		<?php endif; ?>
	}
<?php } endif; ?>
	</style>
<summary class="customAccordionTitle" id="<?php echo $id; ?>">
<?php
		$template = array(
			array('core/heading', array(
				'level' => 2,
				'content' => 'Place Title Here',
			))
		);
			echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
			$form_id = get_option( 'options_be_release_info_form' );
			if( !empty( $form_id ) && function_exists( 'wpforms_display' ) )
				wpforms_display( $form_id, true, true );
		?>

	</summary>


