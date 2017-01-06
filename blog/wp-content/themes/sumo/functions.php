<?php
/**
 * Sumo functions and definitions
 *
 * @package Sumo
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function sumo_theme_setup() {

  add_theme_support( 'omega-footer-widgets', 3 );

  add_action ('omega_header', 'sumo_header_right');

  add_action( 'widgets_init', 'sumo_widgets_init', 15 );

  /* Register custom menus. */
  add_action( 'init', 'sumo_register_menu' );

  remove_theme_support( 'theme-layouts' );

  add_action( 'omega_footer', 'sumo_footer_links' );

  add_action( 'wp_enqueue_scripts', 'sumo_scripts_styles' );

  add_action ('omega_before_primary_menu', 'sumo_omega_before_primary_menu');
  

}

add_action( 'after_setup_theme', 'sumo_theme_setup', 11  );

/**
 * Enqueque Google Font
 *
 * @since 1.0.1
 */

function sumo_scripts_styles() {
  $query_args = array(
   'family' => 'Lato:400'
  );
  wp_enqueue_style( 'google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null  );
}

/**
 * Sets a common class, `.omega-nav-menu`, for the custom menu widget if used in the header right sidebar.
 *
 * @since 1.0.0
 *
 * @param  array $args Header menu args.
 *
 * @return array $args Modified header menu args.
 */
function sumo_menu_args( $args ) {

  $args['container']   = 'div';
  $args['menu_class'] .= ' omega-nav-menu';

  return $args;

}

function sumo_omega_before_primary_menu() {
  if ( $title = get_bloginfo( 'name' ) ) {    
    if ( $logo = get_theme_mod( 'custom_logo' ) ) {
      $title = sprintf( '<div itemscope itemtype="http://schema.org/Organization" class="site-title"><a itemprop="url" href="%1$s" title="%2$s" rel="home"><img itemprop="logo" alt="%3$s" src="%4$s"/></a></div>', 'http://computoolsglobal.com/', esc_attr( $title ), esc_attr( $title ), $logo );    
    } else {
      if (is_home()) {
        $title = sprintf( '<h1 class="site-title" itemprop="headline"><a href="%1$s" title="%2$s" rel="home">%3$s</a></h1>', 'http://computoolsglobal.com/', esc_attr( $title ), $title );    
      } else {
        $title = sprintf( '<h2 class="site-title" itemprop="headline"><a href="%1$s" title="%2$s" rel="home">%3$s</a></h2>', 'http://computoolsglobal.com/', esc_attr( $title ), $title );    
      }
    }
    echo $title;
  }
}

function sumo_header_right() {
?><div id="blogName"><h1>Blog</h1></div><?php
  add_filter( 'wp_nav_menu_args', 'sumo_menu_args' );
  if ( is_active_sidebar( 'header-right' ) ) : ?> 

  <aside class="header-right widget-area sidebar">
    
    <?php dynamic_sidebar( 'header-right' ); ?>

    </aside><!-- .sidebar -->

  <?php endif; 
  remove_filter( 'wp_nav_menu_args', 'sumo_menu_args' );

  /* add Categries menu */
  if ( has_nav_menu( 'category_menu' ) ) {
/* desktop */

    wp_nav_menu(
      array(
        'theme_location'  => 'category_menu',
        'container'       => 'div',
        'container_id'    => 'menu-category-menu',
        'container_class' => 'menu-category-container',
        'menu_id'         => 'menu-category-menu-items',
        'menu_class'      => 'menu-category-items',
        'depth'           => 1,
        'link_before'     => '<span class="category-screen-reader-text">',
        'link_after'      => '</span>',
        'fallback_cb'     => '',
      )
    );
	
	/* mobile */
	?>
<div class="categoryBtn">category</div>
	<?php
	
    wp_nav_menu(
      array(
        'theme_location'  => 'category_menu',
        'container'       => 'div',
        'container_id'    => 'menu-category-menu-small',
        'container_class' => 'menu-category-container-small',
        'menu_id'         => 'menu-category-menu-items-small',
        'menu_class'      => 'menu-category-items-small',
        'depth'           => 1,
        'link_before'     => '<span class="category-screen-reader-text">',
        'link_after'      => '</span>',
        'fallback_cb'     => '',
      )
    );	
	
  } 
}

/**
 * Register widgetized area and update sidebar with default widgets
 */
function sumo_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Header Right', 'sumo' ),
    'id'            => 'header-right',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-wrap">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}

function sumo_register_menu() {
  register_nav_menu( 'social',   _x( 'Social', 'nav menu location', 'sumo' ) );
  register_nav_menu( 'category_menu',   _x( 'Categories', 'nav menu location', 'sumo' ) );
}

function sumo_footer_links() {

  if ( has_nav_menu( 'social' ) ) {

    wp_nav_menu(
      array(
        'theme_location'  => 'social',
        'container'       => 'div',
        'container_id'    => 'menu-social',
        'container_class' => 'menu',
        'menu_id'         => 'menu-social-items',
        'menu_class'      => 'menu-items',
        'depth'           => 1,
        'link_before'     => '<span class="screen-reader-text">',
        'link_after'      => '</span>',
        'fallback_cb'     => '',
      )
    );
  }
}

function my_scripts_method() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script(
		'main-script',
		get_stylesheet_directory_uri() . '/js/main.js',
		array('jquery')
	);
}    
 
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function at_remove_dup_canonical_link() {
        return false;
}
add_filter( 'wpseo_canonical', 'at_remove_dup_canonical_link' );