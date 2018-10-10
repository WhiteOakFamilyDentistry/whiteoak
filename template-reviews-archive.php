<?php
/**
 * Template Name: Review Archive
**/
?>
<?php get_header(); ?>
<?php get_template_part('partials/template-part', 'head');

$args = array(
'post_type' => 'review',
'posts_per_page' => -1,
'meta_key' => 'review_date',
'orderby' => 'meta_value_num',
'order' => 'DESC'

);
$the_query = new WP_Query( $args );

// Hero image & headings
$hero_image = get_field( 'hero_image' );
$size = 'full';
$hero = wp_get_attachment_image_src( $hero_image, $size);
$h1 = get_field( 'h1_tag' );
$h2 = get_field( 'h2_tag' );

// Review vars
$headline = get_field( 'review_headline');
$review = get_field( 'patient_review' );
$long = get_field( 'patient_review_long' );
$date = get_field( 'review_date' );



if( $hero_image ) {
	echo '<section id="hero" style="background: url( ' .$hero[0]. ' ) transparent 50% 50% / cover;">';
} else {
	echo '<section id="hero" class="inner">';
}
?>
  <header>
		<h1><?php echo $h1; ?></h1>
		<?php if( $h2 ): ?>
		<h2><?php echo $h2;?></h2>
		<?php endif; ?>
  </header>
</section>
<!-- HERO IMAGE -->


<?php

if ($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();




?>


<section id="main-content">
	<?php

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
</section>
<?php get_footer(); ?>
