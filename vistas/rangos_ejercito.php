<link rel="stylesheet" href="css/centrar.css">
<div class="col-6">
<?php foreach ($dou as $dou2) { 

if($dou2["division"]=="Ejercito"){

?>
<h1 class="rangos1238" style="color:black ;">Ejercito</h1>
<br><br><br>
<?php
break;
}
if($dou2["division"]=="Armada"){

  ?>
  <h1 class="rangos1238" style="color:black ;">Armada</h1>
  <br><br><br>
  <?php
  break;
  }
  if($dou2["division"]=="Fuerza_Aérea"){

    ?>
    <h1 class="rangos1238" style="color:black ;">Fuerza Aérea</h1>
    <br><br><br>
    <?php
    break;
    }
}
?>
  <div class="rangos1234" style="color:black;">
  
    <h2 class="rangos123">Suboficiales</h2>
    
    <?php foreach ($dou as $dou2) { ?>
      
      <?php
      if($dou2["Oficial_Suboficial"]=="Suboficial"){?>
      
  <p class="rangos1236" > <?php  
  echo $dou2["rango"];
  ?>   </p>  
  <img src="img/arma.png" alt="">
  <br>
    
    <?php
      }
    }
   
    ?>
  
    <h2 class="rangos123" style="color:black;">Oficiales</h2>
    <?php foreach ($dou as $dou2) { ?>
      
      <?php
      if($dou2["Oficial_Suboficial"]=="Oficial"){?>
  <p class="rangos1236" > <?php  
  echo $dou2["rango"];
  ?>   </p>  
  <img src="img/arma.png" alt="">
    <br>
    <?php
      }
    }
   
    ?>
  </div>

</div>