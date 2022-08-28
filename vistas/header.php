<nav class="nav-main">
  <!-- Brand -->
  <a href=index.php>
    <img src="img/logo ministerio de defensa.png" alt="TechNews Logo" class="nav-brand">
  </a>
  <!-- Left Nav -->
  <ul class="nav-menu">
    <ul class="nav">
      <li><a href="">Armas</a>
        <ul>
          <li><a href="armas.php?tabla=ametralladoras">Ametralladoras</a></li>
          <li><a href="armas.php?tabla=fusilesdeasalto">Fusiles de asalto</a></li>
          <li><a href="armas.php?tabla=fusilesdecombate">Fusiles de combate</a></li>
          <li><a href="armas.php?tabla=lanzagranadas">Lanzagranadas</a></li>
        </ul>
      </li>
      <li><a href="">Operaciones especiales</a>
        <ul>
          <li><a href="operacionesfaa.php?id=1">undefined</a></li>
          <li><a href="">undefined</a></li>
          <li><a href="">undefined</a></li>
          <li><a href="">undefined</a></li>
        </ul>
      </li>
      <li><a href="">Divisiones</a>
        <ul>
          <li><a href="formaciones.php?id=1">Ejercito Argentino</a></li>
          <li><a href="formaciones.php?id=2">Armada Argentina</a></li>
          <li><a href="formaciones.php?id=3">Fuerza Aérea Argentina</a></li>

        </ul>
      </li>
      <li><a href="">Rangos</a>
        <ul>
          <li><a href="rangos_ejercito.php?division=Ejercito">Ejercito</a></li>
          <li><a href="rangos_ejercito.php?division=Armada">Armada</a></li>
          <li><a href="rangos_ejercito.php?division=Fuerza_Aérea">Fuerza Aérea</a></li>
        </ul>
      </li>
      <li><a href="">Historia</a>
        <ul>
          <li><a href="">undefined</a></li>
          <li><a href="">undefined</a></li>
          <li><a href="">undefined</a></li>
          <li><a href="">undefined</a></li>
        </ul>
      </li>
      <li><a href="autoridades.php">Autoridades</a>

      </li>
      <li><a href="">Actualidad</a>
        <ul>
          <li><a href="">undefined</a></li>
          <li><a href="">undefined</a></li>
          <li><a href="">undefined</a></li>
          <li><a href="">undefined</a></li>
        </ul>
      </li>
      <li><a href="">Conflictos</a>
        <ul>
          <li><a href="conflictos.php?id=1">Guerra de la Independencia Argentina</a></li>
          <li><a href="conflictos.php?id=2">Guerra de Independencias<br>Hispanoamericas</a></li>
          <li><a href="conflictos.php?id=3">Guerra de Brasil-Argentina</a></li>
          <li><a href="conflictos.php?id=4">Guerra de la triple alianza</a></li>
          <li><a href="conflictos.php?id=5">Conquista al desierto</a></li>
          <li><a href="conflictos.php?id=6">Guerra de Malvinas</a></li>
        </ul>
      </li>
      <li id="color_indice"><a>Venta de Armas</a>
        <ul>
          <li><a href="divisiones_alta.php">Vender</a></li>
          <li><a href="divisiones_lista.php">Mercado Libre</a></li>
        </ul>
      </li>
    </ul>
  </ul>

  <!-- Right Nav -->
  <ul class="nav-menu-right">
    <li>
      <a href="#">
        <i class="fas fa-search" id="negro"></i>
      </a>
    </li>
    <?php
    session_start();
    if (isset($_SESSION['usu'])) {
    ?>
      <li>
        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
      </li>
    <?php } else { ?>
      <li>
        <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
      </li>
      <li>
        <a class="nav-link" href="Register.php" tabindex="-1" aria-disabled="true">Registrate<a>
      </li>
    <?php } ?>
  </ul>
</nav>
<hr>