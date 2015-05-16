<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 2020 Customizer

/**
 * Adds the Customize page to the WordPress admin area
 */
function tt_customizer_menu() {
    add_theme_page( 'TT Customize', 'TT Customize', 'edit_theme_options', 'customize.php' );
}
add_action( 'admin_menu', 'tt_customizer_menu' );

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function tt_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'TT Colors',
        array(
            'title' => 'TT Colors',
            'description' => 'Select your colors',
            'priority' => 35,
        )
    );
}
add_action( 'customize_register', 'tt_customizer' );

$wp_customize->add_setting(
    'copyright_textbox',
    array(
        'default' => 'TT Default copyright text',
    )
);

$wp_customize->add_control(
    'copyright_textbox',
    array(
        'label' => 'Copyright text',
        'section' => 'example_section_one',
        'type' => 'text',
    )
);