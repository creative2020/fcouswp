<?php
////////////////////////////////////////////////////// TT Theme Class Customizer

class tt_define_theme_option {
	
	var $theme = 'tt_theme';	
    ///////////////////////
    // add section
    ///////////////////////
    function tt_customize_add_section($atts) {
    
    
	    $wp_customize->add_section( $atts['name'],
	        array(
	            'title'       => __( $atts['title'], $theme ),
	            'priority'    => $atts['priority'],
	            'capability'  => $atts['capability'],
	            'description' => __($atts['desc'], $theme), 
	        ) 
	    );
    
    }
	
}

$tt_theme_option_test = new tt_define_theme_option (
	$atts = array(
		'name' => 'my_test_option',
		'title' => 'Test',
		'priority' => 25,
		'capability' => 'edit_theme_options',
		'desc' => 'Change test options here',
	);

);
