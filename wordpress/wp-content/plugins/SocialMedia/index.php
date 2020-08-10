<?php
/**
 * Plugin Name: Redes Sociais
 * Plugin URI: http://edersilva.com
 * Description: Plugin criado para exibir as Redes Sociais
 * Version: 1.0
 * Author: Eder Silva
 * Author URI: http://edersilva.com
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class SocialMedia {

	private $social_media;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'social_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'social_page_init' ) );
	}

	public function social_add_plugin_page() {
		add_menu_page(
			'Redes Sociais', // Admin facebook
			'Redes Sociais', // Menu facebook
			'manage_options', // Capability
			'social', // Admin Slug
			array( $this, 'social_admin_page' ),
			'dashicons-admin-generic', // Icon
			4 // Menu Position
		);
	}

	public function social_admin_page() {
		$this->social_options = get_option( 'social_option_name' );
		?>

		<div class="wrap">
			<h2>Redes Sociais</h2>
			<p>Insira aqui as suas redes sociais</p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
				settings_fields( 'social_option_group' );
				do_settings_sections( 'social-admin' );
				submit_button();
				?>
			</form>
		</div>
	<?php }

	public function social_page_init() {
		register_setting(
			'social_option_group',
			'social_option_name',
			array( $this, 'social_sanitize' )
		);

		add_settings_section(
			'social_setting_section',
			'Configurações',
			array( $this, 'social_page_info' ),
			'social-admin'
		);

		add_settings_field(
			'facebook',
			'Facebook',
			array( $this, 'facebook_field' ),
			'social-admin',
			'social_setting_section'
		);

		add_settings_field(
			'twitter',
			'Twitter',
			array( $this, 'twitter_field' ),
			'social-admin',
			'social_setting_section'
		);

		add_settings_field(
			'linkedin',
			'Linkedin',
			array( $this, 'linkedin_field' ),
			'social-admin',
			'social_setting_section'
		);

		add_settings_field(
			'pinterest',
			'Pinterest',
			array( $this, 'pinterest_field' ),
			'social-admin',
			'social_setting_section'
		);

		add_settings_field(
			'behance',
			'Behance',
			array( $this, 'behance_field' ),
			'social-admin',
			'social_setting_section'
		);

		add_settings_field(
			'google',
			'Google Plus',
			array( $this, 'google_field' ),
			'social-admin',
			'social_setting_section'
		);

		add_settings_field(
			'instagram',
			'Instagram',
			array( $this, 'instagram_field' ),
			'social-admin',
			'social_setting_section'
		);
	}

	public function social_sanitize($input) {

		$sanitary_values = array();

		if ( isset( $input['facebook'] ) ) {
			$sanitary_values['facebook'] = sanitize_text_field( $input['facebook'] );
		}

		if ( isset( $input['twitter'] ) ) {
			$sanitary_values['twitter'] = sanitize_text_field( $input['twitter'] );
		}

		if ( isset( $input['linkedin'] ) ) {
			$sanitary_values['linkedin'] = sanitize_text_field( $input['linkedin'] );
		}

		if ( isset( $input['pinterest'] ) ) {
			$sanitary_values['pinterest'] = sanitize_text_field( $input['pinterest'] );
		}

		if ( isset( $input['behance'] ) ) {
			$sanitary_values['behance'] = sanitize_text_field( $input['behance'] );
		}

		if ( isset( $input['google'] ) ) {
			$sanitary_values['google'] = sanitize_text_field( $input['google'] );
		}

		if ( isset( $input['instagram'] ) ) {
			$sanitary_values['instagram'] = sanitize_text_field( $input['instagram'] );
		}

		return $sanitary_values;
	}

	public function social_page_info() {}

	public function facebook_field() {
		printf(
			'<input class="regular-text" type="text" name="social_option_name[facebook]" id="facebook" value="%s">',
			isset( $this->social_options['facebook'] ) ? esc_attr( $this->social_options['facebook']) : ''
		);
	}

	public function twitter_field() {
		printf(
			'<input class="regular-text" type="text" name="social_option_name[twitter]" id="twitter" value="%s">',
			isset( $this->social_options['twitter'] ) ? esc_attr( $this->social_options['twitter']) : ''
		);
	}

	public function linkedin_field() {
		printf(
			'<input class="regular-text" type="text" name="social_option_name[linkedin]" id="linkedin" value="%s">',
			isset( $this->social_options['linkedin'] ) ? esc_attr( $this->social_options['linkedin']) : ''
		);
	}

	public function pinterest_field() {
		printf(
			'<input class="regular-text" type="text" name="social_option_name[pinterest]" id="instagram" value="%s">',
			isset( $this->social_options['pinterest'] ) ? esc_attr( $this->social_options['pinterest']) : ''
		);
	}	

	public function behance_field() {
		printf(
			'<input class="regular-text" type="text" name="social_option_name[behance]" id="behance" value="%s">',
			isset( $this->social_options['behance'] ) ? esc_attr( $this->social_options['behance']) : ''
		);
	}

	public function google_field() {
		printf(
			'<input class="regular-text" type="text" name="social_option_name[google]" id="google" value="%s">',
			isset( $this->social_options['google'] ) ? esc_attr( $this->social_options['google']) : ''
		);
	}

	public function instagram_field() {
		printf(
			'<input class="regular-text" type="text" name="social_option_name[instagram]" id="instagram" value="%s">',
			isset( $this->social_options['instagram'] ) ? esc_attr( $this->social_options['instagram']) : ''
		);
	}

}


new SocialMedia();
