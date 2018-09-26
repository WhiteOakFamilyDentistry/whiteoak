<article id="footer-content">
	<!-- NEW PATIENT SECTION -->
	<a id="new-patient" class="anchor"></a>
	<section id="new-patient">
		<?php get_template_part('partials/footer/template-part', 'new-patient'); ?>
	</section>
	<!-- NEW PATIENT SECTION -->

	<!-- REVIEWS SECTION -->
	<a id="patient-reviews" class="anchor"></a>
	<section id="reviews">
		<?php get_template_part('partials/footer/template-part', 'reviews'); ?>
	</section>
	<!-- REVIEWS SECTION -->

	<!-- HOMEPAGE FEATURED SERVICES -->
	<?php if (is_page('home') || is_page('articles')  || is_archive() || is_category() || is_single() ) : ?>
		<section id="featured-services">
			<?php get_template_part('partials/footer/template-part', 'featured'); ?>
		</section>
	<!-- HOMEPAGE FEATURED SERVICES -->


	<?php else : ?>
		<?php
		//--------------------------
		// Latest Posts
		//--------------------------

			get_template_part('partials/footer/template-part', 'latest-posts');
			
		?>
	<?php endif; ?>







	<!-- MEMBERSHIP SECTION -->
	<section id="membership">
		<?php get_template_part('partials/footer/template-part', 'membership'); ?>
	</section>
  <a id="membership" class="anchor"></a>
	<!-- MEMBERSHIP SECTION -->


	<section id="footer-map">
	</section>


	<!-- AFFILIATES SECTION -->
	<section id="affiliates">
		<?php get_template_part('partials/footer/template-part', 'affiliates'); ?>
	</section>
	<!-- AFFILIATES SECTION -->


	<section id="footer-info">
		<?php get_template_part('partials/footer/template-part', 'footer-info'); ?>
	</section>

	<section id="bottom-footer">
		<p>&copy; <?php echo date("Y"); ?> White Oak Family Dentistry</p>
	</section>
</article>
</div><!--.container-fluid-->
</body>
<?php wp_footer(); ?>
</html>
