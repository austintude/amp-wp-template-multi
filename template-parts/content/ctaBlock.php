<?php
/**
 * Template part for front-page block3
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$ctaBlock_location_icon				= get_field('ctaBlock_location_icon');
$ctaBlock_phone_icon				= get_field('ctaBlock_phone_icon');
$ctaBlock_mail_icon				= get_field('ctaBlock_mail_icon');
$ctaBlock_amp_iframe_placeholder				= get_field('ctaBlock_amp_iframe_placeholder');
$ctaBlock_subscribe_form				= get_field('ctaBlock_subscribe_form');



?>

<div id="ctaBlock" vocab="http://schema.org/" typeof="LocalBusiness">
	<div id="subscribe">
		<div id="envelopeIcon">
				<!-- <amp-img
					src="<?php echo $ctaBlock_mail_icon['url']; ?>"
					width="84"
					height="84"
					layout="intrinsic"
					alt="<?php echo $ctaBlock_mail_icon['alt']; ?>">
				</amp-img>  -->
				<h4>Bring your vehicle in for a FREE repair estimate today</h4>
		</div>
		<div class="secondLine" id="ctaIframe">
			<button>
				<a href="tel:3102134090">Call Now</a>
</button>
			<!-- <amp-iframe
				width="360"
				height="150"
				layout="fixed"
				sandbox="allow-scripts allow-same-origin allow-popups"
				frameborder="0"
				src="<?php echo $ctaBlock_subscribe_form; ?>"
				media="(max-width: 43.5em) and (min-height:27em)"
				>
				<amp-img layout="fill"
					src="<?php echo $ctaBlock_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
			<amp-iframe
				width="580"
				height="110"
				layout="fixed"
				sandbox="allow-scripts allow-same-origin allow-popups"
				frameborder="0"
				src="<?php echo $ctaBlock_subscribe_form; ?>"
				media="(max-width: 43.5em) and (max-height:26em)"
				>
				<amp-img layout="fill"
					src="<?php echo $ctaBlock_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
			<amp-iframe
				width="610"
				height="110"
				layout="fixed"
				sandbox="allow-scripts allow-same-origin allow-popups"
				frameborder="0"
				src="<?php echo $ctaBlock_subscribe_form; ?>"
				media="(min-width: 43.6em) and (min-height:27em) and (max-width: 48.5em)"
				>
				<amp-img layout="fill"
					src="<?php echo $ctaBlock_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
			<amp-iframe
				width="310"
				height="150"
				layout="fixed"
				sandbox="allow-scripts allow-same-origin allow-popups"
				frameborder="0"
				src="<?php echo $ctaBlock_subscribe_form; ?>"
				media="(min-width: 48.6em)"
				>
				<amp-img layout="fill"
					src="<?php echo $ctaBlock_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe> -->
		</div>

	</div>
</div>

