<?php

/**
 * Template Name: Review Archive
**/

get_header();
get_template_part('partials/template-part', 'head');

/* Standard Loop */
if ( have_posts() ) : while ( have_posts() ) : the_post();


//-------------------------------
// Hero Image
//-------------------------------


// Hero image & heading vars
$hero_image = get_field( 'hero_image' );
$size = 'full';
$hero = wp_get_attachment_image_src( $hero_image, $size );
$h1 = get_field( 'h1_tag' );
$h2 = get_field( 'h2_tag' );

if( $hero_image ) {
	echo '<section id="hero" class="review-archive" style="background: url( ' .$hero[0]. ' ) transparent 50% 50% / cover;">';
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

/* Set up pagination query var */
$paged = ( get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;

/* Custom Query Args */
$args = array(
'post_type' => 'review',
'posts_per_page' => 10,
'meta_key' => 'review_date',
'orderby' => 'meta_value_num',
'order' => 'DESC',
'paged' => $paged

);
$wp_query = new WP_Query( $args );

/* Begin Review Container */
echo '<section id="main-content" class="review-archive">';

/* Begin Custom Loop */
if ( $wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post();

// Review vars
$headline = get_field( 'review_headline');
$review = get_field( 'patient_review' );
$date = get_field( 'review_date' );

/* Individual Review */
echo '<section class="container individual-review">';
echo '<blockquote>';
echo '<p>'.$review.'</p>';
echo '<cite>';
the_title();
echo  ' - ';
echo $date;
echo '</cite>';
echo '</blockquote>';
echo '</section>';

/* End Custom Loop */
endwhile; awesome_theme_pagination(); wp_reset_postdata(); endif;

echo '</section>'; // End .review-archive

get_footer();

?>