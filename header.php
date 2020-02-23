<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<div id="side-menu">
		<header class="side-menu-logo">
			< WEBSITE LOGO >
		</header>

		<div class="side-menu-list-block">
			<h3>
				Author Projects
			</h3>
			<ul>
				<li>
					Metamorphosis
				</li>
				<li>
					Arquitecture
				</li>
				<li>
					Editorial
				</li>
				<li>
					Studio Work
				</li>
			</ul>
		</div>

		<div class="side-menu-list-block">
			<h3>
				Commercial/Editorial Work
			</h3>
			<ul>
				<li>
					Isabel Mantero Joalharia
				</li>
				<li>
					Pulp Studio Store
				</li>
			</ul>
		</div>

		<div class="side-menu-list-block">
			<ul>
				<li>
					"Constructivist Women", Editorial
				</li>
				<li>
					Pura Filigrana, Editorial
				</li>
			</ul>
		</div>

		<div class="side-menu-list-block">
			<ul>
				<li>
					BITS - "Odisseia dos Pássaros", 2017
				</li>
			</ul>
		</div>

		<footer class="side-menu-footer">
			<ul>
				<li>
					Biography
				</li>
			</ul>
			<ul>
				<li>
					Instagram
				</li>
				<li>
					Behance
				</li>
				<li>
					Facebook
				</li>
				<li>
					Pinterest
				</li>
			</ul>
		</footer>

	</div>