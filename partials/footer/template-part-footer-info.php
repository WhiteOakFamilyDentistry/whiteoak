<div class="container">
	<div class="col-md-6">
		<header>
			<h3><i class="fa fa-leaf" aria-hidden="true"></i> Our Services</h3>
		</header>
		<div class="col-sm-6">
			<?php wp_nav_menu( array('menu'    => 'Footer Menu Services One')); ?>
		</div>
		<div class="col-sm-6">
			<?php wp_nav_menu( array('menu'    => 'Footer Menu Services Two')); ?>
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-sm-6">
			<header>
				<h3><i class="fa fa-bullhorn" aria-hidden="true"></i> Get in Touch</h3>
			</header>
			<?php wp_nav_menu( array('menu'    => 'Get in Touch Menu')); ?>
			<p><?php echo get_theme_mod('location_street'); ?><br/><?php echo get_theme_mod('location_city'); ?>, <?php echo get_theme_mod('location_state'); ?> <?php echo get_theme_mod('location_zip'); ?></p>
			<p class="phone"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo get_theme_mod('location_phone'); ?>"><?php echo get_theme_mod('location_phone'); ?></a></p>
			<p class="social"><a href="<?php echo get_theme_mod('facebook_link'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="<?php echo get_theme_mod('yelp_link'); ?>" target="_blank"><i class="fa fa-yelp" aria-hidden="true"></i></a> <a href="<?php echo get_theme_mod('google_plus_link'); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
		</div>
		<div class="col-sm-6">
			<header>
				<h3><i class="fa fa-home" aria-hidden="true"></i> Our Office</h3>
			</header>
			<?php wp_nav_menu( array('menu'    => 'Our Office Menu')); ?>
			<a id="hours" class="anchor"></a>
			<header>
				<h3><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</h3>
			</header>
			<p><?php echo get_theme_mod('hours'); ?><br/><?php echo get_theme_mod('weekend_hours'); ?></p>
		</div>
	</div>
</div>