<?php
/**
 * Template part for front-page testimonials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$testimonial_block_title = get_field('testimonial_block_title');
$testimonial_block_background_image = get_field('testimonial_block_background_image');
// insert acf repeater here
$review_count = 0;

?>
<?php $loop = new \WP_Query( array( 'post_type' => 'testimonials', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<section id="testimonialsBlock">
	<div class="testimonialBlockBackground">
		<img src="<?php echo $testimonial_block_background_image['url']; ?>" alt="<?php echo $testimonial_block_background_image['alt']; ?>">
</div> <!-- end .testimonialBlockBackground -->
		<div class="testimonialsBlockTitle">
    <h2><?php echo $testimonial_block_title; ?></h2>

</div>
    <ol class="testimonialsList testimonialsList">
        <!-- insert acf sub-repeater here -->
		<amp-carousel height="600"
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
		delay="9500">
		<?php while( $loop->have_posts() ) : $loop->the_post();
$testimonial_quote = get_field('testimonial_quote');
$testimonial_author = get_field('testimonial_author');
$description_of_work = get_field('description_of_work');
$testimonial_date = get_field('testimonial_date');
$overall = get_field('overall');
$author_image = get_field('author_image');
$review_count = $review_count + 1;
?>
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
            <li>
            <blockquote class="blockquote testimonialsCard" itemscope itemtype="http://schema.org/Review">
                <div class="testimonialsContent">
					<amp-fit-text width="10" height="20" min-font-size="12px" layout="responsive" class="mobile">
						<!-- <span itemprop="itemReviewed"  class="reviewBody" itemtype="http://schema.org/localBusiness"> -->
							<div itemprop="reviewBody">

							<?php echo $testimonial_quote; ?>
							</div>
						<!-- </span> -->
						<?php if ($overall != null) { ?>
						<div class="testimonialContentBlocks">
						<?php if ($description_of_work != null) { ?>
							<div class="leftBlock">
								<h5><?php echo $description_of_work; ?></h5>
							</div>
						<?php } ?>
							<div class="rightBlock">
								<ul>
									<li>
										<div class="leftItem">
										Star Rating:
										</div>
										<div class="rightItem">
										<!-- <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"> -->
											<!-- <meta itemprop="worstRating" content="0"> -->
												<!-- <span itemprop="ratingValue"> -->
												<?php echo $overall; ?>
												<!-- </span>  -->
												/
												<!-- <span itemprop="bestRating"> -->
												<?php echo $overall; ?>
													<!-- </span> -->
										<!-- </span> -->
											</div>
									</li>

								</ul>
							</div>
						</div>
						<?php } ?>
					</amp-fit-text>
					<amp-fit-text width="500" height="170" layout="responsive" class="smallDesktop">
						<!-- <span itemprop="itemReviewed" class="reviewBody" itemtype="http://schema.org/localBusiness"> -->
							<div itemprop="reviewBody" >

							<?php echo $testimonial_quote; ?>
							</div>
						<!-- </span> -->
						<?php if ($overall != null) { ?>
						<div class="testimonialContentBlocks">
						<?php if ($description_of_work != null) { ?>
							<div class="leftBlock">
								<h5><?php echo $description_of_work; ?></h5>
							</div>
						<?php } ?>
							<div class="rightBlock">
								<ul>
									<li>
										<div class="leftItem">
										Star Rating:
										</div>
										<div class="rightItem">
										<!-- <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"> -->
											<!-- <meta itemprop="worstRating" content="0"> -->
												<!-- <span itemprop="ratingValue"> -->
												<?php echo $overall; ?>
												<!-- </span>  -->
												/
												<!-- <span itemprop="bestRating"> -->
												<?php echo $overall; ?>
													<!-- </span> -->
										<!-- </span> -->
											</div>
									</li>

								</ul>
							</div>
						</div>
						<?php } ?>
					</amp-fit-text>
				</div>


                <cite class="testimonialsQuote">
                    <!-- <span itemprop="author" itemscope itemtype="http://schema.org/Person"> -->
                    <?php echo $testimonial_author; ?>
					<!-- </span>  -->
					-
					<div class="authorImg">
					<img src="<?php echo $author_image['url']; ?>" alt="<?php echo $author_image['alt']; ?>">
					</div>
					<!-- <meta itemprop="datePublished" content="<?php echo $testimonial_date; ?>">
                    <span class="testimonialDate">
                        <?php echo $testimonial_date; ?>
                    </span> -->

                </cite>

            </blockquote>


            </li>

			<?php endwhile; wp_reset_query(); ?>
			</amp-carousel>
    </ol>
</section>
