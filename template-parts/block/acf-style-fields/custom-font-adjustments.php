<?php if (null != $font_adjustment_toggle) : { ?>
		#<?php echo $id; ?> {
			<?php if (!empty($font_size)) : {
				echo 'font-size:';
				the_field('font_size');
				echo 'rem; ';
			}
				endif;
			if (!empty($line_height)) : {
					echo 'line-height:';
					the_field('line_height');
					echo 'rem; ';
			}	endif;
			if (!empty($text_transform)) : {
				echo 'text-transform:';
				the_field('text_transform');
				echo '; ';
		}	endif;
		if (!empty($font_variant_caps)) : {
			echo 'font-variant-caps:';
			the_field('font_variant_caps');
			echo '; ';
	}	endif;
			if (!empty($text_decoration_toggle)) : {
				foreach( $text_decoration_toggle as $text_decoration_toggles ): {
					echo 'text-decoration:';
					echo $text_decoration_toggles;
					echo ' ';
				}
					endforeach;
					echo '; ';
					}
					endif;
			if (!empty($font_weight)) : {
						echo 'font-weight:';
						the_field('font_weight');
						echo '; ';
						}
						endif; ?>
		}

	<?php } endif; ?>
