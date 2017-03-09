<?php
/**
 * The template for About page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content-about">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<article class="about-info"><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</article>
			</div>	
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .about-page -->




<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>