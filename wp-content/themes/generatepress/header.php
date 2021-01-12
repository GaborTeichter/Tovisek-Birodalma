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
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>

		<?php
		/**
		 * wp_body_open hook.
		 *
		 * @since 2.3
		 */
		do_action( 'wp_body_open' ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- core WP hook.
		?>

		<?php
		/**
		 * generate_before_header hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_do_skip_to_content_link - 2
		 * @hooked generate_top_bar - 5
		 * @hooked generate_add_navigation_before_header - 5
		 */
		do_action( 'generate_before_header' );
		?>

		<?php
		/**
		 * generate_header hook.
		 *
		 * @since 1.3.42
		 *
		 * @hooked generate_construct_header - 10
		 */
		do_action( 'generate_header' );
		?>

		<?php
		/**
		 * generate_after_header hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_featured_page_header - 10
		 */
		do_action( 'generate_after_header' );
		?>