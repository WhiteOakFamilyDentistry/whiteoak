<header>
	<h1>Our Latest Articles</h1>
</header>
<div class="latest-articles">
	<?php
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$query = new WP_Query( array ( 'posts_per_page' => 3, 'paged' => $paged ) );
	if($query->have_posts()) :  while($query->have_posts()) :  $query->the_post(); 
	?>
	<div class="latest">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(('blogroll'), array( 'class' => 'aligncenter' )); ?></a>
		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		  <?php excerpt('150'); ?>
	</div>
<?php endwhile; endif; ?>
</div>
<div class="centered">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>articles/">Browse Our Articles</a>
</div>