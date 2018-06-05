<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A WordPress portfolio project site, built with Skillcrush, featuring custom post types, custom queries, and custom fields.">
	<meta http-equiv="Content-Security-Policy" content="default-src * gap://ready; style-src 'self' 'unsafe-inline' *.abbialdrich.com; script-src 'self' 'unsafe-inline' 'unsafe-eval' *.acclerate.abbialdrich.com *.addthis.com *.addthisedge.com graph.facebook.com widgets.pinterest.com; img-src 'self' *.accelerate.abbialdrich.com data:https://accelerate.abbialdrich.com/;"> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="container">
		<div class="page-header clearfix">
			<a href="<?php echo site_url(); ?>" class="top-logo">
				<span class="title"><?php bloginfo('name'); ?></span>
			</a>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
	</header>

	<div id="main" class="site-main clearfix">