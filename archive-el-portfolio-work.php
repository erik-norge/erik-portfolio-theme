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
	
);
	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
		
		while( $query->have_posts() ) {
			$query->the_post(); 
			?>
			<article>
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
					<?php the_post_thumbnail('large'); ?>
				</a>
				<?php the_excerpt(); ?>
			</article>
			<?php
		}
		wp_reset_postdata();
		
	} 
?>

	</main><!-- #main -->

<?php

get_footer();
