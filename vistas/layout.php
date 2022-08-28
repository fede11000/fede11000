<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Elite</title>
  <!-- Tipografia -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Logos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="css/layout.css">
</head>

<body>

  <div class="menu-btn">
    <i class="fas fa-bars fa-2x" id="negro"></i>
  </div>

  <div class="container">
  <?php require_once "vistas/header.php"; ?>
    <!-- Navigation -->
   <br>

    <?php
            $section = (isset($section)) ? $section : 'home';
            require_once $section ;
            ?>

    <!-- Redes Sociales -->
    <section class="social">
      <p>Seguinos en nuestras redes</p>
      <div class="links">
        <a href="https://www.facebook.com/profile.php?id=100084197506639">
          <i class="fab fa-facebook-f" id="negro"></i>
        </a>
        <a href="https://twitter.com">
          <i class="fab fa-twitter" id="negro"></i>
        </a>
        <a href="https://instagram.com/ffaa_argent01?igshid=YmMyMTA2M2Y=">
          <i class="fab fa-instagram" id="negro"></i>
        </a>
      </div>
    </section>
  </div>

  <!-- Footer Links -->
  <div class="footer-links">
    <div class="footer-container">
      <ul>
        <li>
          <a href="#">
            <h3 id="blanco">Sobre nosotros.</h3>
          </a>
        </li>
        <li>
          <a href="#" id="blanco">Somos un grupo de alumnos en un proyecto escolar, al parecer militar, haciendo una pagina web.</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <h3>Global Elite Proyecto®</h3>
  </footer>

  <!-- Javascript animacion -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="js/modificar.js"></script>
</body>

</html>