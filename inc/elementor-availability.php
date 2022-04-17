<?php 
if ( ! defined( 'ABSPATH' ) ) exit;

class MX_Elementor_Availability
{

	const MINIMUM_ELEMENTOR_VERSION = '3.6.3';

	public function __construct() {

		$this->init();

	}

	public function init()
	{

		// if Elementor installed
		$this->if_elementor_installed();

		// check Elementor version
		$this->elementor_version();

	}

	// if Elementor installed
	public function if_elementor_installed()
	{

		if( ! did_action( 'elementor/loaded' ) ) {

			add_action( 'admin_notices', [ $this, 'notice_elementor_doesnt_install' ] );

		}

		return;

	}

	// check Elementor version
	public function elementor_version()
	{

		if( did_action( 'elementor/loaded' ) ) {

			add_action( 'admin_notices', [ $this, 'notice_elementor_version' ] );

		}

		return;

	}

	/**
	* Notifications
	**/
	// if Elementor installed
	public function notice_elementor_doesnt_install()
	{

		if ( function_exists( 'elementor_pro_load_plugin' ) ) {
			return;
		}

		$installed_plugins = get_plugins();

		$plugin = 'elementor/elementor.php';

		$is_elementor_installed = isset( $installed_plugins[ $plugin ] );

		if ( $is_elementor_installed ) {
			if ( ! current_user_can( 'activate_plugins' ) ) {
				return;
			}

			$class = 'notice notice-warning';
			$message = __( 'You should activate Elementor plugin.', 'sample-text-domain' );

			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );

			
		} else {
			if ( ! current_user_can( 'install_plugins' ) ) {
				return;
			}

			$class = 'notice notice-warning';
			$message = __( 'You should install Elementor plugin.', 'sample-text-domain' );

			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
			
		}		

	}

	// check Elementor version
	public function notice_elementor_version()
	{

		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			
			$class = 'notice notice-warning';
			$message = __( 'Recommended version of Elementor ' . self::MINIMUM_ELEMENTOR_VERSION . ' or higher.', 'sample-text-domain' );

			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );

		}

	}


}

new MX_Elementor_Availability();