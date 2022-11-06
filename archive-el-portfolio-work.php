<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Erik_Portfolio_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php
	 $args = array(
    'post_type'      => 'el-portfolio-work',
    'posts_per_page' => -1,
	
); ?>

	<div class="grid">
			<?php	
			$query = new WP_Query( $args );

			

			if ( $query->have_posts() ) {
				
				while( $query->have_posts() ) {
					$query->the_post(); 
					?>
					<article class="card">
						<a  class="grid-item <?php $categories = get_the_category(get_the_id());
					foreach($categories as $category) {
						 echo $category->slug. '';
					};?>" href="<?php the_permalink(); ?>">
							
							<?php the_post_thumbnail(); ?>
						</a>
						
						
					</article>
					<?php
					
				}
				wp_reset_postdata();
				
			} 
		?>
	</div>

	</main><!-- #main -->

<?php

get_footer();
