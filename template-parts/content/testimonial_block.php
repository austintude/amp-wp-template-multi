<?php
/**
 * Template part for testimonial_block
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<span itemprop="itemReviewed" itemtype="http://schema.org/localBusiness">
                    <div itemprop="reviewBody">

					  <?php echo $testimonial_quote; ?>
                    </div>
</span>
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
                                    <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                        <meta itemprop="worstRating" content="0">
                                            <span itemprop="ratingValue">
                                            <?php echo $overall; ?>
                                            </span> /
                                            <span itemprop="bestRating">
                                            <?php echo $overall; ?>
                                                </span>
                                    </span>
                                        </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <?php } ?>
				</div>

