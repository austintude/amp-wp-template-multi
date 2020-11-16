<?php
/**
 * Template part for front-page testimonials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$testimonial_quotes				= get_field('testimonial_quotes');
$testimonials_block_title			= get_field('testimonials_block_title');
$more_testimonials_link			= get_field('more_testimonials_link');
$more_testimonials_link_txt			= get_field('more_testimonials_link_txt');

$review_count = 0;
// insert acf repeater here

?>

<section id="testimonialsBlock">

    <ol class="testimonialsList testimonialsList">
        <!-- insert acf sub-repeater here -->
        <amp-carousel height="3"
		width="12"
		layout="responsive"
		type="slides"
		autoplay
		delay="5500">

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
<?php  if( $testimonial_in_carousel >= 1 ): { ?>

            <li>
			<script type="text/plain" target="amp-script" id="review_id_<?php echo $review_count; ?>">
{
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
      "worstRating" : "0"
    },
    "reviewBody" : "<?php echo $testimonial_quote; ?>"
  } ]
}
</script>
			<div class="starRating">
									Star Rating:
									<div class="rating" >
                                            <div >
                                            <?php echo $star_rating; ?>
</div> <div>/</div>
                                            <div>
                                            <?php echo $overall; ?>
</div>
</div>
                             </div>
            <blockquote class="blockquote testimonialsCard" >
                <div class="testimonialsContent">
							<div class="quotes">
								<?php echo $testimonial_quote; ?>
							</div>
							<div class="authorAndRating">
							<cite class="testimonialsQuote">
                    <?php echo $testimonial_author; ?>
                                        <div class="testimonialDate">
                        <?php echo $testimonial_date; ?>
                    </div>

                </cite>

							 </div>

					<!-- </span> -->

                </div>



            </blockquote>


			</li>
			<?php } endif; ?>
            <?php endwhile; wp_reset_query();?>
            </amp-carousel>

    </ol>
    <!-- <div class="moreTestimonials">
    <button aria-label="<?php echo $ctablock_phone_text; ?>">
				<a href="<?php echo $more_testimonials_link; ?>"><?php echo $more_testimonials_link_txt; ?></a>
</button>
                    </div> -->
</section>
