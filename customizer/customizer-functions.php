<?php /**
 * Image sanitization callback example.
 *
 * Checks the image's file extension and mime type against a whitelist. If they're allowed,
 * send back the filename, otherwise, return the setting default.
 *
 * - Sanitization: image file extension
 * - Control: text, WP_Customize_Image_Control
 *
 * @see wp_check_filetype() https://developer.wordpress.org/reference/functions/wp_check_filetype/
 *
 * @param string               $image   Image filename.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return string The image filename if the extension is allowed; otherwise, the setting default.
 */
function theme_slug_sanitize_image( $image, $setting ) {
	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon'
	);
	// Return an array with file extension and mime_type.
	$file = wp_check_filetype( $image, $mimes );
	// If $image has a valid mime_type, return it; otherwise, return the default.
	return ( $file['ext'] ? $image : $setting->default );
}
//formatting control
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'PWD_Customize_Misc_Control' ) ) :
class PWD_Customize_Misc_Control extends WP_Customize_Control {
    public $settings = 'blogname';
    public $description = '';
 
 
    public function render_content() {
        switch ( $this->type ) {
            default:
            case 'text' :
                echo '<p class="description">' . $this->description . '</p>';
                break;
 
            case 'heading':
                echo '<span class="customize-control-title"><h2>' . esc_html( $this->label ) . '</h2></span>';
                break;
 
            case 'line' :
                echo '<hr />';
                break;
        }
    }
}
endif;
//textbox customizer
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'PWD_Textarea_Control' ) ) :
class PWD_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="10" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
        <?php
    }
}
endif;


function pwd_register_front_page_customizer( $wp_customize ){

	/*
	 * Failsafe is safe
	 */
	if ( ! isset( $wp_customize ) ) {
		return;
	}

//__________________________Customizer Sections________________________________________

// ************************************************************************************

// This is where you will link your sections for the customizer. 
// You could set up your entire customizer on one document but it may become more convienient to split them into multiple documents. 
// If this is the case, create a file with your desired name in the SECTIONS folder and add an include below to that file.

//*************************************************************************************


@include(get_template_directory().'/customizer/sections/custom-front-page.php');

//_____________________________________________________________________________________
}

// Settings API options initilization and validation.
add_action( 'customize_register', 'pwd_register_front_page_customizer' );

@include(get_template_directory().'/customizer/output/customizer_output.php');

function pwd_customizer_live_preview() {
	wp_enqueue_script(
		'pwd-theme-customizer',
		get_stylesheet_directory_uri() . '/customizer/js/theme-customizer.js',
		array( 'customize-preview' ),
		'0.1.0',
		true
	);
} // end pwd_customizer_live_preview
add_action( 'customize_preview_init', 'pwd_customizer_live_preview' );

add_action('customize_register', 'themename_customize_register');
function themename_customize_register($wp_customize) {
  $wp_customize->remove_section( 'static_front_page' );
  $wp_customize->remove_section( 'title_tagline' );
}