<link rel="stylesheet" href="css/centrar.css">
<div class="col-6"  style="color:black;">
  <div class="rangos1234">
    <?php foreach ($dou as $dou3) { ?>
      <div class="rangos12367">
        <p class="rangos123">Cargo : <?php echo $dou3["cargo"]; ?> </p>
        <p class="rangos123">Fecha: <?php echo $dou3["fecha"]; ?></p>
        <p class="rangos123">Nombre: <?php echo $dou3["nombre"];  ?> </p>
        <p class="rangos123"> Apellido: <?php echo $dou3["apellidopat"];  ?> <?php echo $dou3["apellidomat"];  ?></p>
        <br>
        <img src="img/arma.png" alt="">
      </div>
    <?php
    }

    ?>
  </div>



</div>