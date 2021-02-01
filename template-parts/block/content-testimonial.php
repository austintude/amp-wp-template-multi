<?php
/**
 * Block Name: Testimonial
 *
 * This is the template that displays the testimonial block.
 */

// get image field (array)
$avatar = get_field('avatar');

// create id attribute for specific styling
$id = 'testimonial-' . $block['id'];

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
<blockquote id="<?php echo $id; ?>" class="testimonial<?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>">
    <p><?php the_field('testimonial'); ?></p>
    <cite>
    	<img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
    	<span><?php the_field('author'); ?></span>
    </cite>
</blockquote>

