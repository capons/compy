<nav id="navigation" class="nav-primary expanded" <?php omega_attr( 'menu' ); ?>>	

	<?php 

	do_action( 'omega_before_primary_menu' ); 
	
	echo '<div id="navIcon"></div>';


/* main */

	wp_nav_menu( array(

		'theme_location' => 'primary',

		'container'      => '',

		'menu_class'     => 'menu omega-nav-menu menu-primary',

		'fallback_cb'	 => 'omega_default_menu',
		'menu_id'	 => 'navMenu',

		)); 

/* mobile menu */
	wp_nav_menu( array(

		'theme_location' => 'primary',

		'container'      => 'div',
		'container_id'	 => 'navMenuSmall',

		'menu_class'     => '',

		'fallback_cb'	 => 'omega_default_menu',
		
		)); 

	do_action( 'omega_after_primary_menu' );

	?>

</nav><!-- .nav-primary -->