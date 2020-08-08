<?php

namespace Theme\Hooks;

use Error;
use SolidPress\Core\Hook;
use Theme\Helpers\Utils;

/**
 * Contact form backend
 */
class ContactForm extends Hook {
	/**
	 * Bind request handlers
	 */
	public function __construct() {
        $this->add_action( 'wp_ajax_nopriv_send_contact_email', 'send_contact_email' );
		$this->add_action( 'wp_ajax_send_contact_email', 'send_contact_email' );
	}

	/**
	 * Handle email requests
	 *
	 * @return void
	 */
	public function send_contact_email(): void {
		try {
			if (
				! isset( $_POST['send_contact_email_nonce'] )
				|| ! wp_verify_nonce( $_POST['send_contact_email_nonce'], 'send_contact_email' )
			) {
				throw new Error( 'Invalid request!' );
			}

			$page_id = intval( Utils::sanitize_post( $_POST['page_id'] ) );

			$mail_to      = get_field( 'mail_to', $page_id );
			$mail_subject = get_field( 'mail_subject', $page_id );

			$to      = $mail_to;
			$subject = $mail_subject . ' - ' . Utils::sanitize_post( $_POST['subject'] ?? '' );

			$body  = '<p>Você recebeu um novo email.</p>';
			$body .= '<p><strong>' . __( 'Name', 'piassi' ) . ':</strong>' . Utils::sanitize_post( $_POST['name'] ?? '' ) . '</p>';
			$body .= '<p><strong>' . __( 'Email', 'piassi' ) . ' :</strong>' . Utils::sanitize_post( $_POST['email'] ?? '' ) . '</p>';
			$body .= '<p><strong>' . __( 'Message', 'piassi' ) . ':</strong><br/>' . Utils::sanitize_post( $_POST['message'] ?? '' ) . '</p>';

			$headers = array( 'Content-Type: text/html; charset=UTF-8' );

			$email = wp_mail( $to, $subject, $body, $headers );

			if ( ! $email ) {
				throw new Error( 'Erro ao enviar email!' );
			}

			wp_send_json(
                array(
					'body'    => $body,
					'error'   => false,
					'message' => 'Email enviado com sucesso!',
                )
            );
		} catch ( \Throwable $e ) {
			wp_send_json(
                array(
					'body'    => $body,
					'error'   => true,
					'message' => $e->getMessage(),
                )
            );
		}
	}
}
