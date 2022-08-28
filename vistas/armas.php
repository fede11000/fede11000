<html>

<head></head>

<body>
	<div>
	</div>

	<div id="info" class="col-6" style="color:black;">
		<?php foreach ($dou as $mil) { ?>
			<div>
				<img src="" alt="" />
				<h3><?php echo $mil["arma"] ?></h1>
				</h3>
				<p id="info_contenido"><?php echo $mil["info"]; ?></p>
				<a href="armas.php?tabla=ametralladoras" target="_blank">Leer mas <i class="fas fa-angle-double-right"></i></a>
			</div>
			<br><br>
		<?php } ?>
	</div>
</body>

</html>