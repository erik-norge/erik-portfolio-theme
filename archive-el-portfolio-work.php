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

<main id="primary" class="works-site-main">


	<h1 class="works-h1">a collection of projects.</h1>

	<?php

	
	$args = array(
		'post_type'      => 'el-portfolio-work',
		'posts_per_page' => -1,
	);
	?>

	<div class="button-group filter-button-group">
		<button data-filter="*">show all</button>

		<?php
		$terms = get_terms(array(
			'taxonomy' => 'el-work-resources',
			'hide_empty' => false,
		));

		foreach ($terms as $term) {

			echo '<button data-filter=".' . $term->slug . '">' . $term->name . '</button>';
		}

		?>

	</div>


	<div class="grid">

		<?php
		$query = new WP_Query($args);

		if ($query->have_posts()) {

			while ($query->have_posts()) {
				$query->the_post();
		?>
				<article class="card">
					<a class="grid-item <?php $terms = wp_get_post_terms(get_the_id(), $taxonomy = 'el-work-resources');
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

</main>

<?php get_template_part('template-parts/content', 'nav'); ?>

<?php

get_footer();
