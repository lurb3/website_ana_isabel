<?php
/**
 * Template Name: Photos Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div id="photos-template" class="container" style="margin-left:633px;">

	<!-- Show page content -->
	<?php
		while ( have_posts() ) : the_post(); // While loop because the content only works inside a wp loop

		echo "
			<div class='entry-content-page'>
				" . the_content() . "
			</div>	
		";

		endwhile; //resetting the page loop
		wp_reset_query(); //resetting the page query
	?>
	<div class="row">
		<?php

			$posts = get_posts();

			foreach($posts as $post) {
				$images = acf_photo_gallery('image', $post->ID);

				if(get_field('page') == 'Pura Filigrana') {
					$calc = (12 / count($images));
					foreach($images as $image) {
						$full_image_url= $image['full_image_url']; //Full size image url
						echo "
							<div class='col-lg-" . $calc . " single-image-wrapper'>
								<img src = " . $full_image_url . " alt = " . $title . " title = " . $title . ">
							</div>
						";
					}
				}
			}
		?>
	</div>

</div>

<?php
	get_footer();
?>