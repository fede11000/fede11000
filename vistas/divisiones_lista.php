<div class="col-9" style="color:black;">
	<link rel="stylesheet" href="css/divisiones_listaa.css">
	<?php foreach ($dou as $xd) { ?>
		<div class="row">
		 	<div>
				<?php
				if (file_exists('img/' . $xd['id_arma'] . '/principal.jpg')) { ?>
					<img width="250" height="250" src="img/<?php echo $xd['id_arma']; ?>/principal.jpg">
				<?php
				} ?>
      <h1><?php echo $xd['name_arma'] ?></h1>
	  <h3>Nacionalidad: <?php echo $xd['nacioanlidad'] ?></h3>
	  <h3>Tipo de arma: <?php echo $xd['tipo_arma'] ?></h3>
      <h3>Precio: <?php echo $xd['precio_arma'] ?></h3>
      <p id="info_contenido">
	  <!--aqui se agregara la informacion que el usuario coloque en la caja de texto PROXIMAMENTE-->
	  </p>
      <a href="divisiones_eliminar.php?id=<?php echo $xd['id_arma']; ?>"><p>Eliminar</p></a><br>
	   <a href="divisiones_lista.php?el=<?php echo $xd['id_arma']; ?>"><p id="modificar" onclick="aparece()">editar</p></a>
    </div>
	
		<?php } ?>
		<div id="modificacion" style="display">
	<?php

	foreach ($dou as $o) {
		if ($o['id_arma'] == $_GET["el"]) {
			echo "block";
		}
	}
	?>;
	">
		<div id="modificacion_salir" onclick="modificacion_salir()" style="cursor: hand;">x</div>
		<h2>Modificaciones disponibles:</h2>
		<list>
			<p onclick="modificacion_nombre()" style="cursor: hand;">Nombre</p>
			<div class="modificacion_modificado" id="modificacion_id_nombre" style="display: none;">
				<div id="modificacion_id_nombre_salir" onclick="modificacion_nombre_salir()" style="cursor: hand;">x</div>
				<form action="divisiones_modificar_nombre.php" method="POST">
					<p>Cambiar Nombre:</p>
					<input type="text" name="cambio">
					<input type="text" hidden value="#" name="id" id="input_nombre">
					<input type="submit" value="Guardar">
				</form>
			</div>
			<p onclick="modificacion_tipo()" style="cursor: hand;">Tipo</p>
			<div class="modificacion_modificado" id="modificacion_id_tipo" style="display: none;">
				<div id="modificacion_id_tipo_salir" onclick="modificacion_tipo_salir()" style="cursor: hand;">x</div>
				<form action="divisiones_modificar_tipo.php" method="POST">
					<p>Cambiar Tipo:</p>
					<input type="text" name="cambio">
					<input type="text" hidden value="#" name="id" id="input_tipo">
					<input type="submit" value="Guardar">
				</form>
			</div>
			<p onclick="modificacion_nacionalidad()" style="cursor: hand;">Nacionalidad</p>
			<div class="modificacion_modificado" id="modificacion_id_nacionalidad" style="display: none;">
				<div id="modificacion_id_nacionalidad_salir" onclick="modificacion_nacionalidad_salir()" style="cursor: hand;">x</div>
				<form action="divisiones_modificar_nacionalidad.php" method="POST">
					<p>Cambiar Nacionalidad:</p>
					<input type="text" name="cambio">
					<input type="text" hidden value="#" name="id" id="input_nacionalidad">
					<input type="submit" value="Guardar">
				</form>
			</div>
			<p onclick="modificacion_precio()" style="cursor: hand;">Precio</p>
			<div class="modificacion_modificado" id="modificacion_id_precio" style="display: none;">
				<div id="modificacion_id_precio_salir" onclick="modificacion_precio_salir()" style="cursor: hand;">x</div>
				<form action="divisiones_modificar_precio.php" method="POST">
					<p>Cambiar Precio:</p>
					<input type="text" name="cambio">
					<input type="text" hidden value="#" name="id" id="input_precio">
					<input type="submit" value="Guardar">
				</form>
			</div>
		</list>
	</div>
	<?php @$a = $_GET["el"]; ?>
	<script type="text/javascript" src="js/modificar.js"></script>
	<script>
		var a = document.getElementById("input_nombre");
		a.value = '<?php echo $a ?>';
		var b = document.getElementById("input_tipo");
		b.value = '<?php echo $a ?>';
		var c = document.getElementById("input_nacionalidad");
		c.value = '<?php echo $a ?>';
		var d = document.getElementById("input_precio");
		d.value = '<?php echo $a ?>';
	</script>


</div>