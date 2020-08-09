<?php
/**
 * Plugin Name: Página Sobre
 * Plugin URI: http://edersilva.com
 * Description: Plugin criado para exibir conteúdo na sessão Sobre o Autor do Portfolio
 * Version: 1.0
 * Author: Eder Silva
 * Author URI: http://edersilva.com
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class AboutOptionsPage {

	private $about_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'about_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'about_page_init' ) );
	}

	public function about_add_plugin_page() {
		add_menu_page(
			'Sobre', // Admin Title
			'Sobre', // Menu Title
			'manage_options', // Capability
			'about', // Admin Slug
			array( $this, 'about_admin_page' ),
			'dashicons-admin-generic', // Icon
			3 // Menu Position
		);
	}

	public function about_admin_page() {
		$this->about_options = get_option( 'about_option_name' );
		wp_enqueue_media();
		wp_register_script('media-uploader', plugins_url('assets/js/settings.js' , __FILE__ ), array('jquery'));
		wp_enqueue_script('media-uploader');
		?>

		<div class="wrap">
			<h2>Sobre</h2>
			<p>Insira aqui as informações sobre você</p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
				settings_fields( 'about_option_group' );
				do_settings_sections( 'about-admin' );
				submit_button();
				?>
			</form>
		</div>
	<?php }

	public function about_page_init() {
		register_setting(
			'about_option_group',
			'about_option_name',
			array( $this, 'about_sanitize' )
		);

		add_settings_section(
			'about_setting_section',
			'Configurações',
			array( $this, 'about_page_info' ),
			'about-admin'
		);

		add_settings_field(
			'title',
			'Título',
			array( $this, 'title_field' ),
			'about-admin',
			'about_setting_section'
		);

		add_settings_field(
			'subtitle',
			'Subtítulo',
			array( $this, 'subtitle_field' ),
			'about-admin',
			'about_setting_section'
		);

		add_settings_field(
			'image',
			'Imagem',
			array( $this, 'image_field' ),
			'about-admin',
			'about_setting_section'
		);
	}

	public function about_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['title'] ) ) {
			$sanitary_values['title'] = sanitize_text_field( $input['title'] );
		}

		if ( isset( $input['subtitle'] ) ) {
			$sanitary_values['subtitle'] = esc_textarea( $input['subtitle'] );
		}

		if ( isset( $input['image'] ) ) {
			$sanitary_values['image'] = sanitize_text_field( $input['image'] );
		}

		return $sanitary_values;
	}

	public function about_page_info() {
		
	}

	public function title_field() {
		printf(
			'<input class="regular-text" type="text" name="about_option_name[title]" id="title" value="%s">',
			isset( $this->about_options['title'] ) ? esc_attr( $this->about_options['title']) : ''
		);
	}

	public function subtitle_field() {
		printf(
			'<textarea class="large-text" rows="5" name="about_option_name[subtitle]" id="subtitle">%s</textarea>',
			isset( $this->about_options['subtitle'] ) ? esc_attr( $this->about_options['subtitle']) : ''
		);
	}

	public function image_field() {
		$img = $this->about_options['image'];
		if($img){ echo '<img width="250" src="'.$img.'" /><br><br>'; }
		printf(

			'<input id="background_image" type="text" name="about_option_name[image]" value="" />
			<input id="upload_image_button" type="button" class="button-primary" value="Inserir imagem" />'
		);
	}

}


new AboutOptionsPage();
