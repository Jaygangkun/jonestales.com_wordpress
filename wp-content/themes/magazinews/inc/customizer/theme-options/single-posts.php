<?php
/**
 * Excerpt options
 *
 * @package Theme Palace
 * @subpackage Magazinews
 * @since Magazinews 1.0.0
 */

// Add excerpt section
$wp_customize->add_section( 'magazinews_single_post_section', array(
	'title'             => esc_html__( 'Single Post','magazinews' ),
	'description'       => esc_html__( 'Options to change the single posts globally.', 'magazinews' ),
	'panel'             => 'magazinews_theme_options_panel',
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'magazinews_theme_options[single_post_hide_date]', array(
	'default'           => $options['single_post_hide_date'],
	'sanitize_callback' => 'magazinews_sanitize_switch_control',
) );

$wp_customize->add_control( new Magazinews_Switch_Control( $wp_customize, 'magazinews_theme_options[single_post_hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'magazinews' ),
	'section'           => 'magazinews_single_post_section',
	'on_off_label' 		=> magazinews_hide_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'magazinews_theme_options[single_post_hide_author]', array(
	'default'           => $options['single_post_hide_author'],
	'sanitize_callback' => 'magazinews_sanitize_switch_control',
) );

$wp_customize->add_control( new Magazinews_Switch_Control( $wp_customize, 'magazinews_theme_options[single_post_hide_author]', array(
	'label'             => esc_html__( 'Hide Author', 'magazinews' ),
	'section'           => 'magazinews_single_post_section',
	'on_off_label' 		=> magazinews_hide_options(),
) ) );

// Archive author category setting and control.
$wp_customize->add_setting( 'magazinews_theme_options[single_post_hide_category]', array(
	'default'           => $options['single_post_hide_category'],
	'sanitize_callback' => 'magazinews_sanitize_switch_control',
) );

$wp_customize->add_control( new Magazinews_Switch_Control( $wp_customize, 'magazinews_theme_options[single_post_hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'magazinews' ),
	'section'           => 'magazinews_single_post_section',
	'on_off_label' 		=> magazinews_hide_options(),
) ) );

// Archive tag category setting and control.
$wp_customize->add_setting( 'magazinews_theme_options[single_post_hide_tags]', array(
	'default'           => $options['single_post_hide_tags'],
	'sanitize_callback' => 'magazinews_sanitize_switch_control',
) );

$wp_customize->add_control( new Magazinews_Switch_Control( $wp_customize, 'magazinews_theme_options[single_post_hide_tags]', array(
	'label'             => esc_html__( 'Hide Tag', 'magazinews' ),
	'section'           => 'magazinews_single_post_section',
	'on_off_label' 		=> magazinews_hide_options(),
) ) );
