<?php 

if ( ! defined( 'ABSPATH' ) ) exit;


class Elementor_Custom_Section_Title extends \Elementor\Widget_Base {

	public function get_name() {
		return 'custom_section_title';
	}

	public function get_title() {
		return esc_html__( 'Secion Title', 'mx-elementor-theme-skeleton' );
	}

	public function get_icon() {
		return 'eicon-animated-headline'; // https://elementor.github.io/elementor-icons/
	}

	// public function get_custom_help_url() {
	// 	return 'https://developers.elementor.com/docs/widgets/';
	// }

	public function get_categories() {
		return [ 'custom_sections' ];
	}

	public function get_keywords() {
		return [ 'custom section title', 'title' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'custom_section_title_content',
			[
				'label' => esc_html__( 'Content', 'mx-elementor-theme-skeleton' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'custom_section_title',
			[
				'label' => esc_html__( 'Section Title', 'mx-elementor-theme-skeleton' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'placeholder' => esc_html__( 'Some Title', 'mx-elementor-theme-skeleton' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>
			<div class="mx-custom-section-title">
				
				<h2><?php echo $settings['custom_section_title']; ?></h2>

			</div>
		<?

	}

}