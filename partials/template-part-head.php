<section id="mobile-slideout" class="hidden-lg hidden-md hidden-sm">
    <?php get_template_part('partials/template-part', 'mobilenav-mmenu'); ?>
</section>
<div id="mobile-contact" class="hidden-lg hidden-md hidden-sm">
    <a href="tel:<?php echo get_theme_mod('location_phone'); ?>"><?php echo get_theme_mod('location_phone'); ?></a> <a href="#hours">Hours</a> <a href="<?php echo get_theme_mod('directions'); ?>">Directions</a>
</div>
<!-- #mobile-contact -->
<section id="header-container">
    <div id="top">
        <!-- Tablet Contact -->
        <div id="tablet-contact" class="visible-md visible-sm hidden-xs">
            <p><?php echo get_theme_mod('location_street'); ?> &bull; <?php echo get_theme_mod('hours'); ?> &bull; <a href="tel:<?php echo get_theme_mod('location_phone'); ?>"><?php echo get_theme_mod('location_phone'); ?></strong></a> <a href="<?php echo get_theme_mod('facebook_link'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="<?php echo get_theme_mod('yelp_link'); ?>" target="_blank"><i class="fa fa-yelp" aria-hidden="true"></i></a> <a href="<?php echo get_theme_mod('google_plus_link'); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
        </div>
        <!-- End Tablet Contact -->
        <!-- Top Navigation -->
        <div id="top-nav" class="hidden-xs">
        	<div class="container">
          	<?php get_template_part('partials/template-part', 'topnav'); ?>
          </div>
        </div>
        <div class="container">
            <div class="col-md-6">
                <p><i class="fa fa-user-plus" aria-hidden="true"></i> New Patient Special $89 <a href="#new-patient">Learn More!</a></p>
            </div><!--.col-md-6-->
            <div class="col-md-6">
                <p><i class="fa fa-users" aria-hidden="true"></i> Yearly Membership Plan $175 <a href="#membership">Learn More!</a></p>
            </div><!--.col-md-6-->
        </div><!-- .container -->
    </div><!--#top-->
    <div class="container">
        <div class="col-lg-2">
            <div id="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('main_logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
            </div><!--#logo-->
        </div>
        <div class="col-lg-10">
            <div id="header-widget">
                <?php get_template_part('partials/template-part', 'headernav'); ?>
                <div class="hidden-md hidden-sm hidden-xs">
                    <p><?php echo get_theme_mod('location_street'); ?> &bull; <?php echo get_theme_mod('hours'); ?> &bull; <strong>Call Today! <a href="tel:<?php echo get_theme_mod('location_phone'); ?>"><?php echo get_theme_mod('location_phone'); ?></strong></a> <a href="<?php echo get_theme_mod('facebook_link'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="<?php echo get_theme_mod('yelp_link'); ?>" target="_blank"><i class="fa fa-yelp" aria-hidden="true"></i></a> <a href="<?php echo get_theme_mod('google_plus_link'); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
                </div>
            </div><!-- #header-widget -->
        </div><!--.col-md-10-->
    </div><!--.container-->
</section><!--#header-container-->