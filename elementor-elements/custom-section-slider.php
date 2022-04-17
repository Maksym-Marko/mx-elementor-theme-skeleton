<?php 

if ( ! defined( 'ABSPATH' ) ) exit;


class Elementor_Custom_Section_Slider extends \Elementor\Widget_Base {

	public function get_name() {
		return 'custom_section_slider';
	}

	public function get_title() {
		return esc_html__( 'Secion Slider', 'mx-elementor-theme-skeleton' );
	}

	public function get_icon() {
		return 'eicon-slider-push'; // https://elementor.github.io/elementor-icons/
	}

	// public function get_custom_help_url() {
	// 	return 'https://developers.elementor.com/docs/widgets/';
	// }

	public function get_categories() {
		return [ 'custom_sections' ];
	}

	public function get_keywords() {
		return [ 'custom section slider', 'slider' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'custom_section_slider_content',
			[
				'label' => esc_html__( 'Content', 'mx-elementor-theme-skeleton' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// slide 1
		$this->add_control(
			'custom_section_slider_slide1_title',
			[
				'label' => esc_html__( 'Title', 'mx-elementor-theme-skeleton' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'placeholder' => esc_html__( 'Some Title', 'mx-elementor-theme-skeleton' ),
			]
		);

		$this->add_control(
			'custom_section_slider_slide1_image',
			[
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label' => esc_html__( 'Choose Image', 'plugin-name' )
			]
		);

		// slide 2
		$this->add_control(
			'custom_section_slider_slide2_title',
			[
				'label' => esc_html__( 'Title', 'mx-elementor-theme-skeleton' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'placeholder' => esc_html__( 'Some Title', 'mx-elementor-theme-skeleton' ),
			]
		);

		$this->add_control(
			'custom_section_slider_slide2_image',
			[
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label' => esc_html__( 'Choose Image', 'plugin-name' )
			]
		);

		// slide 3
		$this->add_control(
			'custom_section_slider_slide3_title',
			[
				'label' => esc_html__( 'Title', 'mx-elementor-theme-skeleton' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'placeholder' => esc_html__( 'Some Title', 'mx-elementor-theme-skeleton' ),
			]
		);

		$this->add_control(
			'custom_section_slider_slide3_image',
			[
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label' => esc_html__( 'Choose Image', 'plugin-name' )
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

		<div class="owl-carousel owl-theme mx-owl-carousel">

			<!-- slide 1 ... -->
			<?php if( $settings['custom_section_slider_slide1_image']['url'] !== '' ) : ?>
				
				<div class="item">

					<img src="<?php echo $settings['custom_section_slider_slide1_image']['url']; ?>" alt="">					

					<?php if( isset( $settings['custom_section_slider_slide1_title'] ) ) : ?>

						<h4><?php echo $settings['custom_section_slider_slide1_title']; ?></h4>

					<?php endif; ?>

				</div>				

			<?php endif; ?>
			<!-- ... slide 1 -->

			<!-- slide 2 ... -->
			<?php if( $settings['custom_section_slider_slide2_image']['url'] !== '' ) : ?>
				
				<div class="item">

					<img src="<?php echo $settings['custom_section_slider_slide2_image']['url']; ?>" alt="">

					<?php if( isset( $settings['custom_section_slider_slide2_title'] ) ) : ?>

						<h4><?php echo $settings['custom_section_slider_slide2_title']; ?></h4>

					<?php endif; ?>

				</div>

			<?php endif; ?>
			<!-- ... slide 2 -->

			<!-- slide 3 ... -->
			<?php if( $settings['custom_section_slider_slide3_image']['url'] !== '' ) : ?>
				
				<div class="item">

					<img src="<?php echo $settings['custom_section_slider_slide3_image']['url']; ?>" alt="">

					<?php if( isset( $settings['custom_section_slider_slide3_title'] ) ) : ?>

						<h4><?php echo $settings['custom_section_slider_slide3_title']; ?></h4>

					<?php endif; ?>

				</div>

			<?php endif; ?>
			<!-- ... slide 3 -->

		</div>

		<?php if( is_admin() ) : ?>

			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

			<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

			<script>
				
				jQuery('.owl-carousel').owlCarousel({
				    loop:true,
				    margin:10,
				    nav:false,
				    responsive:{
				        0:{
				            items:1
				        }
				    }
				})

			</script>

		<?php endif; ?>		

		<?php

	}

}