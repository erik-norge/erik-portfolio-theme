<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Erik_Portfolio_Theme
 */

get_header();

?>

	<main id="primary" class="single-site-main">

		<div class="single-works-grid">

			<?php if ( function_exists ( 'get_field' ) ) {
 
		
					$image = get_field('work_image');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {

					echo '<div class="single-works-img">'.wp_get_attachment_image( $image, $size ).'</div>';
					}

					echo '<div class="grid-text">';
					if ( get_field( 'work_title' ) ) {
						echo '<h2 class="single-works-title">'. get_field( 'work_title' ) .'</h2>';
					}

					if ( get_field( 'work_intro' ) ) {
						echo '<p class="work-overview">'. get_field( 'work_intro' ) .'</p>';
					} ?>

					<?php if ( get_field( 'technologies_title' ) ) {
						echo '<h2 class="technologies-title">'. get_field( 'technologies_title' ) .'</h2>';
					} ?>

					<div class="technology-content">

						<?php if( have_rows('technologies') ): ?>
						
						<ul>
							<?php while ( have_rows('technologies') ) : the_row(); ?>

			
				
							<li><?php the_sub_field('technology'); ?></li>
				

			
							<?php endwhile; ?>
						</ul>

						<? else :



						endif; ?>
					</div>
				</div>
				</div>



				<div class="btn-container">
					<button type="button" class="btn">Live Site</button>
					<button type="button" class="btn">GitHub</button>
				</div>
			
					<?php
					if( have_rows('single_works_tab') ): ?>

						
						
						<?php while ( have_rows('single_works_tab') ) : the_row(); ?>

							<ul class="tabs">
								<li data-tab-target="#tab-takeaway" class="active tab">Takeaway</li>
								<li data-tab-target="#tab-key_components" class="tab">Key Components</li>
								<li data-tab-target="#tab-technical_skills" class="tab">Technical Skills</li>
							</ul>

							<div class="tab-content">
								<div id="tab-takeaway" data-tab-content class="active"><p><?php the_sub_field('takeaway'); ?></p></div>
								<div id="tab-key_components" data-tab-content><p><?php the_sub_field('key_components'); ?></p></div>
								<div id="tab-technical_skills" data-tab-content><p><?php the_sub_field('technical_skills'); ?></p></div>
							</div>
						<?php endwhile; ?>

					

						<? else :



					endif;
			

			}
			?>
				<div class="cta-container">
					<button class="cta-works">Back To Works</button>
				</div>
	</main>

<?php get_template_part( 'template-parts/content', 'nav' ); ?>

<?php get_footer();
