<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
    'posts_per_page' => -1
);

$query = new WP_Query( $args );
get_template_part( 'template-parts/content', 'page' );
if ( $query->have_posts() ) : ?>
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="swiper-slide">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <?php
    wp_reset_postdata();
endif;
?>

	</main><!-- #main -->

<?php
get_footer();
