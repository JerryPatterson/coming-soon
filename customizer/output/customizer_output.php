<?php 
// This function will output css to every page on your site. Use it to change things like colors and background-images

function pwd_customizer_css() {
?>
	 <style type="text/css">
			.featured {
				background-image: url( <?php echo get_theme_mod( 'pwd_featured_image' ) ?> ); 
			}
	 </style>
<?php
} // end pwd_customizer_css
add_action( 'wp_head', 'pwd_customizer_css');