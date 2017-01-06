<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body <?php body_class(); ?> <?php omega_attr( 'body' ); ?>>
<?php do_action( 'omega_before' ); ?>
<div class="<?php echo omega_apply_atomic( 'site_container_class', 'site-container' );?>">
	<?php 
	do_action( 'omega_before_header' );
	do_action( 'omega_header' );
	do_action( 'omega_after_header' ); 
	?>
	<div class="site-inner">
		<?php do_action( 'omega_before_main' ); ?>