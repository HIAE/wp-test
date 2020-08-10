<?php
if( class_exists( 'AboutOptionsPage' ) ) { ?>

	<section id="sobre" class="about" style="background: url(<?= get_option('about_option_name')['image']; ?>);">
		<div class="container">
			<div class="content">
				<div class="section-title">
					<h1 class="line line-top"><?= get_option('about_option_name')['title']; ?></h1>
					<h2 class="line line-bottom"><?= get_option('about_option_name')['subtitle']; ?></h2>
				</div>
				<a href="#portfolio" class="buttons">Meu portfólio</a>
			</div>
		</div>
	</section>

	<?php } ?>