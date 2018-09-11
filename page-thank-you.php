<?php get_header(); ?>
<?php get_template_part('partials/template-part', 'head'); ?>
<article id="thanks">
	<section id="hero" class="inner inner-page">
		<header>
			<h1>Thank You!</h1>
			<h2>White Oak Family Dentistry</h2>
		</header>
	</section>
	<section class="container">
		<header>
			<h3>Your Inquiry is Important to Us</h3>
		</header>
		<p>Thank you for contacting White Oak Family Dentistry.  A representative will be in touch shortly. regarding your inquiry.</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Home</a>
	</section>
</article>
<?php get_footer(); ?>