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
	'cardanimation' => 'yes',
	'ampfx' => ''
   ), $atts));
	return "<div class=\"cardContent cardtype$cardtype $cardanimation-animation animationid$cardanimationid\" $ampfx>" . do_shortcode($singlecardcontent) . '</div>';
}
add_shortcode('singlecard', 'singlecard_function');

function ampfxwrapper_function( $atts = array(), $ampfxwrappercontent = null ) {
	// set up default parameters
	extract(shortcode_atts(array(
		'ampfx' => ''
	   ), $atts));
		return "<section class=\"ampFxWrapper\" $ampfx>" . do_shortcode($ampfxwrappercontent) . '</section>';
	}
	add_shortcode('ampfxwrapper', 'ampfxwrapper_function');

?>
