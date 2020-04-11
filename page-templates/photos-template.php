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

<div id="photos-template" class="col-lg-9">

	<!-- Show page content -->
	<?php
		while ( have_posts() ) : the_post(); // While loop because the content only works inside a wp loop

		echo "
			<div id='entry-content-page'>
				" . get_the_content() . "
			</div>	
		";

		endwhile; //resetting the page loop
		wp_reset_query(); //resetting the page query
	?>


	<div class="row">
		<?php
			$posts = get_posts();
			$page_title = get_the_title();
			foreach($posts as $post) {
				$images = acf_photo_gallery('image', $post->ID);
				if(get_field('page') == $page_title) {
					$calc = (12 / count($images));
					foreach($images as $image) {
						$full_image_url= $image['full_image_url']; //Full size image url
						echo "
							<div class='col-lg-" . $calc . " single-image-wrapper'>
								<img src = " . $full_image_url . " alt = " . $image['title'] . " title = " . $title . ">
							</div>
						";
					}
					// CODE FOR REPEATER
					/*if(have_rows('teste')) {
						while(have_rows('teste')) {
							the_row();
							$sub_field = get_sub_field('photos');
							foreach($sub_field as $field) {
								echo "
									<div class='col-lg-" . $calc . " single-image-wrapper'>
										<img src = " . $field['url'] . " alt = " . $field['alt'] . ">
									</div>
								";
							}
						}
					}*/
				}
			}
		?>
	</div>

</div>

<?php
	get_footer();
?>