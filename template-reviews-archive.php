<?php
/**
 * Template Name: Review Archive
**/
get_header();
get_template_part('partials/template-part', 'head');

/* Standard Loop */
if ( have_posts() ) : while ( have_posts() ) : the_post();

/* Custom Query Args */
$args = array(
'post_type' => 'review',
'posts_per_page' => -1,
'meta_key' => 'review_date',
'orderby' => 'meta_value_num',
'order' => 'DESC'

);
$the_query = new WP_Query( $args );


//-------------------------------
// Hero Image
//-------------------------------


// Hero image & heading vars
$hero_image = get_field( 'hero_image' );
$size = 'full';
$hero = wp_get_attachment_image_src( $hero_image, $size);
$h1 = get_field( 'h1_tag' );
$h2 = get_field( 'h2_tag' );

if( $hero_image ) {
	echo '<section id="hero" style="background: url( ' .$hero[0]. ' ) transparent 50% 50% / cover;">';
} else {
	echo '<section id="hero" class="inner">';
}

// Header Copy
echo '<header>';
echo '<h1>';
echo $h1;
echo '</h1>';
if( $h2 ) {
	echo '<h2>';
	echo $h2;
	echo '</h2>';
}
echo '</header>';
echo '</section>'; // End Hero Image

/* End Standard Loop */
endwhile; endif; wp_reset_query();


//-------------------------------
// Review Archive Display
//-------------------------------


/* Begin Custom Loop */
if ($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();

// Review vars
$headline = get_field( 'review_headline');
$review = get_field( 'patient_review' );
$date = get_field( 'review_date' );

/* Main Content */
echo '<section id="main-content" class="review-archive">';
echo '<div class="container">';
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
/* End Custom Loop */
endwhile; endif; wp_reset_query();


echo '</section>';


get_footer();

?>
