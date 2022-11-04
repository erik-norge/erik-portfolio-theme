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
	 

 

 // Check rows existexists.
 if( have_rows('single_works_tab') ):
 
	 // Loop through rows.
	 while( have_rows('single_works_tab') ) : the_row();
 
		 // Load sub field value.
		 $takeaway = get_sub_field('takeaway');
		 $process = get_sub_field('process');
		 $development = get_sub_field('development');
		 // Do something...
			echo $takeaway;
			echo $process;
			echo $development;
	 // End loop.
	 endwhile;
 
 // No value.
 else :
	 // Do something...
 endif;


}




 ?>
	</main><!-- #main -->

<?php

get_footer();
