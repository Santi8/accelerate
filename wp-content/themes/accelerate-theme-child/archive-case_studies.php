<?php
/**
 * The template for displaying the case studies archive page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
	<?php query_posts('posts_per_page=3&post_type=case_studies&order=ASC'); ?>
		<?php while ( have_posts() ) : the_post(); 
			$image_1 = get_field("image_1");
			$size = "full";
			$services = get_field('services'); ?>

		<article class="case-study">
			<aside class="case-study-sidebar">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="info"><?php echo $services; ?></p>
			
				<?php the_excerpt(); ?>

				<p><a href="<?php the_permalink(); ?>">View Project</a></p>
			</aside><!-- end aside bar-->

			<div class="case-study-imgs">
			<a href="<?php the_permalink(); ?>">
			<?php if($image_1) { ?>
				<?php echo wp_get_attachment_image( $image_1, $size ); ?>
			<?php } ?>
			</a>
		</div><!--end case-study-div-->
		</article><!--closes and groups the images together-->
		
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>