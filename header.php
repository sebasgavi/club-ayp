<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- INICIA BARRA DE NAVEGACION-->
			<nav class="nav">

				<header class="nav__header">

					<div class="nav__header__container">
						<div class="nav__header__container__logo">
							<figure><img src="<?php echo get_template_directory_uri(); ?>/img/logopng.png" alt="" width="50px"></figure>
						</div>
						<ul class="nav__header__container__links">
							<li><a href="#">Home</a></li>
							<li><a href="#">Historia</a></li>
							<li><a href="#">Equipo</a></li>
							<li><a href="#">Proyecto</a></li>
							<li><a href="#">Contacto</a></li>

						</ul>
					</div>


					<ul class="nav__header__contact">
						<li><button>Donar</button></li>
					</ul>


					<div class="nav__header__toggle">
						<i class="fa fa-bars menu" aria-hidden="true"></i>
					</div>
				</header>

				<ul class="nav__column">
					<li><a href="#">Home</a></li>
					<li><a href="#">Historia</a></li>
					<li><a href="#">Equipo</a></li>
					<li><a href="#">Proyecto</a></li>
					<li><a href="#">Contacto</a></li>
					<li class="button"><button class="">Cotizar</button></li>
				</ul>

				</nav>
				<!-- TERMINA BARRA DE NAVEGACION-->
			
