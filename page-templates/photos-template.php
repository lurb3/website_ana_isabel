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

<div id="photo-slider">
	<div id="photo-wrapper">
		<img id="slider-current-photo" src="#" alt="">
		<div id="arrows-wrapper" class="text-center mt-2">
			<div class="d-inline"><img onclick="prevSlide()" style="width:30px; margin-right:20px;" src="<?php echo get_bloginfo('stylesheet_directory') . '/images/arrow-left.svg'; ?>" alt=""></div>
			<div class="d-inline"><img onclick="nextSlide()" style="width:30px;" src="<?php echo get_bloginfo('stylesheet_directory') . '/images/arrow-right.svg'; ?>" alt=""></div>
		</div>
		<div onclick="closeSlider(this)" id="photo-slider-background"></div>
	</div>
</div>

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
								<img class='photo-slider-image' onclick='openSlider(this)' src = " . $full_image_url . " alt = " . $image['title'] . " title = " . $title . ">
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