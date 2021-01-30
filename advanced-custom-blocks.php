<?php
add_action('acf/init', 'my_acf_init');
function my_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block_type( array(
			'title'				=> __( 'Testimonial Wrapper' ),
			'name'				=> 'testimonial_wrapper',
			'render_template'	=> 'template-parts/block/content-testimonial-wrapper.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'			=> __( 'Grid w/ InnerBlock' ),
			'name'			=> 'grid_cards',
			'render_template'	=> 'template-parts/block/content-grid-cards.php',
			'mode'			=> 'preview',
			'icon'			=> 'dashicons-schedule',
			'supports'		=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'				=> __( 'Single Card' ),
			'name'				=> 'single_card',
			'render_template'	=> 'template-parts/block/content-single-card.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'				=> __( 'Animation Block' ),
			'name'				=> 'animation_block',
			'render_template'	=> 'template-parts/block/content-animation-block.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'				=> __( 'Custom Button' ),
			'name'				=> 'custom_button',
			'render_template'	=> 'template-parts/block/content-custom-button.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'				=> __( 'Multi Use Block' ),
			'name'				=> 'multi_use',
			'render_template'	=> 'template-parts/block/content-multi-use-block.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'				=> __( 'Has Side Bar' ),
			'name'				=> 'has_side_bar',
			'render_template'	=> 'template-parts/block/content-has-side-bar.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'				=> __( 'Side Bar Menu Items' ),
			'name'				=> 'side_bar_block_items',
			'render_template'	=> 'template-parts/block/content-side-bar-menu-items.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'				=> __( 'Side Bar Block Item' ),
			'name'				=> 'side_bar_block_item',
			'render_template'	=> 'template-parts/block/content-side-bar-block-item.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'				=> __( 'Accordion Block Wrapper' ),
			'name'				=> 'accordion_block_wrapper',
			'render_template'	=> 'template-parts/block/content-accordion-block-wrapper.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'				=> __( 'Accordion Block Title' ),
			'name'				=> 'accordion_title',
			'render_template'	=> 'template-parts/block/content-accordion-block-title.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		acf_register_block_type( array(
			'title'				=> __( 'Accordion Block Content' ),
			'name'				=> 'accordion_content',
			'render_template'	=> 'template-parts/block/content-accordion-block-content.php',
			'mode'				=> 'preview',
			'supports'			=> [
				'align'			=> true,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
	}
}
function my_acf_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}
?>
