<?php get_header(); ?>
<?php get_template_part('partials/template-part', 'head'); ?>
<article id="404">
  <section id="hero" class="inner inner-page">
    <header>
      <h1>Oh No!</h1>
      <h2>Looks Like You Took a Wrong Turn</h2>
    </header>
  </section>
  <section id="inner-content" class="not-found">
    <div class="container centered">
		  <h3>Let's Get Back on Course!</h3>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Home</a>
    </div>
  </section>
</article>
<?php get_footer(); ?>