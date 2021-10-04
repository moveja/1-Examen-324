<?php
include "con_db.php";
    session_start();
    $ci=$_SESSION['ci'];
    $sqla= "SELECT p.nombre FROM usuario u,persona p WHERE u.ci='$ci' AND p.ci = u.ci ";
    $querys = mysqli_query ($conn,$sqla);
    $data = mysqli_fetch_array($querys);
    if (empty($_SESSION['active'])) {
       header ('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Grayscale - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="../paginainicio/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../paginainicio/css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo $_SESSION['usuario'].': '.$data['nombre']; ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li>
			<?php echo '<a href="./cerrar.php" class="btn btn-primary js-scroll-trigger">CERRAR SESION</a>';?></p>
		  </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- About Section -->
  <section id="signup" class="about-section text-center">
    <div class="container">
      <div class="row">
          <div class="col-lg-8 mx-auto">
            <h4 class="text-white mb-4">NOTAS</h4>
          
          </div>
      </div>
	    <p>
            <?php include "notadoc.php"?>
            </p>
    </div>
  </section>

  <!-- Contact Section -->
  
  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
   
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../paginainicio/vendor/jquery/jquery.min.js"></script>
  <script src="../paginainicio/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../paginainicio/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../paginainicio/js/grayscale.min.js"></script>

</body>

</html>
