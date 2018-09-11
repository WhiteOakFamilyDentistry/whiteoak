<section id="hero" class="inner inner-page">
	<header>
		<h1><?php the_field('h1_tag_insurance') ;?></h1>
		<?php if( get_field( "h2_tag_insurance" ) ): ?>
			<h2><?php the_field('h2_tag_insurance') ;?></h2>
		<?php endif; ?>
	</header>
</section>
<main id="accepted-insurance">
	<section class="understand">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
	<section id="insurance-logos" class="container">
		<?php if( have_rows('insurance_information') ): ?>
			<?php while( have_rows('insurance_information') ): the_row(); 
			$image = get_sub_field('insurance_logo');
			$size = 'thumbnail';
			//$content = get_sub_field('insurance_company');
		?>
		
			<div class="insurance">
				<?php
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
			</div>

		<?php endwhile; ?>
		<?php endif; ?>
	</section>
</main>