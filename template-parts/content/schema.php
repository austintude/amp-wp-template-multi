<?php $contactfooterloop = new \WP_Query( array( 'post_type' => 'contact_items', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $contactfooterloop->have_posts() ) : $contactfooterloop->the_post();

			$business_name			= get_field('business_name');
			$contact_us_phone			= get_field('contact_us_phone');
			$contact_us_phone_title			= get_field('contact_us_phone_title');
			$contact_us_phone_link			= get_field('contact_us_phone_link');
			$contact_us_street			= get_field('contact_us_street');
			$contact_us_street_suite			= get_field('contact_us_street_suite');
			$contact_us_city			= get_field('contact_us_city');
			$contact_us_state			= get_field('contact_us_state');
			$contact_us_zip			= get_field('contact_us_zip');
			$business_hours_open			= get_field('business_hours_open');
			$business_hours_close_at			= get_field('business_hours_close_at');
			$contact_us_open_datetime			= get_field('contact_us_open_datetime');
			$contact_us_open_datetime_extra			= get_field('contact_us_open_datetime_extra');
			$contact_us_open_days_times			= get_field('contact_us_open_days_times');
			$contact_us_open_days_times_extra			= get_field('contact_us_open_days_times_extra');
			$contact_us_closed			= get_field('contact_us_closed');
			$contact_us_form			= get_field('contact_us_form');
			$cta_loading_image			= get_field('cta_loading_image');
			$google_map			= get_field('google_map');
			$social_link_dets	= get_field('social_link_dets');
			$contact_footer_background_color	= get_field('contact_footer_background_color');
			$contact_footer_text_color	= get_field('contact_footer_text_color');
			$contact_footer_link_color	= get_field('contact_footer_link_color');
			$left_footer_grid_title	= get_field('left_footer_grid_title');
			$middle_footer_grid_title	= get_field('middle_footer_grid_title');
			$right_footer_grid_title	= get_field('right_footer_grid_title');
			$physical_and_pobox	= get_field('physical_and_pobox');
			$first_address_title	= get_field('first_address_title');
			$second_address_title	= get_field('second_address_title');
			$second_contact_us_street	= get_field('second_contact_us_street');
			$second_contact_us_street_suite	= get_field('second_contact_us_street_suite');
			$second_contact_us_city	= get_field('second_contact_us_city');
			$second_contact_us_state	= get_field('second_contact_us_state');
			$second_contact_us_zip	= get_field('second_contact_us_zip');
			?>


<script type="text/plain" target="amp-script" id="schemaMarkup">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "<?php echo $business_name; ?>",
  "image" : "<?php echo $cta_loading_image['url']; ?>",
  "telephone" : "<?php echo $contact_us_phone; ?>",
  "hasMap" : "<?php echo $google_map; ?>",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "<?php echo $contact_us_street; ?> <?php echo $contact_us_street_suite; ?> ",
    "addressLocality" : "<?php echo $contact_us_city; ?>",
    "addressRegion" : "<?php echo $contact_us_state; ?>",
    "postalCode" : "<?php echo $contact_us_zip; ?>"
  },
  "openingHoursSpecification" : {
    "@type" : "OpeningHoursSpecification",
    "dayOfWeek" : {
      "@type" : "DayOfWeek",
      "name" : "Monday through Saturday"
    },
    "opens" : "<?php echo $business_hours_open; ?>",
    "closes" : "<?php echo $business_hours_close_at; ?>"
  },
  <?php $testimonial_quotesloop = new \WP_Query( array( 'post_type' => 'testimonial_quotes', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

  <?php while( $testimonial_quotesloop->have_posts() ) : $testimonial_quotesloop->the_post();

// vars
$testimonial_quote = get_field('testimonial_quote');
$testimonial_author = get_field('testimonial_author');
$description_of_work = get_field('description_of_work');
$testimonial_date = get_field('testimonial_date');
$overall = get_field('overall');
$testimonial_in_carousel	= get_field('testimonial_in_carousel');
$star_rating	= get_field('star_rating');
$review_count = $review_count + 1;

?>
    "review" : [ {
    "@type" : "Review",
    "author" : {
      "@type" : "Person",
      "name" : "<?php echo $testimonial_author; ?>"
    },
    "reviewRating" : {
      "@type" : "Rating",
      "ratingValue" : "<?php echo $overall; ?>",
      "bestRating" : "5",
      "worstRating" : "0",
	  "reviewAspect": "Service"
    },
    "reviewBody" : "<?php echo $testimonial_quote; ?>",
	"itemReviewed": {
    "@type": "Restaurant",
    "name": "<?php echo $business_name; ?>"
  },
  } ]
  <?php endwhile; wp_reset_query();?>
}
</script>
<?php endwhile; wp_reset_query();?>
