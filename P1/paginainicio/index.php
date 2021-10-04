<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Grayscale - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">FCPN</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li>
			<?php echo '<a href="../Estudiante/login.php" class="btn btn-primary js-scroll-trigger">VER NOTAS</a>';?></p>
		  </li>
		  <li>
			<?php echo '<a href="../Docente/login.php" class="btn btn-primary js-scroll-trigger">AREA DOCENTE</a>';?></p>
		  </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">INFORMÁTICA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">MEDICINA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">DERECHO</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">INF - 324</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Dirígete a la pagina de la Facultad:</h2>        
		<?php echo '<a href="http://www.fcpn.edu.bo/" class="btn btn-primary js-scroll-trigger">FCPN</a>';?>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">CARRERA DE INFORMÁTICA</h2>
          <p class="text-white-50">Dirígete a la Carrera de Informática--> 
            <?php echo '<a href="http://www.informatica.edu.bo/" class="btn btn-primary js-scroll-trigger">CARRERA DE INFORMÁTICA</a>';?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section text-center">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
         
          <div class="col-lg-8 mx-auto">
            <h4>Carrera de Medicina</h4>
            <p class="text-black-50 mb-0">Dirígete a la Carrera de Medicina--> 
			<?php echo '<a href="https://fment.umsa.bo/" class="btn btn-primary js-scroll-trigger">CARRERA DE MEDICINA</a>';?></p>
          </div>
        
      </div>     

    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="about-section text-center">
    <div class="container">
      <div class="row">
          <div class="col-lg-8 mx-auto">
            <h4 class="text-white mb-4">Carrera de Derecho</h4>
            <p class="text-white-50">Dirígete a la Carrera de Derecho--> 
			<?php echo '<a href="http://www.carrera-derecho.edu.bo/" class="btn btn-primary js-scroll-trigger">CARRERA DE DERECHO</a>';?>.</p>
          </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  
  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Felizmente editado por Alvaro Muruchi :)
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
