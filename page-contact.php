<?php get_header(); ?>
<?php get_template_part('partials/template-part', 'head'); ?>
<section id="hero" class="<?php the_field('hero_image') ;?> inner-page">
	<header>
		<h1><?php the_field('h1_tag') ;?></h1>
		<?php if( get_field( "h2_tag" ) ): ?>
		<h2><?php the_field('h2_tag') ;?></h2>
		<?php endif; ?>
	</header>
</section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="main-content">
	<article class="container">
		<h2 class="breadcrumb"><?php get_breadcrumb(); ?></h2>
    <div id="inner-content" class="col-md-8">
      <h3>Need Assistance?</h3>
      <p>Our friendly and professional staff welcomes you to reach out to us. We want you to remember who is on the other end of your phone call or email - it is our friendly staff! Reach out to us to with your questions and requests, and we will provide complete and comprehensive tooth care for you and your family.</p>
      <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
      <?php endwhile; ?>
      <?php else: ?>
      <?php get_404_template(); ?>
      <?php endif; ?>
    </div>
		<div id="side-stuff" class="col-md-4">
			<?php if( get_field( "sidebar_image" ) ): ?>
				<img src="<?php the_field('sidebar_image'); ?>" class="aligncenter border"/>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'inner-sidebar' ) ) : ?>
				<div id="inner-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'inner-sidebar' ); ?>
				</div><!-- #inner-sidebar -->
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</article><!-- .container -->
</section>
<?php get_footer(); ?>