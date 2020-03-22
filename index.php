<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div>

	<div class="container mw-100 w-100" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">


				<?php



					$field = get_field_object('field_5e77b75fb62c6');
					var_dump($field['value']);

					$pages = get_pages();
					foreach($pages as $page) {

						$thumbnail = get_the_post_thumbnail($page->ID);
						echo $thumbnail;
						//var_dump(acf_photo_gallery('image', $post->ID));
					}

				?>
			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer();
