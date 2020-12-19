<?php
/**
 * Block Name: Single Card
 *
 * This is the template that displays the blcok of cards block.
 */

$same_size = get_field('same_size');
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
<div id="<?php echo $id; ?>" class="<?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?> <?php if(null != $same_size): ?>cardContent<?php endif; ?>" >
	<div  <?php if(null == $same_size): ?>class="cardContent"<?php endif; ?>>
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


			</div>
			</div>
