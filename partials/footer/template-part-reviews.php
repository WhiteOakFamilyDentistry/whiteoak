<?php
// REVIEW DISPLAY
$args = array(
'post_type' => 'review',
'posts_per_page' => -1,
'meta_key' => 'review_date',
'orderby' => 'meta_value_num',
'order' => 'DESC'

);
$the_query = new WP_Query( $args );
?>
<section class="container">

	<header>
		<h1>Patient Testimonials</h1>
		<h2>Our Reviews Speak for Themselves</h2>
	</header>

		<div id="testimonials">
			
<?php
if ($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

		$headline = get_field( 'review_headline');
		$review = get_field( 'patient_review' );
		$date = get_field( 'review_date' );

		echo '<div class="review">';
		echo '<div class="review-info">';
		echo '<h3>'.$headline.'...</h3>';
		echo '<p>'.$review.'</p>';
		echo '<p>';
		the_title(); 
		echo ' &bull; ';
		echo $date;
		echo '</p>';
		echo '</div>';
		echo '</div>';


endwhile; endif; wp_reset_query();
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