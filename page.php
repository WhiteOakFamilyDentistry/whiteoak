<?php get_header(); ?>
<?php get_template_part('partials/template-part', 'head'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- CONDITIONAL TAGS TO DISPLAY BASED ON PAGE CONTENT -->

<?php if( is_page( 'accepted-insurance' ) ) : ?> <!-- ACCEPTED INSURANCE PAGE -->
	<?php get_template_part('partials/pages/template-part', 'insurance'); ?>
<?php elseif( is_page( 'whitening' ) ) : ?> <!-- WHITENING PAGE -->
	<?php get_template_part('partials/pages/template-part', 'whitening'); ?>
<?php else : ?>
	<?php the_content(); ?>
<?php endif; ?>

<!-- END SPECIAL CONDITIONAL PAGE CONTENT -->

<?php endwhile; else: ?>
  <?php get_404_template(); ?>
<?php endif; ?>
<!-- END WORDPRESS LOOP -->
<?php get_footer(); ?>