<?php
/**
 * pagination options
 *
 * @package Theme Palace
 * @subpackage Magazinews
 * @since Magazinews 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'magazinews_pagination', array(
	'title'               => esc_html__('Pagination','magazinews'),
	'description'         => esc_html__( 'Pagination section options.', 'magazinews' ),
	'panel'               => 'magazinews_theme_options_panel',
) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'magazinews_theme_options[pagination_enable]', array(
	'sanitize_callback' => 'magazinews_sanitize_switch_control',
	'default'             => $options['pagination_enable'],
) );

$wp_customize->add_control( new Magazinews_Switch_Control( $wp_customize, 'magazinews_theme_options[pagination_enable]', array(
	'label'               => esc_html__( 'Pagination Enable', 'magazinews' ),
	'section'             => 'magazinews_pagination',
	'on_off_label' 		=> magazinews_switch_options(),
) ) );

// Site layout setting and control.
$wp_customize->add_setting( 'magazinews_theme_options[pagination_type]', array(
	'sanitize_callback'   => 'magazinews_sanitize_select',
	'default'             => $options['pagination_type'],
) );

$wp_customize->add_control( 'magazinews_theme_options[pagination_type]', array(
	'label'               => esc_html__( 'Pagination Type', 'magazinews' ),
	'section'             => 'magazinews_pagination',
	'type'                => 'select',
	'choices'			  => magazinews_pagination_options(),
	'active_callback'	  => 'magazinews_is_pagination_enable',
) );
