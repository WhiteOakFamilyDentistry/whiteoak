<!-- WHITENING PAGE STUFF -->
<section id="hero" class="inner inner-page">
	<header>
		<h1><?php the_field('h1_tag') ;?></h1>
		<?php if( get_field( "h2_tag" ) ): ?>
			<h2><?php the_field('h2_tag') ;?></h2>
		<?php endif; ?>
	</header>
</section>
<main id="whitening">
	<section id="main-content">
	<article class="container">
		<h2 class="breadcrumb"><?php get_breadcrumb(); ?></h2>
		<aside id="side-stuff" class="col-md-4 col-md-push-8">
			<?php if( get_field( "sidebar_image" ) ): ?>
				<img src="<?php the_field('sidebar_image'); ?>" class="aligncenter border"/>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'inner-sidebar' ) ) : ?>
				<div id="inner-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'inner-sidebar' ); ?>
				</div><!-- #inner-sidebar -->
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</aside>
		<section id="inner-content" class="col-md-8 col-md-pull-4">
			<?php the_content(); ?>
		</section>
	</article><!-- .container -->
	<article>
		<?php if( get_field( 'opalescence_heading' ) ): ?>
		<section id="opal" class="clearfix">
			<div class="col-md-5 hidden-sm hidden-xs">
			</div>
			<div class="col-md-7">
				<header>
					<h1><?php echo get_field( 'opalescence_heading' ); ?></h1>
				</header>
				<?php echo get_field( 'opalescence_content' ); ?>
			</div>
		</section>
	<?php endif; ?>
	</article>
</main>