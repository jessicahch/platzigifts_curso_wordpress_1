<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA Compatible" content="ie=edge">
	<?php wp_head() ?>
</head>
<body>

<header>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
			</div>
			<div class="col-8">
				<nav>
					<?php wp_nav_menu(
						array
						(
							'theme_location' => 'top_menu', //localización
							'menu_class' => 'menu-principal', //clase para darle estilos a la lista del menú
							'container_class' => 'container-menu' //clase al contenedor del menú para darle estilos

						)
					);

					?>
				</nav>
			</div>
		</div>
		
	</div>
</header>