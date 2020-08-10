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

			<?php wp_nav_menu(array('before' => '', 'after' => '', 'menu' => 'Principal', 'container' => 'false', 'items_wrap' => '<nav><ul class="nav menu">%3$s</ul></nav>')); ?>

			<span class="btn-mobile fas fa-bars"></span>

			<?php get_template_part( "templates/social", "social" ); ?>

		</div>

	</header>



