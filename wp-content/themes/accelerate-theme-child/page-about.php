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
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); 

			$description = get_field('description');
			$image_1 = get_field('image_1');
			$size = "full";
		?>

		<div class='homepage-hero'>
				<article class="about-info"><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</article>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->
			
<section class="about">

	<h2 class="services">Our Services</h2>
	<p class="about-info">We take pride in our clients and the content we create for them. <br> Here's a brief overview of our offered services. </p>
			<article class="description">
				<aside class="service-description">
					<!--<h2><?php //the_title(); ?></h2>-->
					<p class="info-about"><?php echo $description; ?></p>
						<?php the_content(); ?>

				</aside>
				<div class="single-image">
					<?php if($image_1) { ?>
						<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					<?php } ?>
				</div>
			</article>
</section><!--end of about section-->


<?php get_footer(); ?>







