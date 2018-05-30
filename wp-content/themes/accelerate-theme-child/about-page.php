<?php
/**
 * Template Name: About Page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<div class="about-page">
	<div id="primary">

			<div class="about-page-hero hero-content">
				<?php while ( have_posts() ) : the_post(); 
					$tagline = get_field('tagline');
				?>
					<h2 class="tagline"><?php echo $tagline; ?></h2>
				<?php endwhile; // end of the loop. ?>
			</div>


		<section class="about-content site-content">
			<?php while ( have_posts() ) : the_post(); 
				$page_description = get_field('page_description');
				$service_1 = get_field('service_1');
				$description_1 = get_field('description_1');
				$service_2 = get_field('service_2');
				$description_2 = get_field('description_2');
				$service_3 = get_field('service_3');
				$description_3 = get_field('description_3');
				$service_4 = get_field('service_4');
				$description_4 = get_field('description_4');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$image_4 = get_field('image_4');
				$size = 'medium';
			?>
				<h4 class="section-heading"><?php the_title(); ?></h4>
				<p id='service-page-description'><?php echo $page_description ?></p>
					
				<section class="services-section">
					<?php if($image_1) { ?>
						<section class="indiv-service">
						<figure class="services-img">
							<?php echo wp_get_attachment_image( $image_1, $size );?>
						</figure>
						<div class="service-description">
							<h2 class="service-title"><?php echo $service_1 ?></h2>
							<p><?php echo $description_1 ?></p>
						</div>
						</section>
					<?php } ?>
					<?php if($image_2) { ?>
						<section class="indiv-service">
						<div class="service-description">
							<h2 class="service-title"><?php echo $service_2 ?></h2>
							<p><?php echo $description_2 ?></p>
						</div>
						<figure class="services-img">
							<?php echo wp_get_attachment_image( $image_2, $size );?>
						</figure>
					</section>
					<?php } ?>
					<?php if($image_3) { ?>
						<section class="indiv-service">
						<figure class="services-img">
							<?php echo wp_get_attachment_image( $image_3, $size );?>
						</figure>
						<div class="service-description">
							<h2 class="service-title"><?php echo $service_3 ?></h2>
							<p><?php echo $description_3 ?></p>
						</div>
					</section>
					<?php } ?>
					<?php if($image_4) { ?>
						<section class="indiv-service">
						<div class="service-description">
							<h2 class="service-title"><?php echo $service_4 ?></h2>
							<p><?php echo $description_4 ?></p>
						</div>
						<figure class="services-img">
							<?php echo wp_get_attachment_image( $image_4, $size );?>
						</figure>
					</section>
					<?php } ?>
				</section>
			<?php endwhile; // end of the loop. ?>
		</section>

			<div class="interested site-content">
				<h2>Interested in working with us?</h2>
				<a class="button" href="/contact/">Contact Us</a>
			</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
