<?php 

include "con_db.php";
	$alert = '';
	if(!empty($_POST)){
		if(empty($_POST['ci']) || empty($_POST['password'])){
			$alert = 'Ingrese su usuario y contraseña';
		} else {
			
			$user = $_POST['ci'];
			$pass = $_POST['password'];
			
			$query = mysqli_query($conn,"SELECT * FROM usuario WHERE ci = '$user' AND passwordu = '$pass' AND usuario = 'Estudiante'");
			$result = mysqli_num_rows($query);
			
			if($result > 0){
				$data = mysqli_fetch_array($query);
				session_start();
				$_SESSION['active'] = true;
				$_SESSION['usuario'] = $data['usuario'];
				$_SESSION['ci'] = $data['ci'];
				$_SESSION['password'] = $data['passwordu'];
				
				header('Location: ./index.php');
				?>
			<h3 class = "ok">holaaa!</h3>
			<?php
			} else {
				?>
			<h3 class = "bad">Usuario no registrado!!!</h3>
			<?php
			}			
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicia secion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form action="" method="post">
    	<h1>Verificación</h1>
    	<input type="text" name="ci" placeholder="Ci">
    	<input type="text" name="password" placeholder="Password">
    	<input type="submit" name="ingresar">
    </form>

</body>
</html>