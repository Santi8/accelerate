<?php
/**
 * The template for display for the About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class='homepage-hero'>
				<article class="about-info"><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</article>
			</div>
</section><!-- .home-page -->

<div class="site-content">
		<h2 class="services">Our Services</h2>
		<p class="about-info">We take pride in our clients and the content we create for them. <br> Here's a brief overview of our offered services. </p>

<section class="about">
	<?php query_posts('post_type=services'); ?> <!--added this code to see if it would help, hasn't-->
	
		Are you working yet???

		<?php while ( have_posts() ) : the_post(); 
			$description_1 = get_field('description_1');
			$description_2 = get_field('description_2');
			$description_3 = get_field('description_3');
			$description_4 = get_field('description_4');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');
			$image_4 = get_field('image_4');
			$size = "full";
		?>

		<article class="description">
				<aside class="service-description">
					<!--<h2><?php //the_title(); ?></h2>-->
				<p class="info-about"><?php echo $description_1; ?></p>


						<?php the_content(); ?>

				</aside>
				<div class="single-image">
					<?php if($image_1) { ?>
						<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					<?php } ?>
				</div><!--close single image div-->
			</article><!--closes description-->

			<?php endwhile; // end of the loop.
			wp_reset_query();  ?>
		</section><!--end of about section-->

	</div><!-- .container -->


<?php get_footer(); ?>







