<?php 

if ( ! defined( 'ABSPATH' ) ) exit;


class Elementor_Custom_Section_Background extends \Elementor\Widget_Base {

	public function get_name() {
		return 'custom_section_background';
	}

	public function get_title() {
		return esc_html__( 'Secion Background', 'mx-elementor-theme-skeleton' );
	}

	public function get_icon() {
		return 'eicon-image-hotspot'; // https://elementor.github.io/elementor-icons/
	}

	// public function get_custom_help_url() {
	// 	return 'https://developers.elementor.com/docs/widgets/';
	// }

	public function get_categories() {
		return [ 'custom_sections' ];
	}

	public function get_keywords() {
		return [ 'section background', 'background' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'custom_section_background_content',
			[
				'label' => esc_html__( 'Content', 'mx-elementor-theme-skeleton' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'custom_section_background_title',
			[
				'label' => esc_html__( 'Section Title', 'mx-elementor-theme-skeleton' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'placeholder' => esc_html__( 'Some Title', 'mx-elementor-theme-skeleton' ),
			]
		);

		$this->add_control(
			'custom_section_background_description',
			[
				'label' => esc_html__( 'Description', 'mx-elementor-theme-skeleton' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'mx-elementor-theme-skeleton' ),
				'placeholder' => esc_html__( 'Type your description here', 'mx-elementor-theme-skeleton' ),
			]
		);

		$this->add_control(
			'custom_section_background_image',
			[
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				]
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>
			<div class="mx-custom-section-background" style="<?php echo isset( $settings['custom_section_background_image']['url'] ) ? 'background-image: url(' . $settings['custom_section_background_image']['url'] . ')' : ''; ?>">
				
				<h2><?php echo $settings['custom_section_background_title']; ?></h2>

				<p>
					<?php echo $settings['custom_section_background_description']; ?>
				</p>

			</div>
		<?

	}

}