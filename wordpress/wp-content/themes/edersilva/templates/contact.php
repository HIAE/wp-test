<section id="contato" class="contact">

	<div class="container">

		<div class="content">

			<div class="section-title">
				<strong class="detail">Contato</strong>
				<h1 class="title line line-bottom">Entre em contato, vamos tomar um café juntos.</h1>
			</div>

			<div class="container">
				
				<div class="form">
					
					<form>
						<p>
							<label for="name">Nome:</label>
							<input type="text" id="name" placeholder="Digite seu nome">
						</p>
						<p>
							<label for="email">Email:</label>
							<input type="email" id="email" placeholder="Digite seu e-mail">
						</p>
						<p>
							<label for="subject">Assunto:</label>
							<input type="text" id="subject" placeholder="Digite o assunto">
						</p>
						<p>
							<label for="message">Mensagem:</label>
							<textarea id="message" placeholder="Digite sua mensagem"></textarea>
						</p>
						<p class="action">
							<button type="submit" class="buttons btnSend">Enviar mensagem</button>
							<span id="loading"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/loading.gif" alt="">
									</span>
						</p>
						<div id="success">Enviado com sucesso!</div>
						<div id="error">Houve um erro. tente novamente.</div>
					</form>

				</div>

				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.1144978997972!2d-44.97374808460675!3d-22.574820585181698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9df5d751a60a0b%3A0x3546fa07bffa301c!2sR.%20Amador%20da%20Costa%20e%20Souza%2C%2027%20-%20Vila%20Ana%20Rosa%20Novaes%2C%20Cruzeiro%20-%20SP%2C%2012705-240!5e0!3m2!1spt-BR!2sbr!4v1596816067051!5m2!1spt-BR!2sbr" width="1575" height="1085" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>

			</div>

		</div>

	</div>

</section>