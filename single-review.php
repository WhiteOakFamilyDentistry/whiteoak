<?php

//=================================
// SINGLE TESTIMONIAL DISPLAY
//=================================

get_header();
get_template_part('partials/template-part', 'head');
/* Standard Loop */
if ( have_posts() ) : while ( have_posts() ) : the_post();

// Review vars
$headline = get_field( 'review_headline');
$review = get_field( 'patient_review' );
$date = get_field( 'review_date' );

?>
<article id="single-review">
  <section id="hero" class="review-header inner">
    <header>
      <h1><?php echo $headline; ?>...</h1>
    </header>
  </section>
  <section class="container individual-review">
    <h2><?php the_title(); ?></h2>
    <p><?php echo $review; ?></p>
    <p><?php echo $date; ?></p>
    <?php endwhile; endif; ?>
  </section><!--.container-->
</article>
<?php get_footer(); ?>
