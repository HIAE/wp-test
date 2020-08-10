<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

	<header id="header" class="header">

		<div class="container">
			
			<h1 class="logo"><?php bloginfo("name"); ?></h1>

			<nav>
				<ul class="nav menu">
					<li><a href="#sobre">Home</a></li>
					<li><a href="#sobre">Sobre</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#servicos">Serviços</a></li>
					<li><a href="#opinioes">Opiniões</a></li>
					<li><a href="#clientes">Clientes</a></li>
					<li><a href="#contato">Contato</a></li>
				</ul>
			</nav>

			<span class="btn-mobile fas fa-bars"></span>

			<?php get_template_part( "templates/social", "social" ); ?>

		</div>

	</header>



