<html lang="es">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-16">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/logo.png">
	<title>Foro Militar</title>
</head>

<body>
	<header>
		<div id="borde_bandera">
			<img src="img/min_defensa.png" id="bandera">
		</div>
		<div id="header_bus">
			<form id="header_buscador">
				<input type="search" id="header_form_input_buscar">
				<button id="header_form_subir" type="submit"><img id="header_form_subir_img" src="img/lupa.png"></button>
			</form>
		</div>
		<div id="header_navegador">
			<nav>
				<a class="nav_a">Inicio</a>
				<a class="nav_a">Noticias</a>
				<a class="nav_a">Inscripciones</a>
				<a class="nav_a">Contacto</a>
			</nav>
		</div>
		<div id="header_acceder">
			<button id="header_ingresar"><a href="link.com" style="color: white;">Ingresar</a></button>
			<button id="header_registrarse"><a href="https://google.com" style="color: white;">Registarse</a></button>
		</div>
	</header>
	<div id="borde_aside">
		<?php require_once "includes/menu.inc.php"; ?>
	</div>
	<?php require_once $section; ?>
	<footer>
		<div id="footer_contacto">
			<p class="footer_contenido">Contactos</p>
			<p class="footer_contenido">Telefono: 54 1192839114</p>
			<p class="footer_contenido">Correo: correofalso@fake.com</p>
		</div>
		<div id="footer_redes">
			<p class="footer_contenido">Redes</p>
			<img src="img/redes/ig.png" id="footer_ig" class="footer_botones">
			<img src="img/redes/fb.jpg" id="footer_fb" class="footer_botones">
			<img src="img/redes/tw.png" class="footer_botones">
		</div>
		<div id="footer_info">
			<p class="footer_contenido">Más</p>
			<p class="footer_contenido">Terminos y condiciones</p>
			<p class="footer_contenido">Politicas de privacidad</p>
		</div>
		<p id="footer_final">Copyright © 2022 Global Power</p>
	</footer>
</body>

</html>