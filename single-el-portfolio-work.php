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

	<main id="primary" class="site-main">
<?php
	if ( function_exists ( 'get_field' ) ) {
 
 if ( get_field( 'work_title' ) ) {
	 the_field( 'work_title' );
 }

 
	$image = get_field('work_image');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	if( $image ) {
    echo wp_get_attachment_image( $image, $size );
	}

 if ( get_field( 'work_intro' ) ) {
	 echo '<h2>'. get_field( 'work_intro' ) .'</h2>';
 }
	 

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
   			<div id="tab-technical_skills" data-tab-content><p><?php the_sub_field('technical_skills'); ?></p>
				<ul>
					<li>React Router</li>
					<li>State Hooks (useState)</li>
					<li>React props</li>
					<li>API</li>
				</ul></div>
 		</div>
 	<?php endwhile; ?>

	</table>

 	<? else :



endif;
 

}




 ?>
	</main><!-- #main -->

<?php

get_footer();
