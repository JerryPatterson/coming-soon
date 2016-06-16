<?php 
/*

This is where you will set up your customizer sections, settings, and controls. A section is how all of your options will be grouped in the customizer. Settings are the thing that will actually be changed by the customizer. The controls are how you change those settings. Below you will find examples for each. Text that should be changed will be written in ALL CAPS.

SECTIONS ______________________

//sections are how wordpress groups controls in the customizer. The id must be a unique name. You will reference this to add controls to this section. It also must contain a control in order to display.

$wp_customize->add_section(
		// $id, 
		'pwd_SECTION_ID', 
		// $args
		array(
			'title'			=> __( 'DISPLAY TITLE', 'THEME_SLUG' ),
		)
	);


SETTINGS ______________________

//settings are what actually changes when you change something in the customizer. The default can be set to any string of text. for images use - get_stylesheet_directory_uri() . '/images/landing-page.jpg' and for any other text just use whatever you would like the default to be. You will reference the setting's id when you create a control for it.

	$wp_customize->add_setting(
		// $id, 
		'pwd_SETTING_ID',
		// $args
		array(
			'default'		=> 'DEFAULT STRING',
			'sanitize_callback'	=> 'theme_slug_sanitize_image', //use only for image settings!!! Delete the whole line if this is any other kind of setting besides image
			'transport'		=> 'postMessage'
		)
	);

CONTROLS ______________________

//controls are the interface that you use to change settings. There are many types of controls that are native to wordpress including the ability to create your own. There are two custom controls defined in the main customizer-functions.php in this theme by default. Keep in mind that the SECTION must match the id of the section you'd like the control to live in and the SETTINGS must match the ID of the setting you'd like to change. The only exception to this is the formatting control which doesn't take a section. Below I will list SOME of the different controls.

***** Formatting Control *****

This is a special, custom field used to add titles, discriptions, and horizontal rules that are not attached to any setting. 

$wp_customize->add_control(
    new PWD_Customize_Misc_Control(
        $wp_customize,
        'featured_area_hr',
        array(
            'section'  => 'pwd_section_frontpage',
            'label'    => __( 'Landing Section', 'newmexicodoulas' ),
            'type'     => 'line', // This will add an <hr>. To add a heading change to 'heading', to add discription change to 'text'
        )
    )
);

***** Text Control *****

Input: Textfield
Output: Text
Code:

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		// $id
		'pwd_CONTROL_ID',
		// $args
		array(
			'settings'		=> 'pwd_SETTINGS_ID',
			'section'		=> 'pwd_SECTION_ID',
			'label'			=> __( 'LABEL TO BE DISPLAYED ABOVE FIELD', 'newmexicodoualas' ),
			'description'	=> __( 'DISCRIPTION TO BE DISPLAYED ABOVE FIELD', 'THEME_SLUG' )
		)
	)
);

***** Textarea Control *****

Input: Textarea
Output: Text
Code:


$wp_customize->add_control(
		new PWD_Textarea_Control(
			// $wp_customize object
			$wp_customize,
			// $id
		'pwd_CONTROL_ID',
		// $args
		array(
			'settings'		=> 'pwd_SETTINGS_ID',
			'section'		=> 'pwd_SECTION_ID',
			'label'			=> __( 'LABEL TO BE DISPLAYED ABOVE FIELD', 'newmexicodoualas' ),
			'description'	=> __( 'DISCRIPTION TO BE DISPLAYED ABOVE FIELD', 'THEME_SLUG' )
			)
		)
	);
	
***** Image Control *****

Input: Media Button
Output: URL
Code:

$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			// $id
			'pwd_CONTROL_ID',
			// $args
			array(
				'settings'		=> 'pwd_SETTINGS_ID',
				'section'		=> 'pwd_SECTION_ID',
				'label'			=> __( 'LABEL TO BE DISPLAYED ABOVE FIELD', 'newmexicodoualas' ),
				'description'	=> __( 'DISCRIPTION TO BE DISPLAYED ABOVE FIELD', 'THEME_SLUG' )
			)
		)
	);

***** Color Control *****

Input:  Color Picker
Output: Hex Code
Code:

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
	$wp_customize, 
			'pwd_CONTROL_ID',
			// $args
			array(
				'settings'		=> 'pwd_SETTINGS_ID',
				'section'		=> 'pwd_SECTION_ID',
				'label'			=> __( 'LABEL TO BE DISPLAYED ABOVE FIELD', 'newmexicodoualas' ),
				'description'	=> __( 'DISCRIPTION TO BE DISPLAYED ABOVE FIELD', 'THEME_SLUG' )
	) ) 
);


Output ____________________

In order to get the setting to display you use the function -  get_theme_mod( 'SETTING_ID' ) - where ever you want that string to be printed. If it is text, simply add this function in your html where you would like the text to be displayed. If it is an <img> tag, put this function in the src. If it is a background image or color, add it to the customizer_output.php document that prints a <style> tag into the head of every page. In order for the customizer to be interactive, you will have to edit the theme-customizer.js file to change it dynamically while you are still in the customizer section.

*/



/**
* Add 'Frontpage' Section.
*/
	$wp_customize->add_section(
		// $id
		'pwd_section_frontpage',
		// $args
		array(
			'title'			=> __( 'Front Page', 'newmexicodoualas' ),
		)
	);


//Landing area title and hr ______________________________________
$wp_customize->add_control(
    new PWD_Customize_Misc_Control(
        $wp_customize,
        'featured_area_header',
        array(
            'section'  => 'pwd_section_frontpage',
            'label'    => __( 'Landing Section', 'newmexicodoulas' ),
            'type'     => 'heading',
        )
    )
);
$wp_customize->add_control(
    new PWD_Customize_Misc_Control(
        $wp_customize,
        'featured_area_hr',
        array(
            'section'  => 'pwd_section_frontpage',
            'label'    => __( 'Landing Section', 'newmexicodoulas' ),
            'type'     => 'line',
        )
    )
);
//____________________________________________________________________

	// Landing Area - Featured Image
	$wp_customize->add_setting(
		// $id
		'pwd_featured_image',
		// $args
		array(
			'default'		=> get_stylesheet_directory_uri() . '/images/landing-page.jpg',
			'sanitize_callback'	=> 'theme_slug_sanitize_image',
			'transport'		=> 'postMessage'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			// $wp_customize object
			$wp_customize,
			// $id
			'pwd_featured_image',
			// $args
			array(
				'settings'		=> 'pwd_featured_image',
				'section'		=> 'pwd_section_frontpage',
				'label'			=> __( 'Featured Image', 'newmexicodoualas' ),
				'description'	=> __( 'Select the image to be used for the landing area.', 'newmexicodoualas' )
			)
		)
	);



