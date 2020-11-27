<?php $analyticsloop = new \WP_Query( array( 'post_type' => 'analytics', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $analyticsloop->have_posts() ) : $analyticsloop->the_post();
$google_tag_manager_id	= get_field('google_tag_manager_id');
?>
<?php if ($google_tag_manager_id != null): ?>
<!-- Google Tag Manager -->
<amp-analytics config="https://www.googletagmanager.com/amp.json?id=<?php echo $google_tag_manager_id; ?>&gtm.url=SOURCE_URL" data-credentials="include"></amp-analytics>
<!-- End Google Tag Manager -->
<?php endif; ?>
<?php endwhile; wp_reset_query(); ?>
<?php $analyticsloop = new \WP_Query( array( 'post_type' => 'analytics', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $analyticsloop->have_posts() ) : $analyticsloop->the_post();
$facebook_pixel_id	= get_field('facebook_pixel_id');
$facebook_pixel_triggers	= get_field('facebook_pixel_triggers');
?>
<?php if ($facebook_pixel_id != null): ?>
<!-- Begin "Facebook Pixel for AMP" || Help center -->
<!-- Insert in Settings->HTML/CSS->Body -->
<amp-analytics type="facebookpixel" id="facebook-pixel" class="i-amphtml-layout-fixed i-amphtml-layout-size-defined" style="width:1px;height:1px;" i-amphtml-layout="fixed">
<script type="application/json">
{
    "vars": {
        "pixelId": "<?php echo $facebook_pixel_id; ?>"
    },
    "triggers": {
        "trackPageview": {
            "on": "visible",
            "request": "pageview"
        },
		<?php while (have_rows('facebook_pixel_triggers')) : the_row();

// vars
$trigger_title = get_sub_field('trigger_title');
$trigger_selector = get_sub_field('trigger_selector');
$trigger_on = get_sub_field('trigger_on');
$trigger_event_name = get_sub_field('trigger_event_name');
?>
        "<?php echo $trigger_title; ?>": {
			<?php if ($trigger_selector != null): ?>
			"selector":"<?php echo $trigger_selector; ?>",
				<?php endif; ?>
            "on": "<?php echo $trigger_on; ?>",
            "request": "event",
            "vars": {
            "eventName": "<?php echo $trigger_event_name; ?>"
            }
        },
		<?php endwhile; ?>

		"emptyForScriptCompliance": {

        }
    }
}
</script>
</amp-analytics>
<!-- End "Facebook Pixel for AMP" || Help center -->
<?php endif; ?>
<?php endwhile; wp_reset_query(); ?>
