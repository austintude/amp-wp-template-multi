<?php
function dotiavatar_function() {
	return '<h3>Boo</h3> <img src="https://danielbisett.com/wp-content/uploads/2020/06/daniel-bisett-scaled.jpg"
   alt="doti-avatar" layout="responsive" class="left-align" />';
}
add_shortcode('dotiavatar', 'dotiavatar_function');


function dotirating_function( $atts = array() ) {

	// set up default parameters
	extract(shortcode_atts(array(
	 'rating' => '5'
	), $atts));

	return "<img src=\"//dayoftheindie.com/wp-content/uploads/$rating-star.png\"
	alt=\"doti-rating\" width=\"130\" height=\"188\" class=\"left-align\" />";
  }
  add_shortcode('dotirating', 'dotirating_function');

  function dotifollow_function( $atts, $content = null ) {
    return '<a href="https://twitter.com/DayOfTheIndie" target="blank" class="doti-follow">' . $content . '</a>';
}
add_shortcode('dotifollow', 'dotifollow_function');

function cardbutton_function( $atts, $content = null ) {
return get_template_part( 'template-parts/short-codes/gridCard.php' ) . '<button>' . do_shortcode($content) . '</button>';
}
add_shortcode('cardbutton', 'cardbutton_function');


function cardblock_function( $atts = array(), $cardcontent = null ) {
// set up default parameters
extract(shortcode_atts(array(
	'cardid' => ''
   ), $atts));
	return "<div class=\"gridCardLoop card$cardid\" id=\"\">" . do_shortcode($cardcontent) . '</div>';
}
add_shortcode('cardblock', 'cardblock_function');

function singlecard_function( $atts = array(), $singlecardcontent = null ) {
// set up default parameters
extract(shortcode_atts(array(
	'cardtype' => 'short',
	'cardanimationid' => '1',
	'cardanimation' => 'yes'
   ), $atts));
	return "<div class=\"cardContent cardtype$cardtype $cardanimation-animation animationid$cardanimationid\">" . do_shortcode($singlecardcontent) . '</div>';
}
add_shortcode('singlecard', 'singlecard_function');



function animation_function( $atts = array(), $animationcontent = null ) {
	// set up default parameters
	extract(shortcode_atts(array(
		'type' => 'forwards',
		'id' => '1',
		'easing' => 'ease-out',
		'duration' => '1200ms',
		'iterations' => '1',
		'transformstart' => '40',
		'transformend' => '0',
		'translatexy' => 'x'
	   ), $atts));
		return "<amp-position-observer on=\"enter:slideTransition$id.start;\" intersection-ratios=\"1\"
		layout=\"nodisplay\"></amp-position-observer>
		<amp-animation id=\"slideTransition$id\" layout=\"nodisplay\"> <script type=\"application/json\">{
			\"duration\": \"$duration\",
				\"fill\": \"$type\",
				\"easing\": \"$easing\",
				\"iterations\": \"$iterations\",
				\"animations\": [
			{
				\"selector\": \".yes-animation.animationid$id\",
				\"keyframes\": [
					{ \"transform\": \"translate$translatexy($transformstart%)\" },
					{ \"transform\": \"translate$translatexy($transformend%)\" }
					]
			}
			]
		}</script> </amp-animation>
			<div class=\"yes-animation animationid$id\">" . do_shortcode($animationcontent) . "</div>";
	}
	add_shortcode('animation', 'animation_function');




?>
