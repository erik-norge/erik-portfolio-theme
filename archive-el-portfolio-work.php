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

	<h1>Portfolio</h1>
	<p>A collection of projects</p>

	<?php
	 $args = array(
    'post_type'      => 'el-portfolio-work',
    'posts_per_page' => -1,	
				); 
	?>

<div class="button-group filter-button-group">
		<button data-filter="*">show all</button>

<?php
$terms = get_terms( array(
	'taxonomy' => 'el-work-resources',
	'hide_empty' => false,
));

foreach($terms as $term) {
	
	echo '<button data-filter=".'.$term->slug.'">'.$term->name.'</button>';
}
?>

</div>


	<div class="grid">
			<?php	
			$query = new WP_Query( $args );

			

			if ( $query->have_posts() ) {
				
				while( $query->have_posts() ) {
					$query->the_post(); 
					?>
					<article class="card">
						<a  class="grid-item <?php $terms = wp_get_post_terms(get_the_id(), $taxonomy = 'el-work-resources');
                                        foreach ($terms as $term) {
                                            echo $term->slug . ' ';
                                        } ?>" href="<?php the_permalink(); ?>">
							
							<?php the_post_thumbnail(); ?>
						</a>
						
						
					</article>
					<?php
					
				}
				wp_reset_postdata();
				
			} 
		?>
	</div>
	<?php get_template_part( 'template-parts/content', 'nav' ); ?>
	</main><!-- #main -->

<?php

get_footer();
