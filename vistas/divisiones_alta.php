<link rel="stylesheet" href="css/divisionalta.css">
<div class="tabla2"  style="color:black;">
    <form class="tabla1" action="divisiones_alta.php" method="POST" enctype="multipart/form-data">
       <?php
        if(isset($_SESSION['usu'])){
        ?>
        <div class="tabla3">
            <h1>INGRESE SU ARMA</h1>
        <br>
        <p>Nombre del arma:</p>
        <input type="text" name="nombre">
        <br>
        <br>
        <p>Tipo de arma:</p>
        <input type="text" name="tipo">
        <br>
        <br>
        <p>Nacionalidad del arma:</p>
        <input type="text" name="nacionalidad">
        <br>
        <br>
        <p>Precio del arma:</p>
        <input type="text" name="precio" required>
        <br>
        <br>
		<div class="mb-3">
        <label for="principal_img" class="form-label">subir imagen</label>
        <input class="form-control" type="file" name="principal_img" id="principal_img" accept=".jpg, .jpeg" required>
        </div>
		<br>
		<br>
        <input type="submit" name="subir" value="subir" class="btn btn-light">
        <br>
        <br>
		</div>
        <?php } else{ ?>
            <h3>Primero debe iniciar sesion para entrar</h3>
        <?php } ?>
    </form>
    </div>

