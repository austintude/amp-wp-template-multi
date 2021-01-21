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
<section <?php if( null != $amp_fx ): ?>amp-fx="<?php foreach( $amp_fx as $amp_fxs ): ?><?php echo $amp_fxs; ?> <?php endforeach; ?>"<?php endif; ?> id="<?php echo $id; ?>"  <?php if( null != $data_parallax_factor ):?>data-parallax-factor="<?php the_field('data_parallax_factor');?>" <?php endif; ?>  <?php if( null != $data_duration ):?>data-duration="<?php the_field('data_duration');?>ms" <?php endif; ?> <?php if( null != $data_margin_start ):?>data-margin-start="<?php the_field('data_margin_start');?>%"<?php endif; ?> <?php if( null != $data_margin_end ):?>data-margin-end="<?php the_field('data_margin_end');?>%"<?php endif; ?> <?php if( null != $data_easing ): ?>data-easing="<?php the_field('data_easing'); ?>"<?php endif; ?> <?php if( null != $data_fly_in_distance ):?>data-fly-in-distance="<?php the_field('data_fly_in_distance');?>%"<?php endif; ?> <?php if( null != $data_repeat ): ?>data-repeat<?php endif; ?> class="<?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>">
<InnerBlocks  />

</section>
