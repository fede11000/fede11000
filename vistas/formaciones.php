<div id="info" class="col-6" style="color:black">
    <h1><?php echo $dou[0]["nom_grup"] ?></h1> <!-- aqui pon el nombre de la sección -->
    <p id="info_contenido"><?php echo $dou[0]["informacion"]; ?></p>
    <h3>Conformado por:</h3>
    <p id="info_contenido"><?php echo $dou[0]["conformado"]; ?></p>
    <img src="" alt="" />
    <!-- colocar aqui la info de la arma :b -->
</div>
<div id="perfil" class="col-3">
    <?php
    require_once "includes/config.php"; 
    $jy=$_GET['id'];
    
echo  '<img src="img/ejercito'.$jy.'.jpg" > ';
     ?>
</div>