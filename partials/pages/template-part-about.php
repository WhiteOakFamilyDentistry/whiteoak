<!-- ABOUT PAGE STUFF -->
<section id="hero" class="inner inner-page">
	<header>
		<h1><?php the_field('h1_tag_about') ;?></h1>
		<?php if( get_field( "h2_tag_about" ) ): ?>
			<h2><?php the_field('h2_tag_about') ;?></h2>
		<?php endif; ?>
	</header>
</section>
<main id="about-us">
	<section>
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
	<section>
	</section>
</main>