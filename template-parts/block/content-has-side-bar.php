<?php
/**
 * Block Name: Animation Block
 *
 * This is the template that displays the blcok of cards block.
 */

$amp_fx = get_field('amp_fx');
$data_parallax_factor = get_field('data_parallax_factor');
$data_duration =  get_field('data_duration');
$data_margin_start =  get_field('data_margin_start');
$data_margin_end =  get_field('data_margin_end');
$data_easing =  get_field('data_easing');
$data_fly_in_distance =  get_field('data_fly_in_distance');
$data_repeat =  get_field('data_repeat');
$full_width_toggle =  get_field('full_width_toggle');
$full_width_toggle_mobile =  get_field('full_width_toggle_mobile');
$full_width_toggle_desktop =  get_field('full_width_toggle_desktop');
$custom_margins_toggle =  get_field('custom_margins_toggle');
$custom_margins_top =  get_field('custom_margins_top');
$custom_margins_bottom =  get_field('custom_margins_bottom');
$custom_margins_right =  get_field('custom_margins_right');
$custom_margins_left =  get_field('custom_margins_left');

// create id attribute for specific styling
$id = 'newAsideSection-' . $block['id'];

// create additionnal class options from block additional css settings
$add_class = $block['className'] ? '' . $block['className'] : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div class="blockWrapperStyle">

<section id="<?php echo $id; ?>" class="blockWrapper <?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; if (!empty($full_width_toggle_mobile)) : echo 'fullWidthMobile'; endif; if (!empty($full_width_toggle_desktop)) : echo 'fullWidthDesktop'; endif;?>" >


				<?php
		$template = array(
			array('core/heading', array(
				'level' => 2,
				'content' => 'Replace This Block w/ Two New Ones',
			)),
			array( 'core/paragraph', array(
				'content' => '<strong>Side Bar Menu Items</strong> <br /><strong>Side Bar Block Items</strong>  ',
			) )
		);

			echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
			$form_id = get_option( 'options_be_release_info_form' );
			if( !empty( $form_id ) && function_exists( 'wpforms_display' ) )
				wpforms_display( $form_id, true, true );
		?>




		</section><!-- end .blockWrapper -->

	</div>
