<?php
/**
 * Block Name: Custom Button
 *
 * This is the template that displays the blcok of cards block.
 */

$button_hover_effects_toggle = get_field('button_hover_effects_toggle');
$button_hover_effect_options = get_field('button_hover_effect_options');
$button_background_color =  get_field('button_background_color');
$box_shadow_color =  get_field('box_shadow_color');
$button_hover_color =  get_field('button_hover_color');
$custom_button_padding = get_field('custom_button_padding');
$custom_button_border_radius = get_field('custom_button_border_radius');
$cta_lightbox_toggle = get_field('cta_lightbox_toggle');


// create id attribute for specific styling
$id = 'newCard-' . $block['id'];

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
<div id="<?php echo $id; ?>" class="ctaButtonLink <?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>">
<?php  if( $cta_lightbox_toggle != 0 ): { ?>
<div>
<button role="button" tabindex="0" <?php if(null != ($button_background_color || $box_shadow_color || $custom_button_padding || $custom_button_border_radius)): { ?>style="
<?php if(null != ($button_background_color || $box_shadow_color)) : ?>
	--button-background-color: <?php the_field('button_background_color')?>;
	--hvr-box-shadow: <?php the_field('box_shadow_color')?>;
	--hvr-background-color: <?php the_field('button_hover_color')?>;
	--button-txt-color: <?php the_field('button_text_color')?>;
	--hvr-button-txt-color: <?php the_field('button_text_color')?>;
	--hvr-button-hover-txt-color: <?php the_field('button_hover_text_color')?>;
	--button-hover-txt-color: <?php the_field('button_hover_text_color')?>;
	--hvr-box-shadow-glow:  <?php the_field('box_shadow_color')?>;
	--hvr-shadow-box-shadow:  <?php the_field('box_shadow_color')?>;
	--hvr-outset-box-shadow:  <?php the_field('box_shadow_color')?>;
	--hvr-inset-box-shadow:  <?php the_field('box_shadow_color')?>;
	--hvr-radial-background-pt1: <?php the_field('button_background_color')?>;
	--hvr-radial-background-pt2: <?php the_field('button_background_color')?>;
	--hvr-curl-box-shadow: <?php the_field('button_hover_color')?>;
	<?php endif; ?>
	<?php if(null != ($custom_button_padding || $custom_button_border_radius)) : ?>
	padding:<?php the_field('button_padding_top');?>rem <?php the_field('button_padding_right');?>rem <?php the_field('button_padding_bottom');?>rem <?php the_field('button_padding_left');?>rem; border-radius: <?php the_field('button_border_radius_top');?>rem <?php the_field('button_border_radius_right');?>rem <?php the_field('button_border_radius_bottom');?>rem <?php the_field('button_border_radius_left');?>rem;<?php endif; ?> font-size:<?php the_field('cta_text_font_size');?>rem;"<?php } endif; ?> <?php if(null != $button_hover_effect_options): ?>class="btn btn-lg btn-danger acf-button-block <?php
$button_hover_effect_options = get_field('button_hover_effect_options'); if( $button_hover_effect_options ): foreach( $button_hover_effect_options as $button_hover_effect_option ): ?>hvr-<?php echo $button_hover_effect_option; ?> <?php endforeach; endif; ?>"<?php endif; ?> on="tap:my-lightbox<?php the_field('cta_unique_id'); ?>"><?php the_field('cta_text'); ?></button>
<amp-lightbox id="my-lightbox<?php the_field('cta_unique_id'); ?>" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox<?php the_field('cta_unique_id'); ?>.close" role="button" tabindex="0"><iframe width="350" height="600" layout="fixed"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php the_field('cta_link') ?>">
    </div>
  </amp-lightbox>
  </div>
  <?php }
else : ?>
<div>
<button role="button" tabindex="0" <?php if(null != ($button_background_color || $box_shadow_color || $custom_button_padding || $custom_button_border_radius)): { ?>style="
<?php if(null != ($button_background_color || $box_shadow_color)) : ?>
	--button-background-color: <?php the_field('button_background_color')?>;
	--hvr-box-shadow: <?php the_field('box_shadow_color')?>;
	--hvr-background-color: <?php the_field('button_hover_color')?>;
	--button-txt-color: <?php the_field('button_text_color')?>;
	--hvr-button-txt-color: <?php the_field('button_text_color')?>;
	--hvr-button-hover-txt-color: <?php the_field('button_hover_text_color')?>;
	--button-hover-txt-color: <?php the_field('button_hover_text_color')?>;
	--hvr-box-shadow-glow:  <?php the_field('box_shadow_color')?>;
	--hvr-shadow-box-shadow:  <?php the_field('box_shadow_color')?>;
	--hvr-outset-box-shadow:  <?php the_field('box_shadow_color')?>;
	--hvr-inset-box-shadow:  <?php the_field('box_shadow_color')?>;
	--hvr-radial-background-pt1: <?php the_field('button_background_color')?>;
	--hvr-radial-background-pt2: <?php the_field('button_background_color')?>;
	--hvr-curl-box-shadow: <?php the_field('button_hover_color')?>;
	<?php endif; ?>
	<?php if(null != ($custom_button_padding || $custom_button_border_radius)) : ?>
	padding:<?php the_field('button_padding_top');?>rem <?php the_field('button_padding_right');?>rem <?php the_field('button_padding_bottom');?>rem <?php the_field('button_padding_left');?>rem; border-radius: <?php the_field('button_border_radius_top');?>rem <?php the_field('button_border_radius_right');?>rem <?php the_field('button_border_radius_bottom');?>rem <?php the_field('button_border_radius_left');?>rem;<?php endif; ?>"<?php } endif; ?> <?php if(null != $button_hover_effect_options): ?>class="btn btn-lg btn-danger acf-button-block <?php
$button_hover_effect_options = get_field('button_hover_effect_options'); if( $button_hover_effect_options ): foreach( $button_hover_effect_options as $button_hover_effect_option ): ?>hvr-<?php echo $button_hover_effect_option; ?> <?php endforeach; endif; ?>"<?php endif; ?>><a href="<?php the_field('cta_link') ?>" style="font-size:<?php the_field('cta_text_font_size');?>rem;"><?php the_field('cta_text'); ?> »</a>
</button>
</div>
<?php endif; ?>
</div>

