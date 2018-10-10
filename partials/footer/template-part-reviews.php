<?php

//====================================
// Review Display
//====================================

/* Custom Args */
$args = array(
'post_type' => 'review',
'posts_per_page' => -1,
'meta_key' => 'review_date',
'orderby' => 'meta_value_num',
'order' => 'DESC'
);
$the_query = new WP_Query( $args );

//---------------------------
// Review Header
//---------------------------

?>
<section class="container">
	<header>
		<h1>Patient Testimonials</h1>
		<h2>Our Reviews Speak for Themselves</h2>
	</header>
	<div id="testimonials">
		<?php

			/* Custom Loop */
			if ($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();

			// vars
			$headline = get_field( 'review_headline');
			$review = get_field( 'patient_review' );
			$date = get_field( 'review_date' );

			// Get Review charcter length
			$length = strlen( $review );
			// Create short review for display is caurosel
			$short = substr( $review, 0, 135 );

			//----------------------------
			// Output Reviews
			//----------------------------

			echo '<div class="review">';
			echo '<div class="review-info">';
			echo '<h3>'.$headline.'...</h3>';
			echo '<p>';

			/* Conditionally show full or abbreviated Review */
			if( $length > 150 ) {
				echo $short;
				echo '...';
			} else {
				echo $review;
			}
			/* Conditionally show full or abbreviated Review */

			echo '</p>';
			echo '<a href=" '. get_permalink() . '" target="_blank">Read Full Review <i class="fa fa-angle-right" aria-hidden="true"></i></a>';
			echo '<p>';
			the_title();
			echo ' &bull; ';
			echo $date;
			echo '</p>';
			echo '</div>';
			echo '</div>';

		endwhile; endif; wp_reset_query(); // End Custom Loop

		?>
	</div><!-- #testimonials -->
	<aside id="more-reviews">
		<header>
			<h3>Not Convinced?  Read Testimonials from these Popular Review Platforms.</h3>
		</header>
		<div id="trusted">
			<a href="<?php echo get_theme_mod('google_plus_link'); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i>&nbsp; Google</a>
			<a href="<?php echo get_theme_mod('yelp_link'); ?>" target="_blank"><i class="fa fa-yelp" aria-hidden="true"></i>&nbsp; Yelp</a>
		</div>
	</aside>
</section><!-- .container -->