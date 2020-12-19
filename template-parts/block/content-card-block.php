<?php
/**
 * Block Name: Block of Cards
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
<section id="<?php echo $id; ?>" class="gridCardLoop newCard<?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>">

<?php // Check value exists.
if( have_rows('new_card') ):

    // Loop through rows.
    while ( have_rows('new_card') ) : the_row();

        // Case: WYSIWYG layout.
		if( get_row_layout() == 'wysiwyg' ):
			$card_has_cta_button = get_sub_field('card_has_cta_button');
			?>
			<div <?php if(null != $same_size): ?>class="cardContent"<?php endif; ?>>
				<div  <?php if(null == $same_size): ?>class="cardContent"<?php endif; ?>>
					<InnerBlocks  />

					<?php the_sub_field('whateva'); ?>
					<?php if(null != $card_has_cta_button): ?>
					<button <?php if(null != ($button_background_color || $box_shadow_color) ): { ?>style="
	--button-background-color: <?php the_field('button_background_color')?>;
	--hvr-box-shadow: <?php the_field('box_shadow_color')?>;
	--hvr-background-color: <?php the_field('button_hover_color')?>;
	--button-txt-color: <?php the_field('button_text_color')?>;
	--hvr-button-txt-color: <?php the_field('button_text_color')?>;
	--button-hover-txt-color: <?php the_field('button_hover_text_color')?>;
	--hvr-box-shadow-glow:  <?php the_field('box_shadow_color')?>;
	--hvr-shadow-box-shadow:  <?php the_field('box_shadow_color')?>;
	--hvr-outset-box-shadow:  <?php the_field('box_shadow_color')?>;
	--hvr-inset-box-shadow:  <?php the_field('box_shadow_color')?>;
	--hvr-radial-background-pt1: <?php the_field('button_background_color')?>;
	--hvr-radial-background-pt2: <?php the_field('button_background_color')?>;
	--hvr-curl-box-shadow: <?php the_field('button_hover_color')?>;"<?php } endif; ?> <?php if(null != $button_hover_effect_options): ?>class="<?php
$button_hover_effect_options = get_field('button_hover_effect_options'); if( $button_hover_effect_options ): foreach( $button_hover_effect_options as $button_hover_effect_option ): ?>hvr-<?php echo $button_hover_effect_option; ?> <?php endforeach; endif; ?>"<?php endif; ?>><?php the_sub_field('card_cta') ?></button>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

</section>
</style>
