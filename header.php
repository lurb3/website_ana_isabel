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
	<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<div id="side-menu">
		<header class="side-menu-logo">
			<img src=" <?php echo get_template_directory_uri() ?>/images/logo.png">
		</header>

		<div>

			<?php
				$pages = get_pages();

				$cats = [];
				
				foreach($pages as $page) {
					$cats[get_the_category($page->ID)[0]->cat_name][] = "
						<a href ='" . get_permalink($page->ID) . "'> " . $page->post_title ."</a>
					";
				}
				foreach($cats as $key => $value) {
					$c = [];
					echo "
					<div class='side-menu-list-block'>
						<h3> " . $key . " </h3>
						<ul>";

					foreach($value as $v) {
						echo "<li> " . $v . "</li>";
					}

					echo "
						</ul>
					</div>
					";
				}
			?>

		</div>

		<footer class="side-menu-footer">
			<ul>
				<li>
					Biography
				</li>
			</ul>
			<ul class="mb-0">
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