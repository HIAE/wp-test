<?php

namespace App\Hooks;

use Error;
use SolidPress\Core\Hook;

class CostumerForm extends Hook
{
	public function __construct()
	{
		$this->add_action('wp_ajax_nopriv_send_costumer_email', 'send_costumer_email');
		$this->add_action('wp_ajax_send_costumer_email', 'send_costumer_email');
	}

	public function send_costumer_email(): void
	{
		try {
			if (
				!isset($_POST['send_costumer_email_nonce'])
				|| !wp_verify_nonce($_POST['send_costumer_email_nonce'], 'send_costumer_email')
			) {
				throw new Error('Invalid request!');
			}

			$costumer_form_fields = get_field('costumer_form', $_POST['page_id']);

			$to = $costumer_form_fields['to'];
			$subject = $costumer_form_fields['subject'];
			$body = "
			<h2>Identificação</h2>
			<p><strong>Nome:</strong>{$_POST['name']}</p>
			<p><strong>CPF:</strong>{$_POST['cpf']}</p>
			<p><strong>Data de nascimento:</strong>{$_POST['birthday']}</p>
			<p><strong>Celular:</strong>{$_POST['cellphone']}</p>
			<p><strong>Telefone Comercial:</strong>{$_POST['commercial_phone']}</p>
			<p><strong>Email:</strong>{$_POST['email']}</p>
			<p><strong>Profissão:</strong>{$_POST['job']}</p>
			<p><strong>N° de dependentes:</strong>{$_POST['number_of_dependents']}</p>

			<h2>Endereço</h2>
			<p><strong>UF:</strong>{$_POST['uf']}</p>
			<p><strong>Cidade:</strong>{$_POST['city']}</p>
			<p><strong>CEP:</strong>{$_POST['postal_code']}</p>
			<p><strong>Endereço:</strong>{$_POST['address']}</p>

			<h2>Tipo de produto</h2>
			<p><strong>Tipo:</strong>{$_POST['type']}</p>
			<p><strong>Rede de atendimento:</strong>{$_POST['range']}</p>
			<p><strong>Cobertura:</strong>{$_POST['cobertura']}</p>
			<p><strong>Abrangência:</strong>{$_POST['abrangencia']}</p>

			<h2>Observações</h2>
			<p>{$_POST['message']}</p>
			";
			$headers = array('Content-Type: text/html; charset=UTF-8');

			$email = wp_mail($to, $subject, $body, $headers);

			if (!$email) {
				throw new Error('Erro ao enviar email!');
			}

			wp_send_json([
				'body' => $body,
				'error' => false,
				'message' => 'Email enviado com sucesso!'
			]);
		} catch (\Throwable $e) {
			wp_send_json([
				'body' => $body,
				'error' => true,
				'message' => $e->getMessage()
			]);
		}
	}
}
