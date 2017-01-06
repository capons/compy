<?php
if(empty($_COOKIE['intercom_user_name'])) { //set cookie for Intercom chat
	$expire = time() + (86400 * 30); //set one month
	$name = time();
	$email = time().'@gmail.com';
	setcookie("intercom_user_name", $name, $expire, '/');
	setcookie("intercom_user_email", $email, $expire, '/');
} else {
	//get cookie
	$name = $_COOKIE['intercom_user_name'];
	$email = $_COOKIE['intercom_user_email'];
}


/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?>
<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="nofollow" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
	<?php if ( get_theme_mod('site_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
	<?php endif; ?>
<?php endif; ?>

<?php wp_head(); ?>



<!--Intercom API chat SDK -> details in -> Application/views/site/intercom-login.php and application/controllers/Custom.php -->
	<script>
	window.intercomSettings = {
		app_id: "v8m8hova",
			name: "<?php echo $name; ?>", // Full name (need if Engage Onn)
			email: "<?php echo $email; ?>", // Email address (need if Engage Onn)
			created_at: "<?php echo time(); ?>" // Signup date as a Unix timestamp (need if Engage Onn)

		};
	</script>
	<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/v8m8hova';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>



<body <?php body_class(); ?>>
<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="container">
                <div class="row">
				<div class="col-md-4 col-sm-8 col-xs-12">
		        <?php if ( get_theme_mod('site_logo') ) : ?>
					<a href="http://computoolsglobal.com" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
		        <?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
		        <?php endif; ?>
				</div>
				<div class="col-md-8 col-sm-4 col-xs-12">
					<div class="btn-menu"></div>
					<nav id="mainnav" class="mainnav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<?php sydney_slider_template(); ?>

	<div class="header-image">
		<?php sydney_header_overlay(); ?>
		<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>">
	</div>

	<div id="content" class="page-wrap">
		<div class="container">
				<nav id="catnav" class="mainnav row" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'category', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
					<div id="menu-sidebar" class="widget-area col-md-4">
						<?php dynamic_sidebar( 'menu-sidebar' ); ?>
					</div><!-- #menu-sidebar -->
				</nav><!-- #site-navigation -->
		</div>	
		
		<div id="hire">
			<a href="/contacts"><p>Get A Free Quote!</p></a>
		</div>
		<div class="container content-wrapper">
			<div class="row">	