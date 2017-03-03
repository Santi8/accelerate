<?php
/**
 * The template for displaying Case Study
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
				$services = get_field('services');
				$client = get_field('client');
				$site_link = get_field('site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$size = "full";

			?>
			<article class="case-study">
			<aside class="case-study-sidebar">
				<h2><?php the_title(); ?></h2>
				<p class="info"><?php echo $services; ?></p>
				<p class="client">Client: <?php echo $client; ?></p>

				<?php the_content(); ?>

				<p><a href="<?php echo $link; ?>">View Site</a></p>
			</aside><!-- end aside bar-->
			</article><!--closes and groups the images together-->

			<div class="case-study-imgs">
				<?php if($image_1) { ?>

					<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					<!--<img src="<?php //echo $image_1; ?>" class="case_imgs"/>-->
				<?php } ?>

				<?php if($image_2) { ?>

					<?php echo wp_get_attachment_image( $image_2, $size ); ?>
					<!--<img src="<?php //echo $image_2; ?>" class="case_imgs"/>-->
				<?php } ?>

				<?php if($image_3) { ?>
					<?php echo wp_get_attachment_image( $image_2, $size ); ?>
					<!--<img src="<?php //echo $image_3; ?>" class="case_imgs"/>-->
				<?php } ?>
			</div><!--end case-study-div-->
			
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>





