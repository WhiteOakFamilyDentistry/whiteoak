<?php if ( has_nav_menu( 'header_menu' ) ) : ?>

        <nav class="navbar navbar-default header-nav hidden-xs" role="navigation">

                <?php
                wp_nav_menu( array(
                        'theme_location'    => 'header_menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
        </nav>

<?php endif; ?>