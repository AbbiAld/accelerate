<?php
/**
 * The template for displaying case study pages
 *
 * This is the template that displays all case study pages by default.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$client_name = get_field('client_name');
				$site_link = get_field('site_link'); 
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$size = 'full';
				?>
				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h4><?php echo $services?></h4>
						<h4><span>Client: <?php echo $client_name?></span></h4>
						<?php the_content(); ?>
						<p class="read-more-link"><a href="<?php echo $site_link?>">Visit Live Site &rsaquo;</a></p>
				</aside>
				<section class="case-study-samples">
				<?php if($image_1) { ?>
					<figure class="case-study-img">
						<?php echo wp_get_attachment_image( $image_1, $size );?>
					</figure>
				<?php } ?>
				<?php if($image_2) { ?>
					<figure class="case-study-img">
						<?php echo wp_get_attachment_image( $image_2, $size );?>
					</figure>
				<?php } ?>
				<?php if($image_3) { ?>
					<figure class="case-study-img">
						<?php echo wp_get_attachment_image( $image_3, $size );?>
					</figure>
				<?php } ?>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

		

	</div><!-- #primary -->
	<div id="navigation" class="container">
		<div class="left"><p><a href="#">&larr; <span>Back to work</span></a></p></div>
	</div>

<?php get_footer(); ?>
