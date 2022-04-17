<?php 
if ( ! defined( 'ABSPATH' ) ) exit;

// create "custom_sections" category
if( has_action('elementor/widgets/register') ) :

	function mx_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category( 'custom_sections', [
			'title' => esc_html__( 'Custom Sections', 'mx-elementor-theme-skeleton' ),
			'icon' => 'eicon-heart',
		] );

	}
	add_action( 'elementor/elements/categories_registered', 'mx_add_elementor_widget_categories' );


	/**
	* add custom sections
	*/

	// custom section title
	function mx_register_elementor_widget_custom_section_title( $widgets_manager ) {

		require_once( __DIR__ . '/custom-section-title.php' );

		$widgets_manager->register( new \Elementor_Custom_Section_Title() );

	}
	add_action( 'elementor/widgets/register', 'mx_register_elementor_widget_custom_section_title' );

	// custom section background
	function mx_register_elementor_widget_custom_section_background( $widgets_manager ) {

		require_once( __DIR__ . '/custom-section-background.php' );

		$widgets_manager->register( new \Elementor_Custom_Section_Background() );

	}
	add_action( 'elementor/widgets/register', 'mx_register_elementor_widget_custom_section_background' );

	// section slider
	function mx_register_elementor_widget_custom_section_slider( $widgets_manager ) {

		require_once( __DIR__ . '/custom-section-slider.php' );

		$widgets_manager->register( new \Elementor_Custom_Section_Slider() );

	}
	add_action( 'elementor/widgets/register', 'mx_register_elementor_widget_custom_section_slider' );

endif;