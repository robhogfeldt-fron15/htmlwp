<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underrob
 */

get_header(); ?>

<section id="content" role="main">
	<?php the_content(); ?>
		<!-- <div class="featured-image-header">
				<img src="http://static2.bigstockphoto.com/thumbs/4/3/6/large2/63449344.jpg"  alt="" />
			</div>-->

		<div class="wrapper">
			<!-- WYSIWYG -->
			<div class="position-absolute">
				<h2 class="big no-margin"><strong>AIRY PHOTO</strong></h2>
				<h2>Landscape &amp; Portrait Photographer</h2><br>
			</div>


			<div class="gallery fullscreen-gallery">
				<figure class="post format-gallery gallery-item horizontal">
					<header class="gallery-icon">
						<img src="<?php echo esc_url (get_template_directory_uri());?>/images/fullscreen11.jpg"  alt="">
					</header>
				</figure>
			</div>


			<!-- END WYSIWYG -->



<?php
// get_sidebar();
get_footer();
