<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!DOCTYPE html>
<html lang="hu">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="../cactusbasic/node_modules/bootstrap/dist/css/bootstrap.css">
		<link rel="stylesheet" href="../cactusbasic/node_modules/hamburgers/dist/hamburgers.min.css">
		<link rel="stylesheet" href="css/cactustyle.css">
		<?php wp_head(); ?>
	</head>

	<body>
		<header>
			
		
		<?php
		/**
		 * wp_body_open hook.
		 *
		 * @since 2.3
		 */
		do_action( 'wp_body_open' ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- core WP hook.
		?>

		<nav class="topnav" id="topNavMenu">
		    <!-- Brand and toggle button -->
		    <a class="navbar-brand" href="#">Tövisek Birodalma</a>
		    <!-- Website Links -->
		        <?php
		             wp_nav_menu( array(
		             'menu'              => 'primary',
		             'theme_location'    => 'custom-menu',
		             'depth'             => 2,
		             'container'         => 'div',
		             'container_class'   => '',
		             'container_id'      => '',
		             'menu_class'        => 'navbar-nav mr-auto',
		             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		             'walker'            => new wp_bootstrap_navwalker())
		             );
		        ?>
			<div class="hamburger hamburger--spin" tabindex="0" aria-label="Menu" role="button" aria-controls="navigation">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		    <!-- End -->
		</nav>
		</header>

		<!-- Content -->

		<!-- Scripts -->
		<script src="../cactusbasic/node_modules/jquery/dist/jquery.slim.min.js"></script>
		<script src="../cactusbasic/node_modules/popper.js/dist/popper.min.js"></script>
		<script src="../cactusbasic/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="js/custom-js.js"></script>