<div class="sectionCardsBlock">
					<div class="cardBlock">
<?php $cardloop = new \WP_Query( array( 'post_type' => 'card', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

	<?php while( $cardloop->have_posts() ) : $cardloop->the_post();
	$card_title	= get_field('card_title');
	$card_img	= get_field('card_img');
	$card_link	= get_field('card_link');
	?>
		<div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
			<img
				lightbox
				src="<?php echo $card_img['url']; ?>"
				layout="responsive"
				alt="<?php echo $card_img['alt']; ?>"
				class=""
				>
			<h3 class="mb1">
				<?php echo $card_title; ?>
			</h3>
			<div class="ctaButton">
				<a class="ampstart-btn caps text-decoration-none inline-block"
					href="<?php echo $card_link; ?>"
					>
					Learn More
				</a>
			</div>
		</div>
	<?php endwhile; wp_reset_query(); ?>

	</div>
</div>
